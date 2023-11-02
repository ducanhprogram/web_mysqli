<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Web bán quần áo đội bóng</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
    <?php
        session_start();
        include("admincp/config/config.php");
        include("pages/header.php");
        include("pages/menu.php");
        include("pages/main.php");
        include("pages/footer.php");

    ?>  
    </div>
</body>
</html>