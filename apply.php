<?php
session_start(); 
$saved=false;
include'menu.php';
//data base tricks
include'config.php';
if(isset($_POST['proof']))
{
$d=date("d-m-y");

$sql="insert into request values('$_SESSION[user]','$_POST[cert]','$d','0000-00-00','pending')";
echo"$sql";
$res=mysql_query($sql);
if($res)
$saved=true;
}

?>



<div class="container-fluid"><!--contents -->
<div class="row-fluid">
<?php include'sidemenu.php'; ?>

<div class="span8"> 
<?php if(isset($_SESSION['user'])) { ?>
   
   <div class="span6 offset3">
<form id="form1" name="form1" method="post" action="">
  <p>Certificate 
    <label>
    <select name="cert" id="cert">
      <option value="INCOME CERTIFICATE">INCOME CERTIFICATE</option>
      <option value="RELIGION">RELIGION</option>
      <option value="NATIVITY">NATIVITY </option>
        </select>
    </label>
  </p>
  <p>
    <label>
    <input type="checkbox" name="proof" id="proof" />
    </label>
  Confirm by Tick here</p>
  <p>
    <label>
    <input type="submit" name="Apply" id="Apply" value="Apply" class="btn btn-info" />
    </label>
  </p>
  <p>
  <?php 
  if($saved)
  {
  ?>
  <div class="span4 span5">
<div class="alert alert-success">
  
  <h4>Successfully Applied !</h4>
  
</div>
</div>
<?php } ?>
  </p>
</form>


</div><!--span4-->
   
   
   
   
    <?php } ?>
</div><!--row fluid ends-->
</div><!--content fluid-->

</div><!--content ends here -->
<?php include'bottom.php'; ?>
