<?php
include'../config.php';

$tablename="login";


// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect MySQL injection 
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tablename WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

while ($row = mysql_fetch_assoc($result)) { 
$_SESSION['usertype']=$row["type"]; // the email value
}
// Register $myusername, $mypassword and redirect to file index
session_register("myusername");
$_SESSION['user']=$myusername;
header("location:../index.php");
}
else {
echo"Username or Password Wrong!!"; ?>
<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  Best check yo self, you're not...
</div>

<?php

header("location:../index.php?page=login");

}
?>
