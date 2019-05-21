function dang_nhap() {
	dem_sai = 0
	var ten_khach_hang = document.getElementById('ten_khach_hang').value;
	var loi_ten = document.getElementById('loi_ten');
	if (ten_khach_hang.length == 0) {
		document.getElementById('ten_khach_hang').style.outline = 'none';
		document.getElementById('ten_khach_hang').style.border = 'red 1px solid';
		document.getElementById('ten_khach_hang').focus();
		document.getElementById('loi_ten').style.display = 'block';
		loi_ten.innerHTML = "Nhập tên đăng nhập của bạn";
		dem_sai = 1;
	}
	else {
		document.getElementById('ten_khach_hang').style.outline = 'none';
		document.getElementById('ten_khach_hang').style.border = 'green 1px solid';
		document.getElementById('loi_ten').style.display = 'none';
		loi_ten.innerHTML = "";
	}


	var mat_khau = document.getElementById('mat_khau').value;
	var loi_mat_khau = document.getElementById('loi_mat_khau');
	if (mat_khau.length == 0) {
		document.getElementById('mat_khau').style.outline = 'none';
		document.getElementById('mat_khau').style.border = 'red 1px solid';
		document.getElementById('mat_khau').focus();
		document.getElementById('loi_mat_khau').style.display = 'block';
		loi_mat_khau.innerHTML = "Nhập mật khẩu của bạn";
		dem_sai = 1;
	}
	else {
		document.getElementById('mat_khau').style.outline = 'none';
		document.getElementById('mat_khau').style.border = 'green 1px solid';
		document.getElementById('loi_mat_khau').style.display = 'none';
		loi_mat_khau.innerHTML = "";
	}
	if(dem_sai == 1){
		return false;
	}
}