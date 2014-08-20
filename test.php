<?php
require('insightly.php');

function run_tests($apikey){
  $insightly = new Insightly($apikey);
  $insightly->test();
}

run_tests($argv[1]);
?>