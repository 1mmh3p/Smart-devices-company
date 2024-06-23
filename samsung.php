<?php
include'inc/conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title> الموقع الشخصي </title>
  <meta charset="utf-8"/>
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link rel ="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
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
<div>
<div class="container">
<div class="row">
<?php
$sql="select * from items where cat='samsung'";
$ret=mysqli_query($connection,$sql);
while($res=mysqli_fetch_assoc($ret)){
	echo'<div class="row">
	<div class="col-lg-4 col-md-12 col-sm-12">
	<br>
	<p><b>'.$res['name'].'<b></p>
<center><img src ="img/'.$res['img'].'" alt="HDD" style="margin-top:8%;width:90%;height:auto;"/></center>
<hr>';
?>
<a type="button" href="showmob.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">اعرض مواصفات الجهاز</a>
 <?php
echo'</div>
</div>';
}
?>
</div>
</div>
<footer class="footer">
<div class="col-lg-6 col-ms-6" >
<br>  
  <form style="margin-right:20px;"> 
  <div class="form-group">
  <label for="exampleInputEmail1" style="margin-bottom:10px;"> اسم المستخدم</label>
  <input type ="text" class="form-control" id ="exampleInputEmail1" name="user"  aria-describedby="emailHelp" placeholder="ادخل اسم المستخدم">
  <small id="emailHelp" class="form-text text-muted">لا تشارك المعلومات مع احد</small>
  </div>
  <div class="form-group">
  <label for ="exampleInputpassword1" style="margin-bottom:10px;">كلمة المرور</label>
  <input type="password" class="form-control" name="pass" id="exampleInputpassword1  aria-describedby="emailHelp" placeholder="ادخل كلمة المرور">
  </div>
  <br>
<input type="submit" name="signin" value="تسجيل الدخول" class ="btn btn-primary" style="margin-top:-10px;"/>
 <?php
 if(isset($_POST['signin'])){
	 $user=$_POST['user'];
	 $pass=$_POST['pass'];
	 $sql="select * from users where username='$user' and password='$pass'";
	 $ret=mysqli_query($connection,$sql);
	 while($res=mysqli_fetch_assoc($ret)){
		 session_start();
		 $_SESSION['user']=$user;
		 echo'<script> window.location.href="welcome.php"</script>';
	 }
		 
	 
 echo'<p><center>البيانات غير صحيحة</center></p>';     
 
 }
	 
?>
	 
 </form> 
</div>
<div class="col-lg-6 col-ms-6 >
</div>
</body>
</html>  