<?php require ('header.php'); ?>
		<div class="user_mani">
			<div class="user_mani_1">
				<div class="logo_user">
					<div class="trang_chu">
						<div class="trang_chu_1">
							<span style="font-size: 18px;">
								<i style="font-size: 13px;color: #14F209" class="fa fa-home" aria-hidden="true"></i>
								<a style="text-decoration: none;color: #14F209; font-size: 16px;" href="../../index.php">Trang chủ</a>
								<i style="margin-top: 10px; font-size: 11px; color: #BCABAB" class="fa fa-angle-double-right" aria-hidden="true"></i>
								<a style="text-decoration: none;color: #BBA3A3;font-size: 16px" href="#">Thông tin cá nhân</a>
							</span>
						</div>
						<div class="trang_chu_2">
							<div class="phan_trang">
								
								<h1 style="font-size: 28px;     font-weight: 700;">
									Thông tin cá nhân
								</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="user_letf">
					<div class="letf_anh">
						<div class="letf_anh_1">
							<div class="anh_chinh">
								<img src="../public/images/default-user.png" width="100%;">
							</div>
						</div>
						<div class="letf_chu">
							<?php
							$connect = mysqli_connect('localhost','root','','web_phong');
							mysqli_set_charset($connect,'utf8');
							if(isset($_SESSION["ma_khach_hang"])){
								$ma_khach_hang = $_SESSION["ma_khach_hang"];
							}
							$query = ("select * from khach_hang where ma_khach_hang = '$ma_khach_hang'");
							$result      = mysqli_query($connect,$query);
							$row         = mysqli_fetch_array($result);
							?>
							<h1 class="h1_name"><?php echo($row['ten_khach_hang']) ?></h1>
							<div class="div_chu">
								<table style="width: 100%;">
									<tr style="background-color: rgba(0,0,0,.05);">
										<td>Mã thành viên:</td>
										<td><?php echo($row['ma_khach_hang']) ?></td>
									</tr>
									<tr>
										<td>Điện thoại:</td>
										<td style="    color: #0074e4;"><?php echo($row['sdt']) ?></td>
									</tr>
									<tr style="background-color: rgba(0,0,0,.05);">
										<td>Ngày tham gia:</td>
										<td><!-- <?php echo($row['ngay_tham_gia']) ?> -->
											 <?php 
												$ngay_tham_gia = $row['ngay_tham_gia'];
												$thoi_gian_da_sua   = date("d-m-y", strtotime($ngay_tham_gia));
												echo $thoi_gian_da_sua; 
												?>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="user_right">
					<?php
					if(isset($_GET['success'])){
						echo "<h3 style='color: green'>Cập nhật thành công</h3>";
								// header("location:gg.php");
					}
					else if(isset($_GET['error'])){
						echo "<h3 style='color: red'>Cập nhật thất bại</h3>";
					}
					?>
					
					<ul>
						<li>
							<div class="div_boder">Tên đăng nhập</div>
							<div style="width: 500px">
								<span class="span_name"><?php echo($row['ten_khach_hang']) ?></span>
							</div>
						</li>
						<li>
							<div class="div_boder">Email</div>
							<div style="width: 500px"> 
								<span class="span_name"><?php echo($row['email']) ?></span>
							</div>
						</li>
						<li>
							<div class="div_boder">Địa chỉ</div>
							<div style="width: 500px">
								<span class="span_name"><?php echo($row['dia_chi']) ?></span>
							</div>
						</li>
						<li>
							<div class="div_boder">Ngày sinh</div>
							<div style="width: 500px">
								<span class="span_name"><!-- <?php echo($row['ngay_sinh']) ?>  -->
									<?php 
									$ngay_sinh = $row['ngay_sinh'];
									$thoi_gian_da_sua   = date("d-m-y", strtotime($ngay_sinh));
									echo $thoi_gian_da_sua; 
									?>
							</span>
							</div>
						</li>
					</ul>
					<div class="chinh_sua">
						<div class="chinh_sua_1">
							<a href="update_user.php" class="a_chinh_sua">Chỉnh sửa</a>
						</div>
						<div class="chinh_sua_1" style="float: left;">
							<a href="doi_mk.php" class="a_chinh_sua_1">Đổi mật khẩu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php require("footer.php") ?>