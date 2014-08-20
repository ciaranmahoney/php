<?php
class Insightly{
  private $apikey;

  public function __construct($apikey){
    $this->apikey = $apikey;
  }

  public function getContacts($options){
    $email = @$options["email"];
    $tag = @$options["tag"];
    $ids = @$options["ids"];

    $request = $this->GET("/v2.1/Contacts");

    // handle standard OData options
    $this->buildODataQuery($request, $options);

    // handle other options
    if($email != null){
      $request->queryParam("email", $email);
    }
    if($tag != null){
      $request->queryParam("tag", $tag);
    }
    if($ids != null){
      $s = "";
      foreach($ids as $key => $value){
        if($key > 0){
          $s = $s . ",";
        }
        $s = $s . $value;
      }
      $request->queryParam("ids", $s);
    }

    return $request->asJSON();
  }

  public function getContact($id){
    return $this->GET("/v2.1/Contacts/" . $id);
  }

  public function addContact($contact){
    $url_path = "/v2.1/Contacts";
    $request = null;

    if(isset($contact->CONTACT_ID) && $contact->CONTACT_ID > 0){
      $request = $this->PUT($url_path);
    }
    else{
      $request = $this->POST($url_path);
    }

    return $request->body($contact)->asJSON();
  }

  public function deleteContact($id){
    $this->DELETE("/v2.1/Contacts/$id")->asString();
    return true;
  }

  public function getContactEmails($contact_id){
    return $this->GET("/v2.1/Contacts/$contact_id/Emails")->asJSON();
  }

  public function getContactNotes($contact_id){
    return $this->GET("/v2.1/Contacts/$contact_id/Notes")->asJSON();
  }

  public function getContactTasks($contact_id){
    return $this->GET("/v2.1/Contacts/$contact_id/Tasks")->asJSON();
  }

  public function getCurrencies(){
    return $this->GET("/v2.1/Currencies")->asJSON();
  }

  public function getUsers(){
    return $this->GET("/v2.1/Users")->asJSON();
  }

  public function getUser($id){
    return $this->GET("/v2.1/Users/" . $id)->asJSON();
  }

  private function buildODataQuery($request, $options){
    $top = @$options["top"];
    $skip = @$options["skip"];
    $orderby = @$options["orderby"];
    $filters = @$options["filters"];

    if($top != null){
      $request->queryParam('$top', $top);
    }
    if($skip != null){
      $request->queryParam('$skip', $skip);
    }
    if($orderby != null){
      $request->queryParam('$orderby', $orderby);
    }
    if($filters != null){
      foreach($filters as $filter){
        $request->queryParam("$filter", $filter);
      }
    }

    return $request;
  }

  private function GET($url_path){
    return new InsightlyRequest("GET", $this->apikey, $url_path);
  }

  private function PUT($url_path){
    return new InsightlyRequest("PUT", $this->apikey, $url_path);
  }

  private function POST($url_path){
    return new InsightlyRequest("POST", $this->apikey, $url_path);
  }

  private function DELETE($url_path){
    return new InsightlyRequest("DELETE", $this->apikey, $url_path);
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

    // Test getUsers()
    try{
      $users = $this->getUsers();
      $user = $users[0];
      $user_id = $user->USER_ID;
      echo "PASS: getUsers(), found " . count($users) . " users.\n";
      $passed += 1;
    }
    catch(Exception $ex){
      $user = null;
      $users = null;
      $user_id = null;
      echo "FAIL: getUsers()\n";
      $failed += 1;
    }

    // Test getContacts()
    try{
      $contacts = $this->getContacts(array("orderby" => "DATE_UPDATED_UTC desc",
                                           "top" => $top));
      $contact = $contacts[0];
      echo "PASS: getContacts(), found " . count($contacts) . " contacts.\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getContacts()\n";
      $failed += 1;
    }

    if($contact != null){
      $contact_id = $contact->CONTACT_ID;
      try{
        $emails = $this->getContactEmails($contact_id);
        echo "PASS: getContactEmails(), found " . count($emails) . " emails.\n";
        $passed += 1;
      }
      catch(Exception $ex){
        echo "FAIL: getContactEmails()\n";
        $failed += 1;
      }

      try{
        $notes = $this->getContactNotes($contact_id);
        echo "PASS: getContactNotes(), found " . count($notes) . " notes.\n";
        $passed += 1;
      }
      catch(Exception $ex){
        echo "FAIL: getContactNotes()\n";
        $failed += 1;
      }

      try{
        $tasks = $this->getContactTasks($contact_id);
        echo "PASS: getContactTasks(), found " . count($tasks) . " tasks.\n";
        $passed += 1;
      }
      catch(Exception $ex){
        echo "FAIL: getContactTasks()\n";
        $failed += 1;
      }
    }

    // Test addContact()
    try{
      $contact = (object)array("SALUTATION" => "Mr",
                               "FIRST_NAME" => "Testy",
                               "LAST_NAME" => "McTesterson");
      $contact = $this->addContact($contact);
      echo "PASS: addContact()\n";
      $passed += 1;

      // Test deleteContact()
      try{
        $this->deleteContact($contact->CONTACT_ID);
        echo "PASS: deleteContact()\n";
        $passed += 1;
      }
      catch(Exception $ex){
        echo "FAIL: deleteContact()\n";
        $failed += 1;
      }
    }
    catch(Exception $ex){
      $contact = null;
      echo "FAIL: addContact()\n";
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
  private $url_path;
  private $headers;
  private $querystrings;
  private $body;

  function __construct($method, $apikey, $url_path){
    $this->curl = curl_init();
    $this->url_path = $url_path;
    $this->headers = array("Authorization: Basic " . base64_encode($apikey . ":"));
    $this->querystrings = array();
    $this->body = null;

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

    $url =  InsightlyRequest::URL_BASE . $this->url_path . $this->buildQueryString();
    curl_setopt($this->curl, CURLOPT_URL, $url);
    curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->headers);

    $response = curl_exec($this->curl);
    $errno = curl_errno($this->curl);
    if($errno != 0){
      throw new Exception("HTTP Error (" . $errno . "): " . curl_error($this->curl));
    }

    $status_code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
    if(!($status_code == 200 || $status_code == 201 || $status_code == 202)){
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

  public function body($obj){
    $data = json_encode($obj);

    $errno = json_last_error();
    if($errno != JSON_ERROR_NONE){
      throw new Exception("Error encountered encoding JSON: " . json_last_error_message());
    }

    curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
    return $this;
  }

  private function method($method){
    curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, $method);
    return $this;
  }

  public function queryParam($name, $value){
    // build the query string for this name/value pair
    $querystring = http_build_query(array($name => $value));

    // append it to the list of query strings
    $this->querystrings[] = $querystring;

    return $this;
  }

  private function buildQueryString(){
    if(count($this->querystrings) == 0){
      return "";
    }
    else{
      $querystring = "?";

      foreach($this->querystrings as $index => $value){
        if($index > 0){
          $querystring .= "&";
        }
        $querystring .= $value;
      }

      return $querystring;
    }
  }
}
?>
