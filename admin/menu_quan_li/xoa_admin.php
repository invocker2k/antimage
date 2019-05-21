<?php
    $ma_admin=$_GET['ma_admin'];
    $connect=new mysqli("localhost","root","","web_phong");
    $sql="DELETE from admin where ma_admin =$ma_admin";
    $result=mysqli_query($connect,$sql);
    $error = mysqli_error($connect);
    if (empty($error)) 
    {
        header("location:xem_admin.php?successs");
    }
    else{
        header("location:xem_admin.php?errorr");
    }
        
?>