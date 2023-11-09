/*
create database web_mysqli;
use mysqli;
*/
create table tbl_admin(
	id_admin int auto_increment primary key,
    username varchar(100) not null,
    password varchar(100) not null,
    admin_status int
);

INSERT INTO `tbl_admin` (`username`, `password`, `admin_status`) VALUES
('ducanhadmin', '25f9e794323b453885f5181f1b624d0b', 1);


create table tbl_danhmuc(
	id_danhmuc int auto_increment primary key not null ,
    tendanhmuc varchar(255) not null,
    thutu int not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into tbl_danhmuc(tendanhmuc,thutu)
values ('Quần',4),
		('Giầy',3),
        ('Túi',5),
        ('Bóng đá',6),
        ('Áo',7),
        ('Tất',6),
        ('Keo băng chấn thương',2);

create table tbl_sanpham(
	id_sanpham int auto_increment not null primary key ,
    tensanpham varchar(255) not null,
    masp varchar(100) not null,
    giasp varchar(50) not null,
    soluong int not null,
    hinhanh varchar(255) not null,
    tomtat text ,
    noidung text,
    tinhtrang int not null,
      id_danhmuc int,
    FOREIGN KEY (id_danhmuc) REFERENCES tbl_danhmuc(id_danhmuc)
);

insert into tbl_sanpham(tensanpham, masp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang, id_danhmuc)
values ('Quần',006,320000,3,'1698684270_Quan.png','Trong suốt 3 thập kỷ vừa qua','Manchester United',1, 1),
		('Bóng đá',003,30000,2,'1698677659_Bongda.jpg','truyryty','truyryty',1,4),
        ('Giầy',005,130000,2,'1698677731_giay-da-bong-nike.jpg','Giày Thể Thao Nam NIKE Air Max Dawn DM0013-101','Giày Thể Thao Nam NIKE Air Max Dawn DM0013-101',1,2),
        ('Keo băng đá bóng',008,100000,5,'1698684131_keobongda.jpg','Băng keo thể thao Starbalm Sport Care','Băng keo thể thao Starbalm Sport Care',1,2),
        ('Áo',004,250000,7,'1698677805_aoreal.jpg','Real Madrid Club de Fútbol','Real Madrid Club de Fútbol',1,5),
        ('Tất',001,200000,3,'1698684299_tatadidas.jpg','Vớ Bóng Đá Nam Adidas Milano 16 Sock AJ5905','Vớ Bóng Đá Nam Adidas Milano 16 Sock AJ5905',1,6),
        ('Túi đựng đồ',002,180000,4,'1698685651_Tui.png','Balo Thể Thao HIER DURABLE - Yellow','Đồ thể thao phong cách cá tính',1,5);



CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL primary key,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into tbl_dangky(id_dangky,tenkhachhang, email, diachi, matkhau, dienthoai)
values(1,'Lê Đức Anh','leducanhled@gmail.com','Hà Nội','21232f297a57a5a743894a0e4a801fc3',0965387001),
		(2,'Nguyễn Khắc Huân','huan@gmail.com','Hải phòng','21232f297a57a5a743894a0e4a801fc3','033445566');


create table tbl_cart (
	id_cart  int not null primary key ,
     id_dangky int not null,
    code_cart varchar(20) not null,
    cart_status int not null,
     FOREIGN KEY (id_dangky) REFERENCES tbl_dangky(id_dangky)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
insert into tbl_cart
values(2,1, 5228,0),
	  (3,1,7757,0),
      (4,2,9037,1);

/*lưu chi tiết đơn hàng mua */
CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(20) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`, `created_at`) VALUES
(3, '5228', 5, 3, '2023-11-03 10:42:21'),
(4, '5228', 27, 1, '2023-11-03 10:42:21'),
(5, '7757', 4, 1, '2023-11-03 10:42:21'),
(6, '7757', 1, 1, '2023-11-03 10:42:21'),
(7, '9037', 4, 1, '2023-11-03 10:42:21'),
(8, '9305', 2, 2, '2023-11-03 10:42:21'),
(9, '4155', 27, 2, '2023-11-03 10:42:21'),
(10, '4155', 1, 1, '2023-11-03 10:42:21'),
(11, '9164', 4, 1, '2023-11-03 10:42:21'),
(12, '9164', 27, 1, '2023-11-03 10:42:21'),
(13, '8653', 1, 1, '2023-11-03 10:42:21'),
(14, '8653', 3, 1, '2023-11-03 10:42:21'),
(15, '2742', 2, 1, '2023-11-03 10:42:21'),
(16, '2742', 3, 2, '2023-11-03 10:42:21'),
(17, '6705', 28, 2, '2023-11-03 10:42:21'),
(18, '4596', 31, 2, '2023-11-03 10:42:21'),
(19, '4566', 27, 2, '2023-11-03 10:42:21'),
(20, '4297', 32, 1, '2023-11-03 10:42:21'),
(21, '4313', 1, 1, '2023-11-03 10:42:21'),
(22, '8724', 3, 1, '2023-11-03 11:49:25');
        
create table tbl_lienhe (
	id int not null auto_increment primary key,
    thongtinlienhe text not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES (1, 'Liên hệ website chúng tôi');




	

