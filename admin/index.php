<?php
include'../inc/conn.php';
session_start();
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
            
      </ul>
      
    </div>
  </div>
</nav>
</header>
<div>
<div class="container">
<br><br><br>
<div class="col-lg-6 col-ms-6" >
<br>  
  <form style="margin-right:20px;"> 
  <div class="form-group">
  <label for="exampleInputEmail1" style="margin-bottom:10px; color:#343a40;"> اسم المستخدم</label>
  <input type ="text" class="form-control" id ="exampleInputEmail1" name="user"  aria-describedby="emailHelp" placeholder="ادخل اسم المستخدم">
  <small id="emailHelp" class="form-text text-muted">لا تشارك المعلومات مع احد</small>
  </div>
  <br>
  <div class="form-group">
  <label for ="exampleInputpassword1" style="margin-bottom:10px; color:#343a40;">كلمة المرور</label>
  <input type="password" class="form-control" name="pass" id="exampleInputpassword1"  aria-describedby="emailHelp" placeholder="ادخل كلمة المرور">
  </div>
  <br>
<input type="submit" name="signin" value="تسجيل الدخول" class ="btn btn-primary" style="margin-top:-10px;"/>
 <?php
 if(isset($_POST['signin'])){
	 $user=$_POST['user'];
	 $pass=$_POST['pass'];
	 $sql="select * from admins where username='$user' and password='$pass'";
	 $ret=mysqli_query($connection,$sql);
	 while($res=mysqli_fetch_assoc($ret)){
		 $_SESSION['checkadmin']=1;
		 echo'<script> window.location.href="adminindex.php"</script>';
	 }
	 
 echo'<p><center>البيانات غير صحيحة</center></p>';     
 
 }
	 
?>
	 
 </form>
</div>
</div>

</body>
</html>  