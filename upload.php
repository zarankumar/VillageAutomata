<?php
session_start(); 

include'menu.php';?>
<div class="container-fluid"><!--contents -->
<div class="row-fluid">
<?php include'sidemenu.php'; ?>

<div class="span8"> 
<?php if(isset($_SESSION['user'])) { ?>
   
   <div class="span6 offset3">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <label for="certi"> Certificate </label>
  <label>
  <select name="certi" size="1" id="certi">
    <option value="SSLC">SSLC</option>
    <option value="PLUS TWO">PLUS TWO</option>
    <option value="DRIVING LICENCE">DRIVING LICENCE</option>
    <option value="RATION CARD">RATION CARD</option>
      </select>
  </label>
  <p>
    <label>
    <input type="file" name="file_upload" id="file" />
    </label>
  </p>
  <p>
    <label>
    <input type="checkbox" name="terms" id="terms" />
    </label>
  Confirm by click here</p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-info" />
    </label>
  </p>
</form>

<?php //echo $_SESSION['myusername'];?>
</div><!--span4-->
   
   
   
   
    <?php } ?>
</div><!--row fluid ends-->
</div><!--content fluid-->
<!--uploadinngggg-->
<?php
if(isset($_POST['upload']))
{
// Check for errors
if($_FILES['file_upload']['error'] > 0){
    die('<div class="alert alert-error span4 offset5">An error ocurred when uploading.</div>');
}

if(!getimagesize($_FILES['file_upload']['tmp_name'])){
    die('<div class="alert alert-info span4 offset5"><strong>Please ensure you are uploading an image.</strong></div>');
}

// Check filetype
if($_FILES['file_upload']['type'] != 'image/jpeg'){
    die('<div class="alert alert-error span4 offset5">Unsupported filetype uploaded.</div>');
}

// Check filesize
if($_FILES['file_upload']['size'] > 500000){
    die('<div class="alert alert-error span4 offset5">File uploaded exceeds maximum upload size.</div>');
}
$filename=$_POST['certi'].'-'.$_SESSION['user'].'.jpg';

// Check if the file exists
if(file_exists('upload/' .$filename )){ //$_FILES['file_upload']['name']
    die('<div class="alert alert-error span4 offset5">File with that name already exists.<div>');
}

// Upload file
if(!move_uploaded_file($_FILES['file_upload']['tmp_name'], 'upload/' .$filename)){//$_FILES['file_upload']['name']
    die('<div class="alert alert-error span4 offset5">Error uploading file - check destination is writeable.</div>');
}
// database entry 

include'config.php';
$d=date("Y-m-d");
if(isset($_POST['terms']))
{
date_default_timezone_set('UTC');
$sql="insert into upload values('$_SESSION[user]','$_POST[certi]','http://localhost/village/upload/$filename','$d')";
$res=mysql_query($sql);
if($res)
{
echo"inserted ";
}

}


die('<div class="alert alert-success span4 offset5">File uploaded successfully.</div>');//file uploads ends here
}
?>

<!--uploading ends-->

</div><!--content ends here -->
<?php include'bottom.php'; ?>













