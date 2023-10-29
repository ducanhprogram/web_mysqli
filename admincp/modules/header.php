
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
