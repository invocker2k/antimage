<?php
	session_start();
	echo 'welcome ' . $_SESSION['ten_khach_hang'];
	echo '<br><a href="login.php?action=logout">Logout</a>';
?>