<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<style>
		.new{
			border-bottom: 1px solid white;
			margin: 80px 10px 15px 10px;
			padding-bottom: 5px;
		}
	 	.page_title {
		    font-size: 28px;
		    font-weight: 700;
		    margin-top: 0;
		}


	</style>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_haeder.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_nav.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_main.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/style_footer.css">

	 <!-- <script type="text/javascript" src="https://itexpress.vn/API/files/it.snow.js"></script>  -->
</head>
<body>
	<div class="page_wrapper">
		<!-- HEADER -->
		<header class>
			<div class="container-content">
				<div class="wrapper">
					<div class="logo">
						<a href="../../index.php">
							<img src="https://tromoi.com/logo_text_blue.png">
						</a>
					</div>
					<div class="box-search">
						<form class="top-search" id="top-search">
							<?php
							$tim_kiem = "";
							if(isset($_GET['tim_kiem'])){
								$tim_kiem = $_GET['tim_kiem'];
							}
							?>
							<label class="search-form_label">
								<input type="text"  name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Tìm kiếm nhanh" class="search-form_input">
								<!-- <a class="search-btn" href="">
									<i class="fas fa-search"></i>
								</a> -->
								<button class="search-btn" style="float: left;position: absolute;background: #fff;border: 1px">
									<i  style="line-height: 32px;width: 22px; background: #fff" class="fa fa-search" aria-hidden="true"></i>
								</button>
							</label>
						</form>
					</div>
					<div class="box-user">
						<ul class="nav_top">
							<li class="li_add-new">
								<a href="dang_nhap_dang_ki/dang_ki/dang_ki.php" class="btn red add-new t frm-login">Đăng tin</a>
							</li>
							<li class="li_news">
								<a href="../../tin_tuc/tin_tuc.php">Tin tức</a>
							</li>
							<li class="li_guide">
								<a href="../../tin_tuc/huong_dan.php">Hướng dẫn</a>
							</li>
							<li class="li_register">
								<a href="../../dang_nhap_dang_ki/dang_ki/dang_ki.php">Đăng kí</a>
							</li>
							<li class="li_login">
								<a href="../../dang_nhap_dang_ki/login/login.php">Đăng nhập</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>

	<div style="background: white; width: 100%; height: 1000px">
		<div style="width: 10%; height: 100%; background: white; float: left">
		</div>
		<div style="width: 80%; height: 100%; background: white; float: left;position: relative">
			<!-- <img src="abc.png" style="width: 20%; position: absolute; left: -20px; top: 80px;"> -->
			<div class="new">
			<div class="page_header">
            <h1 class="page_title">Quy định, điều khoản sử dụng</h1>
        </div>

			<div class="role_page">
                <p><span style="font-size: large;"><strong>Th&ocirc;ng tin c&aacute;c điều khoản khi tham gia</strong></span></p>
<p><br /><span style="font-size: medium;"><strong>I. ĐIỀU KHOẢN CHUNG</strong></span></p>
<p> C&oacute; to&agrave;n quyền quyết định đăng, hoặc kh&ocirc;ng đăng; lưu giữ hoặc kh&ocirc;ng lưu giữ th&ocirc;ng tin của kh&aacute;ch h&agrave;ng đăng tr&ecirc;n trang web n&agrave;y m&agrave; kh&ocirc;ng cần phải b&aacute;o trước cho kh&aacute;ch h&agrave;ng.<br /><br />Kh&aacute;ch h&agrave;ng đăng tin tr&ecirc;n  phải tự chịu tr&aacute;ch nhiệm về nội dung, t&iacute;nh x&aacute;c thực của tin đăng.  kh&ocirc;ng chịu tr&aacute;ch nhiệm v&agrave; kh&ocirc;ng bảo đảm về t&iacute;nh ch&iacute;nh x&aacute;c của th&ocirc;ng tin được đăng. Đồng thời, kh&ocirc;ng chịu bất cứ tr&aacute;ch nhiệm ph&aacute;p l&yacute; hoặc bồi thường thiệt hại n&agrave;o về việc mất m&aacute;t hay hư hỏng đối với những h&agrave;ng h&oacute;a được đề cập đến trong tất cả c&aacute;c giao dịch tr&ecirc;n .<br /><br />Mọi th&agrave;nh vi&ecirc;n, kh&aacute;ch h&agrave;ng, đối t&aacute;c của  c&oacute; tr&aacute;ch nhiệm thường xuy&ecirc;n truy cập trang "<strong>Quy định, Điều khoản sử dụng</strong>" n&agrave;y, xem mọi sự thay đổi, bổ sung (nếu c&oacute;), để x&aacute;c nhận v&agrave; đồng &yacute; với tất cả c&aacute;c phần sửa đổi, bổ sung.<br /><br /><br /><span style="font-size: medium;"><strong>II. ĐIỀU KHOẢN RI&Ecirc;NG VỀ BẢN QUYỀN THƯƠNG HIỆU</strong></span><br />&nbsp;<br />Để tr&aacute;nh cạnh tranh kh&ocirc;ng l&agrave;nh mạnh v&agrave; g&acirc;y nhầm lẫn cho kh&aacute;ch h&agrave;ng,  giữ to&agrave;n quyền kh&ocirc;ng đăng b&agrave;i quảng c&aacute;o cho những c&ocirc;ng ty v&agrave; trang web c&oacute; t&iacute;nh chất sau:<br /><br />C&oacute; t&iacute;nh chất giả tạo  để cung cấp dịch vụ<br /><br />Sao ch&eacute;p giao diện của  &nbsp;<br /><br />Sao ch&eacute;p slogan, logo hoặc t&ecirc;n miền của <br />&nbsp;<br /><span style="font-size: medium;"><strong>III. ĐIỀU KHOẢN RI&Ecirc;NG VỀ NỘI DUNG TIN</strong></span></p>
<p> từ chối kh&ocirc;ng nhận đăng c&aacute;c th&ocirc;ng tin li&ecirc;n quan đến ch&iacute;nh trị, t&ocirc;n gi&aacute;o, sex, crack...; c&aacute;c th&ocirc;ng tin quảng c&aacute;o, rao vặt về rượu, thuốc l&aacute;, thịt th&uacute; rừng, vũ kh&iacute; c&aacute;c loại, c&aacute;c sản phẩm nh&aacute;i hoặc c&aacute;c sản phẩm giả của c&aacute;c h&agrave;ng ho&aacute; kh&aacute;c, c&aacute;c mặt h&agrave;ng quốc cấm kh&aacute;c.<br /><br />Với tin đăng c&oacute; website hoặc đường link c&oacute; nội dung xấu,  sẽ từ chối đăng v&agrave; x&oacute;a website hoặc link n&agrave;y m&agrave; kh&ocirc;ng cần phải b&aacute;o trước<br /><br />C&aacute;c th&ocirc;ng tin đăng tr&ecirc;n website  kh&ocirc;ng được ni&ecirc;m yết gi&aacute; bằng v&agrave;ng, ngoại tệ, chỉ được ni&ecirc;m yết gi&aacute; tiền đồng Việt Nam. C&aacute;c th&ocirc;ng tin vi phạm quy định n&agrave;y, Ban bi&ecirc;n tập sẽ x&oacute;a gi&aacute; m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o trước. Với một số th&ocirc;ng tin của kh&aacute;ch h&agrave;ng c&oacute; ghi gi&aacute; của sản phẩm, nếu Ban bi&ecirc;n tập nhận thấy mức gi&aacute; n&agrave;y kh&ocirc;ng ph&ugrave; hợp với mức gi&aacute; chung tr&ecirc;n thị trường, ch&uacute;ng t&ocirc;i sẽ bỏ gi&aacute;, m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o trước.<br /><br />Với ti&ecirc;u đề v&agrave; m&ocirc; tả của tin đăng: nhập Tiếng Việt chữ thường, c&oacute; dấu, viết hoa đầu d&ograve;ng, kh&ocirc;ng viết tắt v&agrave; d&ugrave;ng những k&yacute; tự đặc biệt. Trong ti&ecirc;u đề kh&ocirc;ng được nhập số điện thoại, t&ecirc;n website.<br /><br />Với H&igrave;nh ảnh của tin đăng: phải l&agrave; h&igrave;nh ảnh c&oacute; li&ecirc;n quan đến nội dung tin. Tr&ecirc;n h&igrave;nh ảnh kh&ocirc;ng được để h&igrave;nh ch&igrave;m (watermark) của web hoặc b&aacute;o kh&aacute;c.</p>
<p>Khi ph&aacute;t hiện tin đăng kh&ocirc;ng đ&uacute;ng sự thật, hay chỗ cho thu&ecirc; l&agrave; dịch vụ hay c&ograve; nh&agrave; trọ, bạn vui l&ograve;ng b&aacute;o cho Ban quản trị biết bằng c&aacute;ch bấm v&agrave;o n&uacute;t "Gửi phản hồi" hoặc li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua Hotline.<br /><br />Những trường hợp cố t&igrave;nh spam, vi phạm nội quy nhiều lần th&igrave; ch&uacute;ng t&ocirc;i sẽ đưa số điện thoại, địa chỉ v&agrave; tất cả th&ocirc;ng tin của bạn v&agrave;o Danh s&aacute;ch Blacklist (Sẽ kh&ocirc;ng hiển thị được tr&ecirc;n ).</p>
<p><br /><strong>Tất cả c&aacute;c tin đăng sai phạm quy định tr&ecirc;n sẽ bị x&oacute;a m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o trước.</strong><br /><br /><strong>Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm về nội dung c&aacute;c b&agrave;i đăng tr&ecirc;n website.</strong><br /><br /><br /></p>
<p style="text-align: right;"><strong>BQT </strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>

			
			</div>
		</div>
		<div style="width: 10%; height: 100%; background: white; float: left">
	</div>


	<div id="footer_body" style="margin-top: 1200px;">
			<div class="footer_main">
				<div class="footer_img">
					<img src="https://tromoi.com/logo.png">
				</div>
				<div class="footer_font">
					<p style="font-family: 'UVNHONGHAHEP'; font-size: 28px;color: #FFF;">PHÒNG TRỌ SINH VIÊN</p>
					<span class="span">Email:  </span>
					 duykhanhth1999@gmail.com<br>
					<span class="span">Điện thoại:</span>
					0978751451<br>
					<span class="span">Facebook:</span>
					https://www.facebook.com/khanhs.IT<br>
					<span class="span">Copyright:</span>
					© 2015 - 2018
				</div>
				<div class="footer_dong">
					
				</div>
			</div>
		</div>

	