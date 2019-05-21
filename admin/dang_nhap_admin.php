<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập admin</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Đăng nhập</h2>
  </div>

  <form method="post">
  	<?php
    if (isset($_POST['login_user'])) {
     $con = mysqli_connect('localhost','root','','web_phong');
     $ten_admin = $_POST['ten_admin'];
     $mat_khau = $_POST['mat_khau'];
     $result = mysqli_query($con, "select * from admin where ten_admin= '$ten_admin' and mat_khau = '$mat_khau'");
     if(mysqli_num_rows($result)==1) {
      session_start();
      $row = mysqli_fetch_array($result);
      session_start();
      $_SESSION['ten_admin'] = $row['ten_admin'];
      $_SESSION['ma_admin'] = $row['ma_admin'];
      $_SESSION['cap_do'] = $row['cap_do'];
      header('location: menu_quan_li/quan_li.php');
    }
    else
      echo "<span style='color: red;'>Tên đăng nhập hoặc mật khẩu không đúng</span>";
  }
  ?>
  	<div class="input-group">
  		<label>Tên người dùng</label>
  		<input type="text" name="ten_admin" >
  	</div>
  	<div class="input-group">
  		<label>Mật khẩu</label>
  		<input type="password" name="mat_khau">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><h3 align="center">Đăng nhập</h3></button>
  	</div>
  	<p>
 
  	</p>
  </form>
</body>
</html>