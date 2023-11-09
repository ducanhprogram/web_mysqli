
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" href="css/styleadmincp.css">

    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            /* background-image: url('https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/04/game-bong-da-huyen-thoai-fifa-sap-khong-con.png'); Thay thế bằng URL của hình ảnh nền bóng đá */
            background-size: 50% 50%; /* Thay đổi kích thước ở đây */
            background-position: center;
        }

        .title_admin {
            text-align: center;
            padding: 20px 0;
            background-color: rgba(76, 175, 80, 0.8); /* Màu xanh lá cây với độ mờ 0.8 */
            color: white;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header, .footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .menu {
            background-color: #f2f2f2;
            padding: 10px;
            flex: 1;
            min-width: 200px;
        }

        .main {
            flex: 3;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Màu trắng với độ mờ 0.7 */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            margin: 20px;
        }

        .logout-btn {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }
    </style>

</head>
<?php
session_start();
if(!isset($_SESSION["dangnhap"])){
    header("Location:login.php");
}
?>
<body>
    <h3 class="title_admin">Welcome to Admincp</h3>
    <div class="header-inner"><img src="../images/Logo-sporter-2023-light.png" alt="">
</div>
    <h1 class="title-inner">CỬA HÀNG ĐỒ BÓNG ĐÁ CAO CẤP HÀNG ĐẦU SPORTER.VN</h1>
        
    <div class="wrapper">
    <?php
        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");

    ?>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <script>                 // Dựa vào phần name
            CKEDITOR.replace( 'tomtat' );
            CKEDITOR.replace( 'noidung' );
            CKEDITOR.replace('thongtinlienhe');
    </script>
</body>
</html>