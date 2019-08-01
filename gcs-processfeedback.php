<?php

var_dump($_POST);
$currentPath =  dirname(__FILE__);
$xml = new DOMDocument('1.0', 'utf-8');
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load('gcs-feedback.xml');

$x = $xml->getElementsByTagName("student")[0];
//$var = $x->getAttribute("id");


$clone = $x->cloneNode(true);
$initial_data = array();

print_r($_POST);
$tree_trav_len = 0;

//if(isset($_POST["submit"])) {
  $roll_no = $_POST["rollno"];
  $name = $_POST["names"];
  $email = $_POST["email"];
  $website = $_POST["website"];
  $comment = $_POST["comment"];

  array_push($initial_data, $name);
  array_push($initial_data, $email);
  array_push($initial_data, $website);
  array_push($initial_data, $comment);

  $limit = sizeof($initial_data);
  $tree_trav_len = $limit - 1;
  $clone->setAttribute("id", $roll_no);
  for($i=0; $i < $limit; $i++){
      $clone->childNodes[$i]->nodeValue = $initial_data[$i];

  }

  $xml->documentElement->appendChild($clone);
  echo "xml file is save ";
  $xml->save("gcs-feedback.xml");

  // header
//}
?>
