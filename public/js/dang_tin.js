function dang_tin() {
	dem_sai = 0
	// giá phòng
	var gia = document.getElementById('gia').value;
	if (gia.length == 0) {
		document.getElementById('gia').style.outline = 'none';
		document.getElementById('gia').style.border = 'red 1px solid';
		document.getElementById('gia').focus();
		dem_sai = 1;
	}
	else {
		document.getElementById('gia').style.outline = 'none';
		document.getElementById('gia').style.border = 'green 1px solid';
	}
	//diện tích
	var dien_tich = document.getElementById('dien_tich').value;
	if (dien_tich.length == 0) {
		document.getElementById('dien_tich').style.outline = 'none';
		document.getElementById('dien_tich').style.border = 'red 1px solid';
		document.getElementById('dien_tich').focus();
		dem_sai = 1;
	}
	else {
		document.getElementById('dien_tich').style.outline = 'none';
		document.getElementById('dien_tich').style.border = 'green 1px solid';
	}

	//Số lượng người
	var so_luong_nguoi = document.getElementById('so_luong_nguoi').value;
	if (so_luong_nguoi.length == 0) {
		document.getElementById('so_luong_nguoi').style.outline = 'none';
		document.getElementById('so_luong_nguoi').style.border = 'red 1px solid';
		document.getElementById('so_luong_nguoi').focus();
		dem_sai = 1;
	}
	else {
		document.getElementById('so_luong_nguoi').style.outline = 'none';
		document.getElementById('so_luong_nguoi').style.border = 'green 1px solid';
	}
	//quận huyện
	var ma_quan = document.getElementById('ma_quan').value;
	if (ma_quan ==0) {
		document.getElementById('ma_quan').style.outline = 'none';
		document.getElementById('ma_quan').style.border = 'red 1px solid';
		document.getElementById('ma_quan').focus();
		dem_sai = 1;
	}
	else {
		document.getElementById('ma_quan').style.outline = 'none';
		document.getElementById('ma_quan').style.border = 'green 1px solid';
	}

	//Họ tên
	var ten_nguoi_dang = document.getElementById('ten_nguoi_dang').value;
	 kiem_tra_ten = /^([A-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪ][a-zàáâãèéêếìíòóôõùúăđĩũơưăạảấầẩẫậắằẳẵặẹẻẽềềểễệỉịọỏốồổỗộớờởỡợụủứừửữựỳỵỷỹ]{1,6}\s?)+$/;
	if (ten_nguoi_dang.length == 0) {
		document.getElementById('ten_nguoi_dang').style.outline = 'none';
		document.getElementById('ten_nguoi_dang').style.border = 'red 1px solid';
		document.getElementById('ten_nguoi_dang').focus();
	}
	else if(ten_nguoi_dang.length>=8 && ten_nguoi_dang.length<=50) {
		var kqname = kiem_tra_ten.test(ten_nguoi_dang)
		if (kqname == true) {
			document.getElementById('ten_nguoi_dang').style.outline = 'none';
			document.getElementById('ten_nguoi_dang').style.border = 'green 1px solid';
		}
		else {
			document.getElementById('ten_nguoi_dang').style.outline = 'none';
			document.getElementById('ten_nguoi_dang').style.border = 'red 1px solid';
			document.getElementById('ten_nguoi_dang').focus();
		}
		}
	else {
			document.getElementById('ten_nguoi_dang').style.outline = 'none';
			document.getElementById('ten_nguoi_dang').style.border = 'red 1px solid';
			document.getElementById('ten_nguoi_dang').focus();
	}
	//Số điện thoại
	var sdt_nguoi_dang = document.getElementById('sdt_nguoi_dang').value;
	 kiem_tra_sdt = /(09|01[2|6|8|9])+([0-9]{8})\b/g;
	 var kpsdt = kiem_tra_sdt.test(sdt_nguoi_dang)
	if (kpsdt == true) {
			document.getElementById('sdt_nguoi_dang').style.outline = 'none';
			document.getElementById('sdt_nguoi_dang').style.border = 'green 1px solid';
	}
	else {
		document.getElementById('sdt_nguoi_dang').style.outline = 'none';
		document.getElementById('sdt_nguoi_dang').style.border = 'red 1px solid';
		document.getElementById('sdt_nguoi_dang').focus();
	}
	//Địa chỉ
	var dia_chi_phong = document.getElementById('dia_chi_phong').value;
	kiem_tra_dia_chi = /^[a-z\.\,\\\_\-àáâãèéêếìíòóôõùúăđĩũơưăạảấầẩẫậắằẳẵặẹẻẽềềểễệỉịọỏốồổỗộớờởỡợụủứừửữựỳỵỷỹ\s]{11,500}$/i;
	 var kqdia_chi = kiem_tra_dia_chi.test(dia_chi_phong)
	if (kqdia_chi == true) {
		document.getElementById('dia_chi_phong').style.outline = 'none';
		document.getElementById('dia_chi_phong').style.border = 'green 1px solid';
	}
	else {
		document.getElementById('dia_chi_phong').style.outline = 'none';
		document.getElementById('dia_chi_phong').style.border = 'red 1px solid';
		document.getElementById('dia_chi_phong').focus();
	}
	//Tiêu đề
	var tieu_de = document.getElementById('tieu_de').value;
	kiem_tra_tieu_de = /^[a-z\.\,\\\_\-àáâãèéêếìíòóôõùúăđĩũơưăạảấầẩẫậắằẳẵặẹẻẽềềểễệỉịọỏốồổỗộớờởỡợụủứừửữựỳỵỷỹ\s]{11,100}$/i;
	 var kqtieu_de = kiem_tra_tieu_de.test(tieu_de)
	if (kqtieu_de == true) {
		document.getElementById('tieu_de').style.outline = 'none';
		document.getElementById('tieu_de').style.border = 'green 1px solid';
	}
	else {
		document.getElementById('tieu_de').style.outline = 'none';
		document.getElementById('tieu_de').style.border = 'red 1px solid';
		document.getElementById('tieu_de').focus();
	}
	//Nội dung
	var noi_dung_chi_tiet = document.getElementById('noi_dung_chi_tiet').value;
	kiem_tra_noi_dung = /^[a-z\.\,\\\_\-àáâãèéêếìíòóôõùúăđĩũơưăạảấầẩẫậắằẳẵặẹẻẽềềểễệỉịọỏốồổỗộớờởỡợụủứừửữựỳỵỷỹ\s]{11,100}$/i;
	 var kqtieu_de = kiem_tra_noi_dung.test(noi_dung_chi_tiet)
	if (kqtieu_de == true) {
		document.getElementById('noi_dung_chi_tiet').style.outline = 'none';
		document.getElementById('noi_dung_chi_tiet').style.border = 'green 1px solid';
	}
	else {
		document.getElementById('noi_dung_chi_tiet').style.outline = 'none';
		document.getElementById('noi_dung_chi_tiet').style.border = 'red 1px solid';
		document.getElementById('noi_dung_chi_tiet').focus();
	}
	if(dem_sai == 1){
		return false;
	}
}