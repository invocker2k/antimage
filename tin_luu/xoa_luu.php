<?php
    $ma_phong_tro=$_GET['ma_phong_tro'];
    $connect=new mysqli("localhost","root","","web_phong");
    $sql="DELETE from quan_tam where ma_phong_tro =$ma_phong_tro";
    $result=mysqli_query($connect,$sql);
    $error = mysqli_error($connect);
    if (empty($error)) 
    {
        header("location:tin_da_luu.php?successs");
    }
    else{
        header("location:tin_da_luu.php?errorr");
    }
        
?>