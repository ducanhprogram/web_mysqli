<?php

    if(isset($_POST["doimatkhau"])) {
        $taikhoan = $_POST["email"];
        $matkhau_cu = md5($_POST["password_cu"]);
        $matkhau_moi = md5($_POST["password_moi"]);

        $sql = "SELECT * FROM tbl_dangky WHERE email= '".$taikhoan."' AND matkhau= '".$matkhau_cu."' LIMIT 1 ";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);  // đếm số dòng trong admin đó: 
        if($count > 0) {
            $sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET  matkhau='".$matkhau_moi."'");
            // $sql_update = mysqli_query($mysqli, "UPDATE tbl_dangky SET matkhau='".$matkhau_moi."' WHERE email='" . $taikhoan . "' ");
            // $_SESSION['dangky'] = $taikhoan;
            echo '<p style="color: green;">Tài khoản và mật khẩu đã thay đổi!.</p>';
        }else {
            echo '<p style="color:red;">"Tài khoản hoặc Mật Khẩu cũ không đúng, vui lòng nhập lại!!!");</p>';
        }
    }
?>
<form action="" autocomplete="off" method="POST">
    <table border="1" class="table-login" style="text-align: center; border-collapse: collapse;">
        <tr>
            <td colspan="2">Đổi mật khẩu Admin</td>
        </tr>
        <tr>
            <td>Tài Khoản</td>
            <td><input type="text" name="email"></td>
        </tr>
       
        <tr>
            <td>Mật Khẩu cũ</td>
            <td><input type="text" name="password_cu"></td>
        </tr>

        <tr>
            <td>Mật Khẩu mới</td>
            <td><input type="text" name="password_moi"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
        </tr>
    </table>
    </form>