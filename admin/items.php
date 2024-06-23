<?php
include'../inc/conn.php';
session_start();
if($_SESSION['checkadmin']==0)
	header("location:index.php");
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
height:270px;
background-color:#444;
margin-top:710px;
}
.row {
    float:right;
	margin-right:-120px;
	width:1523px;
}
label {
color:#fff;
}
.form-text {
color:#fff;
}
.black{
color:#000000;
}
.table {
	height:200px;
	margin-top:-700px;
	width:1200px;
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
 <table class="table table-striped" style="margin-right:150;">
  <tr>
  <td> الرقم </td>
  <td> اسم المنتج </td>
  <td> السعر </td>
  <td> الوصف </td>
  <td> # </td>
  <td> # </td>
  </tr>
  <?php
  $sql=" select * from items";
  $ret=mysqli_query($connection,$sql);
  while ($res=mysqli_fetch_assoc($ret)){
	  echo'<tr>
	  <td>'.$res['id'].'</td>
	  <td>'.$res['name'].'</td>
	  <td>'.$res['price'].'</td>
	  <td>'.$res['descrip'].'</td>';
	  ?>
	  <td><a type="button" href="deletep.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">حدف</a></td>
	  <td><a type="button" href="editp.php?id=<?php echo $res['id'] ?>" class="btn btn-success">تعديل</a></td>
	  <?php
	  echo '</tr>';
  }
	  ?>
  
</div>
</div>

</body>
</html>  