<?php
  include("Initialiser.php");
  
  $host="localhost";
  $user="root";
  $pass="";
  $base="user_login";
	$id=mysqli_connect($host,$user,$pass);
  mysqli_select_db($id, $base) or include("Setup.php");
  $result= mysqli_query($id, "SELECT * FROM BIERES,difbierebar where id_BIERES=id_BIERES and id_BARS='1'");
  echo $result;
  $data = array();
  while ($row = mysqli_fetch_assoc($result)){
  $data[] = $row;
  }
  echo json_encode($data);
?>