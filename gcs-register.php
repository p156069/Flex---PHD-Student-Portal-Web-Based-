<?php


		
	$xml = new DOMDocument("1.0","UTF-8");
	$xml->load("gcs-login-details.xml");
	
	$rootTag = $xml->getElementsByTagName("details")->item(0);
	
	$dataTag = $xml->createElement("gcs");
	$dataTag->setAttribute("id",$_POST['username']);
	
	$name = $xml->createElement("name",$_POST['fullname']);
	$city = $xml->createElement("city",$_POST['city']);
	$address = $xml->createElement("address",$_POST['address']);
	$username = $xml->createElement("username",$_POST['username']);
	$email = $xml->createElement("email",$_POST['email']);
	$password = $xml->createElement("password",$_POST['password']);
	
	$dataTag->appendChild($name);
	$dataTag->appendChild($city);
	$dataTag->appendChild($address);
	$dataTag->appendChild($username);
	$dataTag->appendChild($email);
	$dataTag->appendChild($password);
	
	$rootTag->appendChild($dataTag);


	$xml->save("gcs-login-details.xml");
	
	echo "<script type='text/javascript'>alert('Record Update Successfully!)</script>";
    
    
echo "<script type='text/javascript'>location.href='gcs-index.html' </script>";

 

?>