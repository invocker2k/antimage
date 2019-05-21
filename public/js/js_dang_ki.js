function dang_ki() {
	dem_sai = 0
	//VALIDATE PHẦN INPUT TÊN ĐĂNG NHẬP
	var ten_khach_hang = document.getElementById('ten_khach_hang').value;
	var loi_ten = document.getElementById('loi_ten');
	 kiem_tra_ten = /[A-Za-z\s]/i;
	if (ten_khach_hang.length == 0) {
		document.getElementById('ten_khach_hang').style.outline = 'none';
		document.getElementById('ten_khach_hang').style.border = 'red 1px solid';
		document.getElementById('ten_khach_hang').focus();
		document.getElementById('loi_ten').style.display = 'block';
		loi_ten.innerHTML = "Điền tên đăng nhập của bạn";
	}
	else if(ten_khach_hang.length>=4 && ten_khach_hang.length<=16) {
		var kqname = kiem_tra_ten.test(ten_khach_hang)
		if (kqname == true) {
			document.getElementById('ten_khach_hang').style.outline = 'none';
			document.getElementById('ten_khach_hang').style.border = 'green 1px solid';
			document.getElementById('loi_ten').style.display = 'none';
			loi_ten.innerHTML = "";
		}
		else {
			document.getElementById('ten_khach_hang').style.outline = 'none';
			document.getElementById('ten_khach_hang').style.border = 'red 1px solid';
			document.getElementById('ten_khach_hang').focus();
			document.getElementById('loi_ten').style.display = 'block';
			loi_ten.innerHTML = "Điền tên đăng nhập của bạn";
		}
		}
	else {
			document.getElementById('ten_khach_hang').style.outline = 'none';
			document.getElementById('ten_khach_hang').style.border = 'red 1px solid';
			document.getElementById('ten_khach_hang').focus();
			document.getElementById('loi_ten').style.display = 'block';
			loi_ten.innerHTML = "Độ dài từ 4-16 ký tự";
	}
	//VALIDATE EMAIL
	var email = document.getElementById('email').value;
	var loi_email = document.getElementById('loi_email');
	if (email.length == 0) {
		document.getElementById('email').style.outline = 'none';
		document.getElementById('email').style.border = 'red 1px solid';
		document.getElementById('email').focus();
		document.getElementById('loi_email').style.display = 'block';
		loi_email.innerHTML = "Điền email của bạn";
		dem_sai = 1;
	}
	else {
		document.getElementById('email').style.outline = 'none';
		document.getElementById('email').style.border = 'green 1px solid';
		document.getElementById('loi_email').style.display = 'none';
		loi_email.innerHTML = "";
	}
	//VALIDATE PHẦN INPUT MẬT KHẨU
	var mat_khau = document.getElementById('mat_khau').value;
	var loi_mat_khau = document.getElementById('loi_mat_khau');
	 kiem_tra_mk = /[A-Za-z0-9]/i;
	if (mat_khau.length == 0) {
		document.getElementById('mat_khau').style.outline = 'none';
		document.getElementById('mat_khau').style.border = 'red 1px solid';
		document.getElementById('mat_khau').focus();
		document.getElementById('loi_mat_khau').style.display = 'block';
		loi_mat_khau.innerHTML = "Điền mật khẩu của bạn";
		dem_sai = 1;
	}
	else if(mat_khau.length>=6 && mat_khau.length<=30) {
		var kqmk = kiem_tra_mk.test(mat_khau)
		if (kqmk == true) {
			document.getElementById('mat_khau').style.outline = 'none';
			document.getElementById('mat_khau').style.border = 'green 1px solid';
			document.getElementById('loi_mat_khau').style.display = 'none';
			loi_mat_khau.innerHTML = "";
		}
		else {
			document.getElementById('mat_khau').style.outline = 'none';
			document.getElementById('mat_khau').style.border = 'red 1px solid';
			document.getElementById('mat_khau').focus();
			document.getElementById('loi_mat_khau').style.display = 'block';
			loi_mat_khau.innerHTML = "Điền mật khẩu của bạn";
			dem_sai = 1;
		}
		}
	else {
			document.getElementById('mat_khau').style.outline = 'none';
			document.getElementById('mat_khau').style.border = 'red 1px solid';
			document.getElementById('mat_khau').focus();
			document.getElementById('loi_mat_khau').style.display = 'block';
			loi_mat_khau.innerHTML = "Mật khẩu yếu";
			dem_sai = 1;
	}
	//VALIDATE PHẦN INPUT XÁC NHẬN MẬT KHẨU
	var mat_khau_1 = document.getElementById('mat_khau_1').value;
	var loi_mat_khau_1 = document.getElementById('loi_mat_khau_1');
	if (mat_khau_1.length == 0) {
		document.getElementById('mat_khau_1').style.outline = 'none';
		document.getElementById('mat_khau_1').style.border = 'red 1px solid';
		document.getElementById('mat_khau_1').focus();
		document.getElementById('loi_mat_khau_1').style.display = 'block';
		loi_mat_khau_1.innerHTML = "Điền lại mật khẩu của bạn";
		dem_sai = 1;
	}
	else {
		document.getElementById('mat_khau_1').style.outline = 'none';
		document.getElementById('mat_khau_1').style.border = 'green 1px solid';
		document.getElementById('loi_mat_khau_1').style.display = 'none';
		loi_mat_khau_1.innerHTML = "";
	}
	if(dem_sai == 1){
		return false;
	}
}