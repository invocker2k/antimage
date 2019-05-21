<?php 
function upload_anh($file,$ten_anh)
{
	$imageFileType = strtolower(pathinfo($file["name"],PATHINFO_EXTENSION));

	//lưu tên file ảnh là thời gian hiện tại kèm đuôi định dạng ảnh
	$file_name     = time(). "_$ten_anh.$imageFileType";

	//thư mục lưu ảnh
	$target_dir    = "anh/";
	$target_file   = $target_dir . $file_name;

	$uploadOk = 1;
	if(isset($_POST["submit"])) {
	    $check = getimagesize($file["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    $uploadOk = 0;
	}
	// Check file size
	if ($file["size"] > 500000) {
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 1) {
	    if (move_uploaded_file($file["tmp_name"], $target_file)) {
	    	$GLOBALS['upload_anh']++;
	    } 
	}
	return $file_name;
}