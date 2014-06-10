<?php ?>
<!DOCTYPE>
<html>

<head>
<title>Village Office Automation System Beta</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>



<body>
<h1 class="offset1">Village Automation Beta</h1>
<div class="row-fluid"> <div class="span12 offset9"><h6> Hello <?php if(isset($_SESSION['user'])){ echo $_SESSION['user'] ;} else {echo'Guest !';} ?> </h6> 

<?php if(!isset($_SESSION['user']))
 {
  echo"<a href='/village/login.php'>Login</a>";
  } else
   {
    echo"<a href='/village/logout.php'>Logout</a>";
	} ?>

| <a href="/village/signup.php">Sign Up</a></div></div>
<div class="row-fluid">
<div class="navbar offset1 span10"><!--menubar -->

<div class="navbar-inner">
<ul class="nav">
<li><a href="/village/home.php"> Home</a></li>
<li><a href="/village/about.php">About</a></li>
<li><a href="/village/contact.php">Contact</a></li>
</ul>
</div>
</div>
</div><!--end menubar here -->
