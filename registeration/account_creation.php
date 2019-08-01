<?php
   if(empty($_SESSION)){
    session_start();
} 

if(!isset($_SESSION['username'])) { //if not yet logged in
    header("Location: index.html");// send to login page
    exit;
}
var_dump($_POST);
$currentPath =  dirname(__FILE__);
$xml = new DOMDocument('1.0', 'utf-8');
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load('student_account.xml');

// cloning the root child
$x = $xml->getElementsByTagName("student")[0];
$var = $x->getAttribute("id");

// setting id to original child +1
//$x->setAttribute("id", intval($var)+1);
$clone = $x->cloneNode(true);

// setting id to clone child = original


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
  	$path = $GLOBALS['currentPath'].'\/'.$name;
  	if($error == 0){
  		move_uploaded_file($tmpName, $path);
  	}
  }
  return $path;
}

$initial_data = array();
print_r($_POST);
$tree_trav_len = 0;

//if(isset($_POST["submit"])) {
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $roll_no = $_POST["Rollno"];
  $email = $_POST["email"];
  $campus = $_POST['campus_'];
  $depart = $_POST["Depart"];
  $adm_date = $_POST["adm_date"];
  $adm_status = $_POST["Astatus"];
  $Pro_status = $_POST["Pstatus"];

  array_push($initial_data, $first_name);
  array_push($initial_data, $roll_no);
  array_push($initial_data, $email);
  array_push($initial_data, $campus);
  array_push($initial_data, $depart);
  array_push($initial_data, $adm_date);
  array_push($initial_data, $adm_status);
  array_push($initial_data, $Pro_status);

  $limit = sizeof($initial_data);
  $tree_trav_len = $limit - 1;
  $clone->setAttribute("id", $_SESSION['username']);
  for($i=0; $i < $limit; $i++){
      $clone->childNodes[$i]->nodeValue = $initial_data[$i];

  }

  // Now education detail
  //GAT detail is tailored with xml clone node
  $gat = $clone->getElementsByTagName("GAT")[0];

  $gat->childNodes[0]->nodeValue = $_POST["g_score"];
  $gat->childNodes[1]->nodeValue = $_POST["g_total_score"];
  $gat->childNodes[2]->nodeValue = $_POST["g_Test"];
  $gat->childNodes[3]->nodeValue = $_POST["g_Exp"];
  $res = $gat->childNodes[4];
  $res->childNodes[0]->setAttribute("src", save_upload('g_res', $roll_no));
    //SSC detail is tailored with xml clone node

  $ssc = $clone->getElementsByTagName("ssc")[0];

  $ssc->childNodes[0]->nodeValue = $_POST["s_score"];
  $ssc->childNodes[1]->nodeValue = $_POST["s_total_marks"];
  $ssc->childNodes[2]->nodeValue = $_POST["s_place"];
  $ssc->childNodes[3]->nodeValue = $_POST["s_Test"];
  $res = $ssc->childNodes[4];

  $res->childNodes[0]->setAttribute("src", save_upload('strans', $roll_no));
//  $ssc->childNodes[5]->childNodes[0]->setAttribute("src", save_upload('sdegree', $roll_no));


  //FSC detail is tailored wiht xml clone node

  $fsc = $clone->getElementsByTagName("fsc")[0];

  $fsc->childNodes[0]->nodeValue = $_POST["f_score"];
  $fsc->childNodes[1]->nodeValue = $_POST["f_total_marks"];
  $fsc->childNodes[2]->nodeValue = $_POST["f_place"];
  $fsc->childNodes[3]->nodeValue = $_POST["f_Test"];
  $res = $fsc->childNodes[4];

  $res->childNodes[0]->setAttribute("src", save_upload('ftrans', $roll_no));

  // short cut
  //$fsc->childNodes[5]->childNodes[0]->setAttribute("src", save_upload('fdegree', intval($var)+1));

  //BSC

  $bsc = $clone->getElementsByTagName("BSC")[0];
  $bsc->childNodes[0]->nodeValue = $_POST["b_gpa"];
  $bsc->childNodes[1]->nodeValue = $_POST["b_totalgpa"];
  $bsc->childNodes[2]->nodeValue = $_POST["b_place"];
  $bsc->childNodes[3]->nodeValue = $_POST["b_comp"];
  $res = $bsc->childNodes[4];

  $res->childNodes[0]->setAttribute("src", save_upload('b_trans', $roll_no));
  $bsc->childNodes[5]->childNodes[0]->setAttribute("src", save_upload('b_degree', $roll_no));
  $bsc->childNodes[6]->childNodes[0]->setAttribute("src", save_upload('b_equi', $roll_no));

//MSC data is tailored with xml file clone node

  $msc = $clone->getElementsByTagName("MSC")[0];

  $msc->childNodes[0]->nodeValue = $_POST["m_gpa"];
  $msc->childNodes[1]->nodeValue = $_POST["m_total_gpa"];
  $msc->childNodes[2]->nodeValue = $_POST["m_place"];
  $msc->childNodes[3]->nodeValue = $_POST["m_comp"];
  $res = $msc->childNodes[4];

  $res->childNodes[0]->setAttribute("src", save_upload('m_trans', $roll_no));
  $msc->childNodes[5]->childNodes[0]->setAttribute("src", save_upload('m_degree', $roll_no));
  $msc->childNodes[6]->childNodes[0]->setAttribute("src", save_upload('m_equi', $roll_no));

$clone->getElementsByTagName("photograph")[0]->childNodes[0]->setAttribute("src", save_upload('pic', intval($var)+1));
$elem = $clone->getElementsByTagName("phone")[0];
$elem->childNodes[0]->nodeValue = $_POST["phone"];
$elem = $clone->getElementsByTagName("CNIC")[0];
$elem->childNodes[0]->nodeValue = $_POST["cnic"];

  $elem = $clone->getElementsByTagName("supervisor")[0];
  $elem->childNodes[0]->nodeValue = $_POST["sup"];
  $elem = $clone->getElementsByTagName("funding")[0];
  $elem->childNodes[0]->nodeValue = $_POST["fstatus"];

  if($_POST['fstatus'] == "Fellowship" )
    $clone->getElementsByTagName("HEC_pincode")[0]->childNodes[0]->nodeValue = $_POST["pincode"];

  $xml->documentElement->appendChild($clone);
  $xml->save("student_account.xml");

  $message = "Details Registered Successfully";
  echo "<script type='text/javascript'>alert('$message'); window.location.href='/neon/main.php'; </script>";
  
?>