<?php
if(isset($_SESSION['user']))
{
?>
<?php 
// checking the type of the logged user.if admin disply one menu and if it user then disply another menu.
/*
include'config.php';
$sql="select * from login where username='$_SESSION[user]'";
$res=mysql_query($sql);

while($row = mysql_fetch_array($res)) { 
$user_type=$row["type"];
//echo "$user_type";
}

*/
?>

<div class="span2 offset1">

<ul class="nav nav-list">
<li class="nav-header">Control Panel</li>
<li class="active"><a href="#">Home</a></li>
<li><a href="upload.php">Certificate Upload</a></li>
<li><a href="apply.php">Apply New</a></li>
<li><a href="status.php">Status</a></li>
</ul>

 
<ul class="nav nav-list">
<li class="nav-header">Control Panel</li>
<li class="active"><a href="#">Home</a></li>
<li><a href="applications.php">Applications</a></li>
<li><a href="users.php">Users</a></li>
<li><a href="#"></a></li>
</ul>
</ul>

</div>
<?php } 
else
{
?> 
<div class="span1 offset1">Not Loogged in

</div>

<?php
}
?>

