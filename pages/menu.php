<?php

 $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
 $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);


?>

<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1) {
        unset($_SESSION['dangky']);
    }
?>

<div class="menu">
            <ul class="list_menu">
                <li><a href="index.php">Trang chủ</a></li>
                <?php
                 while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                ?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
                <?php
                 }
                ?>
                <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                <?php
                if(isset($_SESSION['dangky'])) {
                ?> 
                <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
                <li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
                <?php 
                }else{
                    ?>
                <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
                
                <?php
                }
                ?>
                <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>                 
            </ul>

            <p>
                <form action="index.php?quanly=timkiem" method="POST">
                <input style="font-size: 16px;" type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
            <input type="submit" name="timkiem" value="Tìm kiếm">
            </form>
        </p>
        </div>


        <style>
    .menu {
        background-color: #4CAF50;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .list_menu {
        margin: 7px;
        display: flex;
        list-style-type: none;
        padding: 0;
    }

    /* .list_menu li {
        margin-right: 20px;
    } */

    .list_menu li a {
        text-decoration: none;
        color: #fff;
    }
    .list_menu li {
        padding: 10px;
    }

    .list_menu li:hover {
        background-color: #ff9300;
    }

    .list_menu li:last-child {
        margin-right: 0;
    }

    .list_menu li a.button {
        padding: 10px 20px;
        background-color: #45a049;
        color: #fff;
        border-radius: 5px;
    }

    .list_menu li a.button:hover {
        background-color: #4CAF50;
    }

    form {
        display: flex;
        align-items: center;
    }

    input[type="text"] {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #45a049;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #4CAF50;
    }
</style>





