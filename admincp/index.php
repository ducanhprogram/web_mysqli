

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" href="css/styleadmincp.css">
</head>
<?php
session_start();
if(!isset($_SESSION["dangnhap"])){
    header("Location:login.php");
}
?>
<body>
    <h3 class="title_admin">Welcom to Admincp</h3>

    <div class="wrapper">
    <?php
        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");

    ?>
    </div>
</body>
</html>