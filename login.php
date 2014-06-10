<?php
session_start(); 
include'menu.php'

?>

<div class="span5 offset3">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="login" method="post" class="form-horizontal">
 <div class="control-group">
<label class="control-label" for="username">Username</label>
<input name="username" type="text" id="username">
</div>
 <div class="control-group">
<label class="control-label" for="password">Password</label>
<input name="password" type="password" id="password" />
</div>
 <div class="control-group">
<input name="login" type="submit" value="Login" class="btn btn-success" id="login" >
</div>
</form>
</div>
</div>


<?php
if(isset($_POST['login']))
{
include'config.php';

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
header("location:/village/home.php");
}
else {
 ?>
<div class="span4">
<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Username or Password Wrong!!</h4>
  
</div>
</div>
<?php

//header("location:http://localhost/village/index.php?page=login");

}
}

?>
<?php

include'bottom.php';
?>