<?php
class Insightly{
  private $apikey;

  public function __construct($apikey){
    $this->apikey = $apikey;
  }

  public function getCurrencies(){
    return $this->GET("/v2.1/Currencies")->asJSON();
  }

  private function GET($url_path){
    return new InsightlyRequest("GET", $this->apikey, $url_path);
  }

  public function test($top=null){
    echo "Test API .....\n";

    echo "Testing authentication\n";

    $passed = 0;
    $failed = 0;

    $currencies = $this->getCurrencies();
    if(count($currencies) > 0){
      echo "Authentication passed...\n";
      $passed += 1;
    }
    else{
      $failed += 1;
    }

    if($failed > 0){
      throw new Exception($failed . " tests failed!");
    }
  }
}

class InsightlyRequest{
  const URL_BASE = 'https://api.insight.ly';
  private $curl;
  private $headers;

  function __construct($method, $apikey, $url_path){
    $this->curl = curl_init(InsightlyRequest::URL_BASE . $url_path);
    $this->headers = array("Authorization: Basic " . base64_encode($apikey . ":"));

    switch($method){
    case "GET":
      // GET is the default
      break;
    case "DELETE":
      $this->method("DELETE");
      break;
    case "POST":
      $this->method("POST");
      break;
    case "PUT":
      $this->method("PUT");
    default: throw new Exception('Invalid HTTP method: ' . $method);
    }

    // Have curl return the response, rather than echoing it
    curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
  }

  public function asString(){
    // This may be useful for debugging
    //curl_setopt($this->curl, CURLOPT_VERBOSE, true);

    curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->headers);

    $response = curl_exec($this->curl);
    $errno = curl_errno($this->curl);
    if($errno != 0){
      throw new Exception("HTTP Error (" . $errno . "): " . curl_error($this->curl));
    }

    $status_code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
    if(!($status_code == 200)){
      throw new Exception("Bad HTTP status code: " . $status_code);
    }

    return $response;
  }

  public function asJSON(){
    $data = json_decode($this->asString());

    $errno = json_last_error();
    if($errno != JSON_ERROR_NONE){
      throw new Exception("Error encountered decoding JSON: " . json_last_error_message());
    }

    return $data;
  }

  private function method($method){
    curl_setupt($this->curl, CURLOPT_CUSTOMREQUEST, $method);
    return $this;
  }
};
?>
