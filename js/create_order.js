const btnThemSanPham = document.getElementById('btn-them-san-pham');
const bangSanPham = document.getElementById('bang-san-pham');
const tongTienThanhToan = document.getElementById('tong-tien-thanh-toan');

let tongTien = 0;

// Thêm sự kiện click cho nút "Thêm sản phẩm"
btnThemSanPham.addEventListener('click', function() {
    const maSanPham = document.getElementById('ma-san-pham').value.trim();

    // Xử lý logic để lấy thông tin sản phẩm theo mã sản phẩm (ví dụ: gọi API, truy cập cơ sở dữ liệu)
    // Thay thế `sanPham` bằng dữ liệu sản phẩm thực tế lấy được
    const sanPham = {
        ten: "Sản phẩm 1",
        soLuong: 1,
        donGia: 100000,
    };

    if (sanPham) {
        themSanPhamVaoBang(sanPham);
        capNhatTongTien();
    } else {
        // Hiển thị thông báo lỗi nếu không tìm thấy sản phẩm
        alert("Không tìm thấy sản phẩm với mã " + maSanPham);
    }
});

// Hàm thêm sản phẩm vào bảng
function themSanPhamVaoBang(sanPham) {
    const row = bangSanPham.insertRow();

    const tenSanPhamCell = row.insertCell();
    tenSanPhamCell.textContent = sanPham.ten;

    const soLuongCell = row.insertCell();
    const soLuongInput = document.createElement('input');
    soLuongInput.type = 'number';
    soLuongInput.value = sanPham.soLuong;
    soLuongInput.min = 1;
    soLuongInput.addEventListener('change', capNhatTongTien);
    soLuongCell.appendChild(soLuongInput);

    const donGiaCell = row.insertCell();
    donGiaCell.textContent = sanPham.donGia + "đ";

    const thanhTienCell = row.insertCell();
    thanhTienCell.textContent = sanPham.donGia * sanPham.soLuong + "đ";

    const xoaCell = row.insertCell();
    const xoaButton = document.createElement('button');
    xoaButton.textContent = 'Xóa';
    xoaButton.addEventListener('click', function() {
        bangSanPham.deleteRow(row.rowIndex);
        capNhatTongTien();
    });
    xoaCell.appendChild(xoaButton);
}

// Hàm cập nhật tổng tiền
function capNhatTongTien() {
    tongTien = 0;

    const soLuongInputs = bangSanPham.querySelectorAll('input[type="number"]');
    for (const soLuongInput of soLuongInputs) {
        const soLuong = parseInt(soLuongInput.value);
        if (!isNaN(soLuong)) {
            const donGia = parseFloat(soLuongInput.parentNode.parentNode.cells[2].textContent);
            tongTien += soLuong * donGia;
        }
    }

    tongTienThanhToan.textContent = tongTien + "đ";
}
