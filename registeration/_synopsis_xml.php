<?php

  $currentPath =  dirname(__FILE__);
  $xml = new DOMDocument('1.0','utf-8');
  $xml->formatOutput = true;
  $xml->preserveWhiteSpace = false;
  $xml->load('documents.xml');

  $child = $xml->getElementsByTagName("student")[0];
  $clone = $child->cloneNode(true);

  function save_upload($name_, $id) {
    $name = " ";
    $path = "";
    if(isset($_FILES[$name_])) {
    	$name = $_FILES[$name_]['name'];
    	$tmpName = $_FILES[$name_]['tmp_name'];
    	$error = $_FILES[$name_]['error'];
      $name = $id.'_'.$name;
      echo $name;
      echo $GLOBALS['currentPath'];
    	// create folder path
    	$path = $GLOBALS['currentPath'].'\\'.$name;
    	if($error == 0){
    		move_uploaded_file($tmpName, $path);
    	}
    }
    return $path;
  }

  if(isset($_POST['submit'])){

    $clone->setAttribute("id", $_POST['rollno']);
    $clone->getElementsByTagName("Rollno")[0]->childNodes[0]->nodeValue = $_POST['rollno'];
    $clone->getElementsByTagName("depart")[0]->childNodes[0]->nodeValue = $_POST['deptdropdown'];
    $clone->getElementsByTagName("Progress_status")[0]->childNodes[0]->nodeValue = $_POST['statusdropdown'];
    $syn_file_elem =   $clone->getElementsByTagName("synopsis")[0];
    $syn_file_elem->childNodes[0]->setAttribute("src", save_upload('snyopdoc', $_POST['rollno']));
    $syn_file_elem =   $clone->getElementsByTagName("thesis")[0];
    $syn_file_elem->childNodes[0]->setAttribute("src", save_upload('thesis', $_POST['rollno']));

    $xml->documentElement->appendChild($clone);
    $xml->save("documents.xml");

    $message = "Documents uploaded Successfully";
  echo "<script type='text/javascript'>alert('$message'); window.location.href='/neon/main.php'; </script>";




   }

 ?>
