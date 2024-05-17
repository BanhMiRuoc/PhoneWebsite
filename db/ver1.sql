CREATE DATABASE IF NOT EXISTS CUOIKY;
USE CUOIKY;

CREATE TABLE IF NOT EXISTS Taikhoan (
    tentk VARCHAR(30),
    mk VARCHAR(30),
	quyen varchar(5),
    PRIMARY KEY (tentk)
);
CREATE TABLE IF NOT EXISTS Nhanvien (
    manhanvien VARCHAR(30),
    hoten TEXT,
    email VARCHAR(30),
    gioitinh TEXT,
    chucvu TEXT,
    sodienthoai VARCHAR(10),
    trangthai VARCHAR(50),
    avatar LONGBLOB,
    tentk VARCHAR(30),
    PRIMARY KEY (manhanvien),
    FOREIGN KEY (tentk) REFERENCES Taikhoan (tentk)
);

CREATE TABLE IF NOT EXISTS Khachhang (
    makhachhang VARCHAR(30),
    hoten TEXT,
    diachi TEXT,
    sodienthoai VARCHAR(10),
    tentk VARCHAR(30),
    PRIMARY KEY (makhachhang),
    FOREIGN KEY (tentk) REFERENCES Taikhoan (tentk)
);

CREATE TABLE IF NOT EXISTS Sanpham (
    phanloai TEXT,
    giagoc FLOAT,
    giaban FLOAT,
    anhsp LONGBLOB,
    tensp TEXT,
    mavach VARCHAR(20),
    daban INT,
    tonkho INT,
    ngaysanxuat DATE,
    PRIMARY KEY (mavach)
);

CREATE TABLE IF NOT EXISTS Hoadon (
    tongtien INT,
    tienkhdua INT,
    tienthua INT,
    ngaylapdon DATE,
    soluongsp INT,
    mahd VARCHAR(20),
    manhanvien VARCHAR(30),
    makhachhang VARCHAR(30),
    PRIMARY KEY (mahd),
    FOREIGN KEY (manhanvien) REFERENCES Nhanvien (manhanvien),
    FOREIGN KEY (makhachhang) REFERENCES Khachhang (makhachhang)
);

CREATE TABLE IF NOT EXISTS Chitiethoadon (
    mavach VARCHAR(20),
    dongia FLOAT,
    mota TEXT,
    soluong INT,
    mahd VARCHAR(20),
    PRIMARY KEY (mahd, mavach),
    FOREIGN KEY (mahd) REFERENCES Hoadon (mahd),
    FOREIGN KEY (mavach) REFERENCES Sanpham (mavach)
);
DELIMITER //

CREATE TRIGGER trigger_auto_generate_mavach
BEFORE INSERT ON Sanpham
FOR EACH ROW
BEGIN
    SET NEW.mavach = CONCAT('M', LPAD((SELECT COUNT(*) + 1 FROM Sanpham), 6, '0'));
END //

CREATE TRIGGER trigger_auto_generate_manhanvien
BEFORE INSERT ON Nhanvien
FOR EACH ROW
BEGIN
    SET NEW.manhanvien = CONCAT('NV', LPAD((SELECT COUNT(*) + 1 FROM Nhanvien), 6, '0'));
END //

CREATE TRIGGER trigger_auto_generate_mahd
BEFORE INSERT ON Hoadon
FOR EACH ROW
BEGIN
    SET NEW.mahd = CONCAT('HD', LPAD((SELECT COUNT(*) + 1 FROM Hoadon), 6, '0'));
END //

CREATE TRIGGER trigger_auto_generate_makhachhang
BEFORE INSERT ON Khachhang
FOR EACH ROW
BEGIN
    SET NEW.makhachhang = CONCAT('KH', LPAD((SELECT COUNT(*) + 1 FROM Khachhang), 6, '0'));
END //

DELIMITER ;