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

  public function getCountries(){
    return $this->GET("/v2.1/Countries")->asJSON();
  }

  public function getCurrencies(){
    return $this->GET("/v2.1/Currencies")->asJSON();
  }

  public function getCustomFields(){
    return $this->GET("/v2.1/CustomFields")->asJSON();
  }

  public function getCustomField($id){
    return $this->GET("/v2.1/CustomFields/$id")->asJSON();
  }

  public function getEmails($options){
    $request = $this->GET("/v2.1/Emails");
    $this->buildODataQuery($request, $options);
    return $request->asJSON();
  }

  public function getEmail($id){
    return $this->GET("/v2.1/Emails/$id")->asJSON();
  }

  public function deleteEmail($id){
    $this->DELETE("/v2.1/Emails/$id")->asString();
    return true;
  }

  public function getEmailComments($email_id){
    $this->GET("/v2.1/Emails/$email_id/Comments")->asJSON();
  }

  public function addCommentToEmail($email_id, $body, $owner_user_id){
    $data = new stdClass();
    $data->BODY = $body;
    $data->OWNER_USER_ID = $owner_user_id;
    return $this->POST("/v2.1/Emails/")->body($data)->asJSON();
  }

  public function getEvents($options){
    $request = $this->GET("/v2.1/Events");
    $this->buildODataQuery($request, $options);
    return $request->asJSON();
  }

  public function getEvent($id){
    return $this->GET("/v2.1/Events/$id")->asJSON();
  }

  public function addEvent($event){
    if($event == "sample"){
      return $this->getEvents(array("top" => 1)[0]);
    }

    $url_path = "/v2.1/Events";
    if(isset($event->EVENT_ID) && ($event->EVENT_ID > 0)){
      $request = $this->PUT($url_path);
    }
    else{
      $request = $this->POST($url_path);
    }

    return $request->body($event)->asJSON();
  }

  public function deleteEvent($id){
    $this->DELETE("/v2.1/Events/$id")->asString();
    return true;
  }

  public function getFileCategories(){
    return $this->GET("/v2.1/FileCategories")->asJSON();
  }

  public function getFileCategory($id){
    return $this->GET("/v2.1/FileCategories/$id")->asJSON();
  }

  public function addFileCategory($category){
    if($category == "sample"){
      return $this->getFileCategories()[0];
    }

    $url_path = "/v2.1/FileCategories";
    if(isset($category->CATEGORY_ID)){
      $request = $this->PUT($url_path);
    }
    else{
      $request = $this->POST($url_path);
    }

    return $request->body($category)->asJSON();
  }

  public function deleteFileCategory($id){
    $this->DELETE("/v2.1/FileCategories/$id")->asString();
    return true;
  }

  public function getNotes($options){
    $request = $this->GET("/v2.1/Notes");
    $this->buildODataQuery($request, $options);
    return $request->asJSON();
  }

  public function getNote($id){
    return $request = $this->GET("/v2.1/Notes/$id")->asJSON();
  }

  public function addNote($note){
    if($note == "sample"){
      return $this->getNotes(array("top" => 1))[0];
    }

    $url_path = "/v2.1/Notes";
    if(isset($note->NOTE_ID) && ($note->NOTE_ID > 0)){
      $request = $this->PUT($url_path);
    }
    else{
      $request = $this->POST($url_path);
    }

    return $request->body($notes)->asJSON();
  }

  public function getNoteComments($note_id){
    return $this->GET("/v2.1/Notes/$note_id/Comments")->asJSON();
  }

  public function addNoteComment($note_id, $comment){
    if($comment == "sample"){
      $comment = new stdClass();
      $comment->COMMENT_ID = 0;
      $comment->BODY = "This is a comment.";
      $comment->OWNER_USER_ID = 1;
      $comment->DATE_CREATED_UTC = "2014-07-15 16:40:00";
      $comment->DATE_UPDATED_UTC = "2014-07-15 16:40:00";
      return $comment;
    }

    return $this->POST("/v2.1/$note_id/Comments")->body($comment)->asJSON();
  }

  public function deleteNote($id){
    $this->DELETE("/v2.1/Notes/$id")->asString();
    return true;
  }

  public function getOpportunities($options){
    $request = $this->GET("/v2.1/Opportunities");
    $this->buildODataQuery($request, $options);
    return $request->asJSON();
  }

  public function addOpportunity($opportunity){
    if($opportunity == "sample"){
      return $this->getOpportunities(array("top" => 1))[0];
    }

    $url_path = "/v2.1/Opportunities";

    if(isset($opportunity->OPPORTUNITY_ID) && ($opportunity->OPPORTUNITY_ID > 0)){
      $request = $this->PUT($url_path);
    }
    else{
      $request = $this->POST($url_path);
    }

    return $request->body($opportunity)->asJSON();
  }

  public function deleteOpportunity($id){
    $this->DELETE("/v2.1/Opportunities/$id")->asString();
    return true;
  }

  public function getOpportunityEmails($opportunity_id){
    return $this->GET("/v2.1/Opportunities/$opportunity_id/Emails")->asJSON();
  }

  public function getOpportunityNotes($opportunity_id){
    return $this->GET("/v2.1/Opportunities/$opportunity_id/Notes")->asJSON();
  }

  public function getOpportunityStateHistory($opportunity_id){
    return $this->GET("/v2.1/Opportunities/$opportunity_id/StateHistory")->asJSON();
  }

  public function getOpportunityTasks($opportunity_id){
    return $this->GET("/v2.1/Opportunities/$opportunity_id/Tasks")->asJSON();
  }

  public function getOpportunityCategories(){
    return $this->GET("/v2.1/OpportunityCategories")->asJSON();
  }

  public function getOpportunityCategory($id){
    return $this->GET("/v2.1/OpportunityCategories/$id")->asJSON();
  }

  public function addOpportunityCategory($category){
    if($category == "sample"){
      return $this->getOpportunityCategories()[0];
    }

    $url_path = "/v2.1/OpportunityCategories";
    if(isset($category->CATEGORY_ID) && ($category->CATEGORY_ID > 0)){
      $request = $this->PUT($url_path);
    }
    else{
      $request = $this->POST($url_path);
    }

    return $request->body($category)->asJSON();
  }

  public function deleteOpportunityCategory($id){
    $this->DELETE("/v2.1/OpportunityCategories/$id")->asString();
    return true;
  }

  public function getOpportunityStateReasons(){
    return $this->GET("/v2.1/OpportunityStateReasons");
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

    try{
      $countries = $this->getCountries();
      echo "PASS: getCountries(), found " . count($countries) . " countries.\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getCountries()\n";
      $failed += 1;
    }

    try{
      $currencies = $this->getCurrencies();
      echo "PASS: getCurrencies(), found " . count($currencies) . " currencies\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getCurrencies()\n";
      $failed += 1;
    }

    try{
      $customfields = $this->getCustomFields();
      echo "PASS: getCustomFields(), found " . count($customfields) . " custom fields.\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getCustomFields()\n";
      $failed += 1;
    }

    // Test getEmails()
    try{
      $emails = $this->getEmails(array("top" => $top));
      echo "PASS: getEmails(), found " . count($emails) . " emails.\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getEmails()\n";
      $failed += 1;
    }

    // Test getEvents()
    try{
      $events = $this->getEvents(array("top" => $top));
      echo "PASS: getEvents(), found " . count($events) . " events.\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getEvents()\n";
      $failed += 1;
    }

    // Test addEvent()
    try{
      $event = (object)array("TITLE" => "Test Event",
                             "LOCATION" => "Somewhere",
                             "DETAILS" => "Details",
                             "START_DATE_UTC" => "2014-07-12 12:00:00",
                             "END_DATE_UTC" => "2014-07-12 13:00:00",
                             "OWNER_USER_ID" => $user_id,
                             "ALL_DAY" => false,
                             "PUBLICLY_VISIBLE" => true);
      $event = $this->addEvent($event);
      echo "PASS: addEvent()\n";
      $passed += 1;

      // Test deleteEvent()
      try{
        $this->deleteEvent($event->EVENT_ID);
        echo "PASS: deleteEvent()\n";
        $passed += 1;
      }
      catch(Exception $ex){
        echo "FAIL: deleteEvent()\n";
        $failed += 1;
      }
    }
    catch(Exception $ex){
      $event = null;
      echo "FAIL: addEvent\n";
      $failed += 1;
    }

    // Test getFileCategories()
    try{
      $categories = $this->getFileCategories();
      echo "PASS: getFileCategories(), found " . count($categories) . " categories\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getFileCategories()\n";
      $failed += 1;
    }

    // Test addFileCategory()
    try{
      $category = new stdClass();
      $category->CATEGORY_NAME = "Test Category";
      $category->ACTIVITY = true;
      $category->BACKGROUND_COLOR = "000000";

      $category = $this->addFileCategory($category);
      echo "PASS: addFileCategory()\n";
      $passed += 1;

      // Test deleteFileCategory()
      try{
        $this->deleteFileCategory($category->CATEGORY_ID);
        echo "PASS: deleteFileCategory()\n";
        $passed += 1;
      }
      catch(Exception $ex){
        echo "FAIL: deleteFileCategory()\n";
        $failed += 1;
      }
    }
    catch(Exception $ex){
      $category = null;
      echo "FAIL: addFileCategory()\n";
      $failed += 1;
    }

    // Test getNotes()
    try{
      $notes = $this->getNotes(array());
      echo "PASS: getNotes(), found " . count($notes) . " notes.\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getNotes\n";
      $failed += 1;
    }

    // Test getOpportunities()
    try{
      $opportunities = $this->getOpportunities(array("orderby" => "DATE_UPDATED_UTC desc",
                                                     "top" => $top));
      echo "PASS: getOpportunities(), found " . count($opportunities) . " opportunities.\n";
      $passed += 1;

      if(!empty($opportunities)){
        $opportunity = $opportunities[0];
        $opportunity_id = $opportunity->OPPORTUNITY_ID;

        // Test getOpportunityEmails()
        try{
          $emails = $this->getOpportunityEmails($opportunity_id);
          echo "PASS: getOpportunityEmails(), found " . count($emails) . " emails.\n";
          $passed += 1;
        }
        catch(Exception $ex){
          echo "FAIL: getOpportunityEmails()\n";
          $failed += 1;
        }

        // Test getOpportunityNotes()
        try{
          $notes = $this->getOpportunityNotes($opportunity_id);
          echo "PASS: getOpportunityNotes(), found " . count($notes) . " notes.\n";
          $passed += 1;
        }
        catch(Exception $ex){
          echo "FAIL: getOpportunityNotes()\n";
          $failed += 1;
        }

        // Test getOpportunityTasks()
        try{
          $tasks = $this->getOpportunityTasks($opportunity_id);
          echo "PASS: getOpportunityTasks(), found " . count($tasks) . " tasks.\n";
          $passed += 1;
        }
        catch(Exception $ex){
          echo "FAIL: getOpportunityTasks()\n";
          $failed += 1;
        }

        // Test getOpportunityStateHistory()
        try{
          $states = $this->getOpportunityStateHistory($opportunity_id);
          echo "PASS: getOpportunityStateHistory(), found " . count($states) . " states in history.\n";
          $passed += 1;
        }
        catch(Exception $ex){
          echo "FAIL: getOpportunityStateHistory()\n";
          $failed += 1;
        }
      }
    }
    catch(Exception $ex){
      echo "FAIL: getOpportunities()\n";
      $failed += 1;
    }

    // Test getOpportunityCategories()
    try{
      $categories = $this->getOpportunityCategories();
      echo "PASS: getOpportunityCategories(), found " . count($categories) . "categoriesn\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getOpportunityCategories()\n";
      $failed += 1;
    }

    // Test addOpportunityCategory()
    try{
      $category = new stdClass();
      $category->CATEGORY_NAME="Test Category";
      $category->ACTIVE = true;
      $category->BACKGROUND_COLOR = "000000";

      $category = $this->addOpportunityCategory($category);
      echo "PASS: getOpportunityCategory()\n";
      $passed += 1;

      // Test deleteOpportunityCategory
      try{
        $this->deleteOpportunityCategory($category->CATEGORY_ID);
        echo "PASS: deleteOpportunityCategory()\n";
        $passed += 1;
      }
      catch(Exception $ex){
        echo "FAIL: deleteOpportunityCategory()\n";
        $failed += 1;
      }
    }
    catch(Exception $ex){
      echo "FAIL: addOpportunityCategory()\n";
      $failed += 1;
    }

    // Test getOpportunityStateReasons()
    try{
      $reasons = $this->getOpportunityStateReasons();
      echo "PASS: getOpportunityStateReasons(), found " . count($reasons) . " reasons.\n";
      $passed += 1;
    }
    catch(Exception $ex){
      echo "FAIL: getOpportunityStateReasons()\n";
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
      throw new Exception("Error encountered decoding JSON: " . json_last_error_msg());
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
    $this->headers[] = "Content-Type: application/json";
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
