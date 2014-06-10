
<?php
session_start(); 
include'menu.php';
$i=1;

// time for doing database queris

include'config.php';
$sql="select * from request";
$res=mysql_query($sql);
if (mysql_num_rows($res) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
// database manipulations...
if(isset($_GET['u']))
{
if($_GET['s']=="s")
$status='approved';
else
$status='rejected';
$d=date("d-m-y");

$sql="update request set status='$status',reviewdate='$d' where username='$_GET[u]' and certificate='$_GET[cer]' and applydate='$_GET[ad]' ";
//echo"$sql";
mysql_query($sql);



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
    <td>Name</td>
    <td>Certificate </td>
    <td>Apply date</td>
    <td>Reviewed Date</td>
     <td>Status</td>
     <td>Action</td><td></td>
     <td>View Certificates</td>
  </tr>
  <?php while ($row = mysql_fetch_assoc($res)) { ?>
 
  <tr>
    <td> <?php echo "$i"; ?></td>
    <td><?php echo $row["username"];?></td>
    
    <td><?php echo $row["certificate"];?></td>
    
    <td><?php echo $row["applydate"];?></td>
    <td><?php echo $row["reviewdate"];?></td>
    <td><b><?php echo $row["status"];?></b></td>
    <td>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?u=<?php echo $row["username"];?>&ad=<?php echo $row["applydate"];?>&cer=<?php echo $row["certificate"];?>&s=s"><span class="label label-success">Approve</span></a>
    </td>
    <td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?u=<?php echo $row["username"];?>&ad=<?php echo $row["applydate"];?>&cer=<?php echo $row["certificate"];?>&s=r" ><span class="label label-important">Reject</span></a></td>
    <td><a href="http://localhost/village/view.php?u=<?php echo $row["username"];?>" ><span class="label label-info">View Certificates</span></a></td>
  </tr>
  
 <?php 
 $i=$i+1;
  } ?>
 
</table>


</div><!--span4-->
   
   
   
   
    <?php } ?>
</div><!--row fluid ends-->
</div><!--content fluid-->
<?php if(isset($_GET['u'])){ ?>
<div class=" span6 offset5 alert alert-success">
   Success fully Approved/Rejected.
    </div>
    <?php } ?>
</div><!--content ends here -->
<?php include'bottom.php'; ?>