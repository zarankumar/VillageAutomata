
<?php
session_start(); 
include'menu.php';
$i=1;

// time for doing database queris

include'config.php';
/*
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
*/
?>
<div class="container-fluid"><!--contents -->
<div class="row-fluid">
<?php include'sidemenu.php'; ?>

<div class="span8"> 
<?php if(isset($_SESSION['user'])) { ?>
   
   <div class="span6">

<img src="http://localhost/village/upload/SSLC-<?php echo"$_GET[u]" ?>.jpg" class="img-polaroid" alt="SSLC CERTIFICATE" height="400" width="300"><p>
SSLC CERTIFICATES
</p>
<img src="http://localhost/village/upload/DRIVING LICENCE-<?php echo"$_GET[u]" ?>.jpg" class="img-polaroid" alt="Driving License" height="400" width="300"><p>
Driving License
</p>


</div><!--span4-->
   
  <img src="http://localhost/village/upload/PLUS TWO-<?php echo"$_GET[u]" ?>.jpg" class="img-polaroid" alt="Plus TWO" height="400" width="300"><p>
Plus Two
</p>
<img src="http://localhost/village/upload/RATION CARD-<?php echo"$_GET[u]" ?>.jpg" class="img-polaroid" alt="Ration Card" height="400" width="300"><p>
Ration Card
</p> 
   
   
    <?php } ?>
</div><!--row fluid ends-->
</div><!--content fluid-->

</div><!--content ends here -->
<?php include'bottom.php'; ?>