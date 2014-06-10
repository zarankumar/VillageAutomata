

<?php
session_start(); 
include'menu.php';
$i=1;
// time for doing database queris

include'config.php';
$sql="select * from registration";
$res=mysql_query($sql);
if (mysql_num_rows($res) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}


//#######################
if(isset($_GET['u']))
{
$s="select * from registration where username='$_GET[u]'";
$result=mysql_query($s);
while ($row = mysql_fetch_assoc($result)) { 
if($_GET['a']=='t')
$sql2="insert into login values('$row[username]','$row[pass]','user')";
else
$sql2="delete from login where username='$_GET[u]'";
//echo $sql2;
$res2=mysql_query($sql2);
}

}

?>
<div class="container-fluid"><!--contents -->
<div class="row-fluid">
<?php include'sidemenu.php'; ?>

<div class="span8"> 
<?php if(isset($_SESSION['user'])) { ?>
   
   <div class="span6">

<table width="100%" border="0" class="table">
  <tr class="success">
    <td>Sl no</td>
    <td>Name</td>
    <td>Email</td>
    <td>Address</td>
    <td>Phone </td>
    <td>Action</td>
    <td></td>
  </tr>
 <?php while ($row = mysql_fetch_assoc($res)) { ?>
 
  <tr>
    <td> <?php echo "$i"; ?></td>
    <td><?php echo $row["name"];?></td>
    
    <td><?php echo $row["email"];?></td>
    
    <td><?php echo $row["address"];?></td>
    <td><?php echo $row["phone"];?></td>
    
    <td>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?u=<?php echo $row["username"];?>&a=t"><span class="label label-success">Approve</span></a>
    </td>
    <td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?u=<?php echo $row["username"];?>&a=f" ><span class="label label-important">Reject</span></a></td>
   
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
   Success fully Approved/Rejected.<p>
   Please Note that onece user is approved they can login with username and password provided at the registration time.Rejected
   users can't login with their username and password.But their Details will keep here for future references.
    </div>
    <?php } ?>
</div><!--content ends here -->
<?php include'bottom.php'; ?>
 
