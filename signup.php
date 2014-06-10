<?php
session_start(); 
include'menu.php'

?>
<div class="span5 offset3">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="name">name</label>
<input name="name" type="text">
<label for="email">Email</label>
<input name="email" type="text">
<label for="address">Address</label>
<input name="address" type="text" width="200" height="40">
<label for="phone">Phone</label>
<input name="phone" type="text">
<label for="username">username</label>
<input name="username" type="text">
<label for="password">password</label>
<input name="password" type="text">
<input name="register" type="submit" value="register" class="btn btn-primary">

</form>


</div>
<?php

include'config.php';
if(isset($_POST['register']))
{
$sql="select max(userid) from login";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res,MYSQL_NUM))
{
$userid=$row[0]+1;
echo $row[0];
}


if(!is_numeric($_POST['phone']))
err("Phone Number is Wrong !!");
else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
err("Email is not Valid ..!!");

else

{
$sql="insert into registration values('$_POST[name]','$_POST[email]','$_POST[address]','$_POST[phone]','$_POST[username]','$_POST[password]')";
//$sql2="insert into login values('$_POST[username]','$_POST[password]','user','$userid')";
$res=mysql_query($sql);
//$res2=mysql_query($sql2);

if($res)
success("Successfully Registered.After admin review you can use the Services.");
else
err("values not inserted");


}

}// if

// fn for err disply
function err($a)
{
?> <div class="span4">
<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4><?php echo $a; ?></h4>
  
</div>
</div><?php
}
function success($a)
{
?>
<div class="span4">
<div class="alert alert-sucess">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4><?php echo $a; ?></h4>
  
</div>
</div>
<?php
}

include'bottom.php';
?>