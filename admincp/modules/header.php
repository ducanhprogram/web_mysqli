
<?php
    if(isset($_GET["dangxuat"]) && $_GET['dangxuat']==1) {
        // bỏ session đăng nhập
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>

<p><a href="index.php?dangxuat=1">Đăng xuất : <?php if(isset($_SESSION['dangnhap']))  {
            echo $_SESSION['dangnhap'];  //  sẽ mang cái tài khoản

        }?></a></p>

<style>
    /* style.css */

a {
    text-decoration: none;
    color: #000; /* Màu chữ */
    background-color: #7fff00; /* Màu nền */
    padding: 10px 20px; /* Khoảng cách padding */
    border: 1px solid #ddd; /* Đường viền */
    border-radius: 5px; /* Bo tròn góc */
}

a:hover {
    background-color: #228B22 ;/* Màu nền khi rê chuột vào */
}

p {
    font-family: Arial, sans-serif; /* Font chữ */
    font-size: 16px; /* Kích thước chữ */
    
    margin: 20px 20px 20px 5px; /* Khoảng cách giữa các đoạn văn */
    
}

</style>
