<?php
include'inc/conn.php';
session_start();
if($_SESSION['user']=='')
	header("location:check.php");
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
<script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link rel ="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
   <link rel ="stylesheet" type="text/css" href="css/ourstyle.css"/>
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
          <a class="nav-link active" aria-current="page" href="index.php">الرئيسية</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">تسجيل الخروج</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            انواع الاجهزة
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="samsung.php">سامسونغ</a></li>
            <li><a class="dropdown-item" href="hawaui.php">هواوي</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">اخري</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" style="margin-top:10px;">
        <input class="form-control me-2" type="search" placeholder="ادخل اسم الهاتف" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">بحث</button>
      </form>
    </div>
  </div>
</nav>
</header>
<div class="container">
<br><br>
<div class="row">
  <div class="col-lg-12 col-md-12">
  <center><h1 style="background-color:#212529; color:#ffffff;"><?php echo $name; ?></h1>
  <img src="img/<?php echo $pic; ?>"/>
  <div style="background-color:#212529; color:#ffffff; font-size:24px;">
  <p> وصف المنتج :  <?php echo $descrip; ?></p>
  <p> الفئة التي ينتمي لها :  <?php echo $cat; ?></p>
  <p> السعر :  <?php echo $price; ?></p></center>
  </div>
</div>
</div>.

</body>
</html>  	