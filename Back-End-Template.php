<?php

require_once 'modal/config.php';
///////////////////////////////////////////////////////////////////////////////
//DataBase Retrieval
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $category = $row["id"];
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
//////////////////////////////////////////////////////////////////////////////
//Front

$title = 'Nkgwete IT Solutions | Help Centere';

$content = '
Front End Goes here 
';
include 'Template.php'


?>