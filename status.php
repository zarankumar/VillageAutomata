
<?php
session_start(); 
include'menu.php';
$i=1;
// time for doing database queris

include'config.php';
$sql="select * from request where username='$_SESSION[user]'";

$res=mysql_query($sql);

if (mysql_num_rows($res) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
?>
<div class="container-fluid"><!--contents -->
<div class="row-fluid">
<?php include'sidemenu.php'; ?>

<div class="span8"> 
<?php if(isset($_SESSION['user'])) { ?>
   
   <div class="span6">
<table width="100%" border="0" class="table">
  <tr class="info">
    <td>Sl no</td>

    <td>Certificate </td>
    <td>Apply date</td>
    <td>Approved date</td>
    <td>Status</td>
    <td>Download</td>
  </tr>
  
  <?php while ($row = mysql_fetch_assoc($res)) { ?>
  <tr>
    <td> <?php echo "$i"; ?></td>
   
    <td><?php echo $row["certificate"];?></td>
    <td><?php echo $row["applydate"];?></td>
    <td><?php echo $row["reviewdate"];?></td>
    <td><?php echo $row["status"];?></td>
    <td> <?php if($row["status"]=="approved")
	{
	?>
	<a  href="#"><span class="label label-success">Download</span></a>
    
	<?php }
	elseif($row["status"]=="rejected")
	{
	?>
    <span class="label label-important">Download</span>
    <?php } 
	else { ?>
	<span class="label">Download</span></td>
    <?php } //end if here ?>
  </tr>
 <?php 
 $i=$i+1;
  } ?>
</table>


</div><!--span4-->
   
   
   
   
    <?php } ?>
</div><!--row fluid ends-->
</div><!--content fluid-->

</div><!--content ends here -->
<?php include'bottom.php'; ?>