<?php
// đăng nhập thì sẽ lưu session
    if(isset($_POST["dangnhap"])) {
        $email = $_POST["email"];
        $matkhau = md5($_POST["password"]);
        $sql = "SELECT * FROM tbl_dangky WHERE email= '".$email."' AND matkhau = '".$matkhau."' LIMIT 1 ";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);  // đếm số dòng trong bản ghi truy vấn
        if($count > 0) {
            // hàn này trả về một mảng có thể truy vấn bằng cột
            $row_data = mysqli_fetch_array($row);
            // nếu điền đúng: đặt session mới -> session đăng nhập gắn là tài khoản: ducanhadmin 
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header('Location:index.php?quanly=giohang');
        }else {
            echo '<p style="color:red;">Mật khẩu hoặc Email sai, vui lòng nhập lại.</p>';
        }
    }
?>


<form  action="" autocomplete="off" method="POST">
    <table border="1" width= "30%" class="table-login" style="text-align: center; border-collapse: collapse;">
        <tr>
            <td colspan="2">Đăng nhập khách hàng</td>
        </tr>
        <tr>
            <td>Tài Khoản</td>
            <td><input type="text" class="text" size= "30%" name="email" placeholder="Email...."></td>
        </tr>
        <tr>
            <td>Mật Khẩu</td>
            <td><input type="password" size= "30%" name="password" placeholder="Mật khẩu...."></td>
        </tr>

        <tr>
            <td colspan="2"><input class="login-submit-button" type="submit" name="dangnhap" value="Đăng nhập"></td>
        </tr>
    </table>
    </form>

  
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
.table-login {
        width: 30%;
        text-align: center;
        border-collapse: collapse;
        margin: 0 auto;
        margin-top: 5%;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table-login tr td {
        padding: 10px;
    }

  .text,
    input[type="password"] {
        /* width: 100%; */
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .login-submit-button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-submit-button:hover {
        background-color: #45a049;
    }

    p.error-message {
        color: red;
        font-size: 16px;
        text-align: center;
    }
</style>

    