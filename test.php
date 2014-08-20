<?php
require('insightly.php');

function run_tests($apikey){
  $factory = new InsightlyRequestFactory($apikey);
  $request = $factory->GET("/v2.1/Users");
  var_dump($request->asJSON());
}

run_tests($argv[1]);
?>