<?php
    if(isset($_POST["dangky"])) {
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        // mysqli là biến kết nối csdl
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang, email, diachi, matkhau, dienthoai)
         VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        
        if($sql_dangky) {
            echo '<p style="color: green">Bạn đã đăng ký thành công!!!</p>';
            $_SESSION['dangky'] = $tenkhachhang;

            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            header('Location:index.php?quanly=giohang');
        }
    }
?>


<h3 style="text-align: center; margin-top: 20px;">Đăng ký thành viên</h3>
<style>
    table.dangky {
            border-collapse: collapse;
            width: 50%;
        }

        table.dangky tr td {
            padding: 10px;
        }

        table.dangky tr td input[type="text"] {
            width: calc(100% - 20px);
            padding: 5px;
        }

        table.dangky tr td input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table.dangky tr td input[type="submit"]:hover {
            background-color: #45a049;
        }

        table.dangky tr td a {
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
</style>
<form action="" method="POST">
<table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
    <tr>
        <td>Họ và tên</td>
        <td><input type="text" size="50" name="hovaten"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" size="50" name="email"></td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input type="text" size="50" name="dienthoai"></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" size="50" name="diachi"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="text" size="50" name="matkhau"></td>
    </tr>
    <tr>
        <td><input  type="submit" name="dangky" value="Đăng ký"></td>
        <td><a href="index.php?quanly=dangnhap"> Đăng nhập nếu có tài khoản</a></td>
    </tr>
</table>

</form>