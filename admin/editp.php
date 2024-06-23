<?php
include'../inc/conn.php';
session_start();
if($_SESSION['checkadmin']==0)
	header("location:index.php");
$id=(int)$_GET['id'];
$sql="select * from items where id='$id'";
$ret=mysqli_query($connection,$sql);
while($res=mysqli_fetch_assoc($ret)){
	$name=$res['name'];
    $price=$res['price'];
    $cat=$res['cat'];
    $descrip=$res['descrip'];
	$pic=$res['img'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>لوحة التحكم </title>
  <meta charset="utf-8"/>
<script src="../js/jquery.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js" type="text/javascript"></script>
  <link rel ="stylesheet" type="text/css" href="../css/bootstrap.css"/>
  <link rel ="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
   <link rel ="stylesheet" type="text/css" href="../css/ourstyle.css"/>
<style>
 .navbar {

        background-color:#444;
}		
.navbar-brand{
   color:#fff;
   }
       .navbar-expand-lg .navbar-nav .nav-link {
	    color:#fff;
		margin-left:20px;
   }
   .me-2{
   margin-left:20px;
   }
   .btn{
   color:#fff;
   margin-left:10px;
   }
   body {
background-color:#f0f0f0;
}
.col-lg-4 {
background-color:#ffffff;
width:400px;
height:auto	;
text-align:center;
margin-right:30px;
margin-top:50px;
float:right;
}
.footer{
width:100%;
height:260px;
background-color:#444;
margin-top:450px;
}
label {
color:#fff;
}
.form-text {
color:#fff;
}
.black{
color:#000000
}
</style>
<body dir="rtl">
<header>  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">شركة الاجهزة الدكية</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminindex.php">الرئيسية</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">تسجيل الخروج</a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
</header>
<div>
<div class="container">
<div class="row">
  <form action="" method="post" style="margin-right:20px; margin-top:350px;" enctype="multipart/form-data"> 
  <br>
  <div class="form-group">
  <label for="exampleInputEmail1" style="margin-bottom:10px;" class="black"> اسم المنتج</label>
  <input type ="text" class="form-control" name="mname" id ="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo $name; ?>">
  </div>
  <br>
  <div class="form-group">
  <label for ="exampleInputpassword1" style="margin-bottom:10px;" class="black">السعر</label>
  <input type="text" class="form-control" name="mprice" id="exampleInputpassword1"  aria-describedby="emailHelp" value="<?php echo $price; ?>">
  </div>
  <br>
  <div class="form-group">
  <label for ="exampleInputpassword1" style="margin-bottom:10px;" class="black">الفئة</label>
  <select name="cat">
  <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
  <option value="samsung">SAMSUNG</option>
  <option value="sony">SONY</option>
  <option value="hawaui">HAWAUI</option>
  </select>
  </div>
  <br>
  <div class="form-group">
  <label for ="exampleInputpassword1" style="margin-bottom:10px;" class="black">الوصف</label>
  <textarea type="text" class="form-control" name="mdescrip" id="exampleInputpassword1"  aria-describedby="emailHelp"> <?php echo $descrip; ?></textarea>
  </div>
  <br>
  <div class="form-group">
  <label for ="exampleInputpassword1" style="margin-bottom:10px;" class="black"> الصورة الحالية :</label>
  <center><img src="../img/<?php echo $pic; ?> " style="width:180px; height:auto;"/></center>
  </div>
  <br>
  <div class="form-group">
  <label for ="exampleInputpassword1" style="margin-bottom:10px;" class="black">الصورة</label>
  <input type="file" class="form-control" name="fileToUpload" id="exampleInputpassword1">
  </div>
  <br>
  <button type="submit" value="تعديل" class ="btn btn-primary" name="edit" style="margin-top:-10px;">تعديل</button> 
  <?php
  if(isset($_POST['edit'])){
	   $name=$_POST['mname'];
		  $price=$_POST['mprice'];
		  $cat=$_POST['cat'];
		  $descrip=$_POST['mdescrip'];
		  $fileToUpload=$_FILES['fileToUpload']['name'];
	  $uploaddir='img/';
	  $uploadfile=$uploaddir.basename($_FILES['fileToUpload']['name']);
	  if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$uploadfile)){
		 
		  if($fileToUpload=='')
		  $sql="update items set name='$name',price='$price',cat='$cat',descrip='$descrip',img='$pic' where id='$id'";
	  else
		  $sql="update items set name='$name',price='$price',cat='$cat',descrip='$descrip',img='$fileToUpload' where id='$id'";
		  $ret=mysqli_query($connection,$sql);
		  if($ret)
			  echo'<p> تمت عملية التعديل بنجاح </p>';
		  echo'<script> window.location.href="editp.php?id='.$id.'"</script>';
	  }
	  else{
		  if($fileToUpload=='')
		  $sql="update items set name='$name',price='$price',cat='$cat',descrip='$descrip',img='$pic' where id='$id'";
	  else
		  $sql="update items set name='$name',price='$price',cat='$cat',descrip='$descrip',img='$fileToUpload' where id='$id'";
		  $ret=mysqli_query($connection,$sql);
		  if($ret)
			  echo'<p> تمت عملية التعديل بنجاح </p>';
	  }
  }

  ?>
	  
 </form> 
</div>
</div>

</body>
</html>  