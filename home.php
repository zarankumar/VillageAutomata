<?php
session_start(); 
include'menu.php';?>

<div class="container-fluid"><!--contents -->
<div class="row-fluid">
<?php include'sidemenu.php'; ?>
<div class="span8"> 
<?php if(isset($_SESSION['user'])) { ?>
<h2> Welcome To Village Automata</h2>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
laborum.
<?php } else {?>
  
    <?php header("location:/village/index.php"); } ?>
</div>
</div>


</div><!--content ends here -->
<?php include'bottom.php'; ?>