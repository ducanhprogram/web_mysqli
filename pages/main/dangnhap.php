<?php
// đăng nhập thì sẽ lưu session
    if(isset($_POST["dangnhap"])) {
        $email = $_POST["email"];
        $matkhau = md5($_POST["password"]);
        $sql = "SELECT * FROM tbl_dangky WHERE email= '".$email."' AND matkhau = '".$matkhau."' LIMIT 1 ";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);  // đếm số dòng trong admin đó: 
        if($count > 0) {
            $row_data = mysqli_fetch_array($row);
            // nếu điền đúng: đặt session mới -> session đăng nhập gắn là tài khoản: ducanhadmin 
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        }else {
            echo '<p style="color:red;">Mật khẩu hoặc Email sai, vui lòng nhập lại.</p>';
        }
    }
?>


<form action="" autocomplete="off" method="POST">
    <table border="1" width= "30%" class="table-login" style="text-align: center; border-collapse: collapse;">
        <tr>
            <td colspan="2">Đăng nhập khách hàng</td>
        </tr>
        <tr>
            <td>Tài Khoản</td>
            <td><input type="text"  size= "30%" name="email" placeholder="Email...."></td>
        </tr>
        <tr>
            <td>Mật Khẩu</td>
            <td><input type="password" size= "30%" name="password" placeholder="Mật khẩu...."></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
        </tr>
    </table>
    </form>