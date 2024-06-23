<?php
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
height:260px;
background-color:#444;
margin-top:450px;
}
label {
color:#fff;
}
.form-text {
color:#fff;
)
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

      </ul>
    </div>
  </div>
</nav>
</header>
<div>
<div class="container">
<div class="row">


<div class="row">
	<div class="col-lg-4 col-md-12 col-sm-12">
	<br>
	<p><b>اضافة منتج جديد</b></p>
<center><img src ="../img/sample.jpg" alt="HDD" style="margin-top:8%;width:90%;height:auto;"/></center>
<hr>
<center><a href="addmob.php" type="button" class="btn btn-primary" style="margin-bottom:15px;">انتقل </a></center>
</div>
</div>
<div class="row">
	<div class="col-lg-4 col-md-12 col-sm-12">
	<br>
	<p><b>حدف منتج</b></p>
<center><img src ="../img/sample.jpg" alt="HDD" style="margin-top:8%;width:90%;height:auto;"/></center>
<hr>
<center><a href="items.php" type="button" class="btn btn-primary" style="margin-bottom:15px;">انتقل </a></center>
</div>
</div>
<div class="row">
	<div class="col-lg-4 col-md-12 col-sm-12">
	<br>
	<p><b>تعديل منتج</b></p>
<center><img src ="../img/sample.jpg" alt="HDD" style="margin-top:8%;width:90%;height:auto;"/></center>
<hr>
<center><a href="items.php" type="button" class="btn btn-primary" style="margin-bottom:15px;">انتقل </a></center>
</div>
</div>




</div>
</div>

</div>
</body>
</html>  