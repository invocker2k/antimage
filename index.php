<?php require('header.php') ?>
		<!-- PHẦN MENU TÌM KIẾM -->
		<nav class="main">


			<div id="slider" class="shadow">
				<div id="mask">
					<ul >
						<li id="first" class="firstanimation">
							<a href="#">
								<img src="public/images/ss.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>

						<li id="second" class="secondanimation">
							<a href="#">
								<img src="public/images/bg_search.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>

						<li id="third" class="thirdanimation">
							<a href="#">
								<img src="public/images/nha.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>

						<li id="fourth" class="fourthanimation">
							<a href="#">
								<img src="public/images/3.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>

						<li id="fifth" class="fifthanimation">
							<a href="#">
								<img src="public/images/banner_sli.jpg" alt="Cougar" style="width: 100%;height: 100%" />
							</a>
						</li>
					</ul>
				</div>
				<div class="progress-bar"></div>
			</div>
					
			
		</nav>
		<!-- PHẦM MAIN CHÍNH XỬ LÍ PHP -->
		<div id="main_body">
			<div class="main-content">
				<div class="main_content_1">
					<div class="hien_thi" style="font-size: 25px;">
						Địa điểm nổi bật
					</div>
					<div class="hien_thi_anh">
						<a href="quan/dong_da.php" class="a_anh">
							<img src="public/images/dai_hoc_y_ha_noi_co_thi_sinh_dat_3075_diem_1.jpg" style="width: 100%; height: 200px;border: 1px solid #eee">
							<h1 style="position: absolute;top: 145px;left: 35px;text-transform: uppercase;color: #FFFFFF; font-size: 30px;font-family: "Comic Sans MS", cursive, sans-serif;" class="imggg">QUẬN ĐỐNG ĐA</h1>
						</a>
					</div>
					<div class="hien_thi_anh">
						<a href="quan/hai_ba_trung.php" class="a_anh">
							<img src="public/images/bk.jpg" style="width: 100%; height: 200px;border: 1px solid #eee">
							<h1 style="position: absolute;top: 145px;left: 10px;text-transform: uppercase;color: #FFFFFF; font-size: 28px;font-family: "Comic Sans MS", cursive, sans-serif;">Quận hai bà trưng</h1>
						</a>
					</div>
					<div class="hien_thi_anh">
						<a href="quan/cau_giay.php" class="a_anh">
							<img src="public/images/images2224353_001.jpg" style="width: 100%; height: 200px;border: 1px solid #eee">
							<h1 style="position: absolute;top: 145px;left: 30px;text-transform: uppercase;color: #FFFFFF; font-size: 30px;font-family: "Comic Sans MS", cursive, sans-serif;">Quận Cầu giấy</h1>
						</a>
					</div>
					<div class="hien_thi_anh">
						<a href="quan/gia_lam.php" class="a_anh">
							<img src="public/images/hoc-vien-nong-nghiep-viet-nam(2).jpg" style="width: 100%; height: 200px; border: 1px solid #eee">
							<h1 style="position: absolute;top: 145px;left: 110px;text-transform: uppercase;color: #FFFFFF; font-size: 30px;font-family: "Comic Sans MS", cursive, sans-serif;">GIA LÂM</h1>
						</a>
					</div>
					<?php
					$connect = mysqli_connect('localhost','root','','web_phong');
					mysqli_set_charset($connect,'utf8');
					//tìm kiếm
					$tim_kiem = "";
					if(isset($_GET['tim_kiem'])){
						$tim_kiem = $_GET['tim_kiem'];
					}

					//phân trang
					$page = 1;
					if(isset($_GET['page'])){
						$page = $_GET['page'];
					}
					//giới hạn sản phẩm trên 1 trang
					$limit = 20;
					$offset = ($page-1)*$limit;

					//lấy tổng số sản phẩm về
					$query_count  = "select count(*) from phong_tro
					join quan
					on phong_tro.ma_quan = quan.ma_quan
					where tinh_trang = 1 and ten_quan like '%$tim_kiem%'";
					$result_count = mysqli_query($connect,$query_count);
					$row_count    = mysqli_fetch_array($result_count);
					$count        = $row_count['count(*)'];

					//đếm trang
					$count_page = ceil($count/$limit);

					$query_select  = "select * from phong_tro
					join quan
					on phong_tro.ma_quan = quan.ma_quan
					 where tinh_trang = 1 and ten_quan like '%$tim_kiem%'
					 limit $limit offset $offset ";
					$result_select = mysqli_query($connect,$query_select);

					mysqli_close($connect);
					?>
					<!-- MAIN CHÍNH -->
					<div class="lua_chon">
						<div class="hien_thi" style="font-size: 25px; color: red">
							Lựa chọn HOT
						</div>
						<?php echo "<h2 align='center' style='color: #545454;'>Kết quả: $count tin bài</h2>"?>
						<div class="database">
							<?php
								while($row = mysqli_fetch_array($result_select)){
							?>
							<div class="lay_du_lieu">
								<div class="img_data">
									<img src="dang_phong/anh/<?php echo $row['anh_1'] ?>" style="width: 100%;height: 100%">
								</div>
								<div class="hot">
									<div class="hot1">
										<p style="text-align: center;margin-top: 18px;">HOT</p>
								</div>
							</div>
							<div class="chu_data">
								<span class="published">
									<?php 
									$ngay_dang = $row['ngay_dang'];
									$thoi_gian_da_sua   = date("d-m-y", strtotime($ngay_dang));
									echo $thoi_gian_da_sua; 
									?>
								</span>
								<span class="local">
									<a  style="color: #a51b0d;text-decoration: none;"><?php echo($row['ten_quan']); ?></a>
								</span>
								<h3 class="tile">
									<a href="chi_tiet_phong.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" style="text-decoration: none;color: #0094FF"><?php echo($row['tieu_de']) ?></a>
								</h3>
								<dl class="dttt">
									<dt>Diện tích:</dt>
									<dd><?php echo($row['dien_tich'])?> m
										<sup>2</sup>
									</dd>
								</dl>
								<dl class="dtttt">
									<dt>Tình trạng:</dt>
									<dd style="color: #45CE30;font-size: 14px;">
										<?php
										if ($row['tinh_trang'] == 1) {
											echo "Còn phòng";
										}
										else if ($row['tinh_trang'] == 3) {
											echo "Phòng đã đầy";
										}
										?>
									</dd>
								</dl>
								<div class="price">
									<div>
										<span class="san">-------<?php echo number_format(($row['gia'])) ?>--------</span><i class="i">đồng/tháng</i>
									</div>
								</div>
								<dl class="address">
									<dt>Địa chỉ: </dt>
									<dd> <?php echo($row['dia_chi_phong']) ?></dd>
								</dl>
								<h3 class="tile">
									<a href="luu_tin.php?ma_phong_tro=<?php echo($row['ma_phong_tro'])?>" style="text-decoration: none;color: #fff; margin-left: 105px;padding: 8px;background: #F1540D">Lưu tin</a>
								</h3>
							</div>
						</div>
						<?php
					}
					?>
					</div>
				</div>
			</div>
		</div>
		<div align="center" style="float: left; position: absolute;top: 3150px;left: 650px;">
						<?php for($i=1; $i<=$count_page; $i++){ ?>
							<a href="?page=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>"><?php echo $i ?></a>
						<?php } ?>
					</div>
		<!-- PHẦN FOOTER -->
		
	<?php require('footer.php') ?>