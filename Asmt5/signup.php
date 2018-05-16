




<?php
$servername="localhost";
$username="webphp";
$dbname="finaldb";
$pass="password";



if(!($database=mysqli_connect($servername,$username,$pass)))
  die("Could not connect to database");

if(!mysqli_select_db($database,$dbname))
  die("Could not open finaldb");
  
if(!$result=mysqli_query($database,"INSERT INTO auth (username, password, firstName, lastName, email, phone) VALUES ($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'])")
  die("Error occurred trying to register you.");
  
print("You are now registered.");

showTable();

mysqli_close($database);

function showTable(){
  
  if(!$tables=mysqli_query($database,
    "SELECT firstName, lastName FROM auth")
    die("Error occurred trying to show user table.");
    
  print("<table><thead><th>First Name</th><th>Last Name</th></thead><tbody>");
  while($row=mysqli_fetch_assoc($tables)){
    print("<tr><td>$row['firstName']</td><td>$row['lastName']</td></tr>");
  }
  print("</tbody></table>");
}



?>