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

CREATE TABLE IF NOT EXISTS Sequence (
    table_name VARCHAR(50) PRIMARY KEY,
    last_id INT NOT NULL
);

INSERT INTO Sequence (table_name, last_id) VALUES
('Nhanvien', 0),
('Khachhang', 0),
('Sanpham', 0),
('Hoadon', 0);

DELIMITER //

CREATE TRIGGER trigger_auto_generate_mahd
BEFORE INSERT ON Hoadon
FOR EACH ROW
BEGIN
    UPDATE Sequence SET last_id = last_id + 1 WHERE table_name = 'Hoadon';
    SET NEW.mahd = CONCAT('HD', LPAD((SELECT last_id FROM Sequence WHERE table_name = 'Hoadon'), 6, '0'));
END //

DELIMITER ;
DELIMITER //

CREATE TRIGGER trigger_auto_generate_mavach
BEFORE INSERT ON Sanpham
FOR EACH ROW
BEGIN
    UPDATE Sequence SET last_id = last_id + 1 WHERE table_name = 'Sanpham';
    SET NEW.mavach = CONCAT('M', LPAD((SELECT last_id FROM Sequence WHERE table_name = 'Sanpham'), 6, '0'));
END //

DELIMITER ;

DELIMITER //

CREATE TRIGGER trigger_auto_generate_makhachhang
BEFORE INSERT ON Khachhang
FOR EACH ROW
BEGIN
    UPDATE Sequence SET last_id = last_id + 1 WHERE table_name = 'Khachhang';
    SET NEW.makhachhang = CONCAT('KH', LPAD((SELECT last_id FROM Sequence WHERE table_name = 'Khachhang'), 6, '0'));
END //

DELIMITER ;

DELIMITER //

CREATE TRIGGER trigger_auto_generate_manhanvien
BEFORE INSERT ON Nhanvien
FOR EACH ROW
BEGIN
    UPDATE Sequence SET last_id = last_id + 1 WHERE table_name = 'Nhanvien';
    SET NEW.manhanvien = CONCAT('NV', LPAD((SELECT last_id FROM Sequence WHERE table_name = 'Nhanvien'), 6, '0'));
END //

DELIMITER ;

INSERT INTO Sanpham (phanloai, giagoc, giaban, anhsp, tensp, mavach, daban, tonkho, ngaysanxuat) VALUES
('Apple', 10000000, 12000000, LOAD_FILE('/path/to/iphone_image.jpg'), 'iPhone 13', '1234567890123', 50, 100, '2023-05-01'),
('Samsung', 8000000, 9500000, LOAD_FILE('/path/to/samsung_image.jpg'), 'Samsung Galaxy S21', '1234567890124', 30, 50, '2023-04-01'),
('Oppo', 6000000, 7500000, LOAD_FILE('/path/to/oppo_image.jpg'), 'Oppo Reno 5', '1234567890125', 40, 70, '2023-03-01'),
('Xiaomi', 5000000, 6500000, LOAD_FILE('/path/to/xiaomi_image.jpg'), 'Xiaomi Mi 11', '1234567890126', 20, 80, '2023-02-01'),
('Nokia', 3000000, 4000000, LOAD_FILE('/path/to/nokia_image.jpg'), 'Nokia 5.3', '1234567890127', 10, 60, '2023-01-01');