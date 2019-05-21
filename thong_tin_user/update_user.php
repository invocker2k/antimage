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
							//lấy thông tin phòng
							if(isset($_SESSION["ma_khach_hang"])){
								$ma_khach_hang= $_SESSION["ma_khach_hang"];
							}
							$query       = "select * from khach_hang 
							where ma_khach_hang = $ma_khach_hang";
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
										<td><?php echo($row['ngay_tham_gia']) ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="user_right">
					<h3>Thông tin cơ bản</h3>
					<form method="post" action="update_process.php">
						<input type="hidden" name="ma_khach_hang" value ="<?php echo ($row['ma_khach_hang']) ?>">
						<ul>
							<li>
								<div class="div_boder">Tên đăng nhập</div>
								<div style="width: 500px">
									<input type="text" placeholder="Họ tên" class="form_hoai" name="ten_khach_hang" value="<?php echo($row['ten_khach_hang']) ?>" disabled="true">
								</div>
							</li>
							<li>
								<div class="div_boder">Email</div>
								<div style="width: 500px"> 
									<input type="text" placeholder="Họ tên" class="form_hoai" name="email" value="<?php echo($row['email']) ?>" disabled="true">
								</div>
							</li>
							<li>
								<div class="div_boder">Địa chỉ</div>
								<div style="width: 500px">
									<input type="text" placeholder="Địa chỉ" class="form_hoai" name="dia_chi" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);" value="<?php echo($row['dia_chi']) ?>" required>
								</div>
							</li>
							<li>
								<div class="div_boder">Ngày sinh</div>
								<div style="width: 500px">
									<input type="date" placeholder="Địa chỉ" class="form_hoai" name="ngay_sinh" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);" value="<?php echo($row['ngay_sinh']) ?>" required>
								</div>
							</li>
							<li>
								<div class="div_boder">Số điện thoại</div>
								<div style="width: 500px">
									<input type="number" placeholder="Số điện thoại" class="form_hoai" name="sdt" style="background-color: #fff;border: 1px solid rgba(236, 76, 54, 0.5);" value="<?php echo($row['sdt']) ?>" required>
								</div>
							</li>
						</ul>
						<div class="chinh_sua">
							<div class="chinh_sua_11">
								<button type="submit" class="luu_thay_doi">Lưu thay đổi</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
<?php require("footer.php") ?>