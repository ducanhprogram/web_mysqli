<h3>Liên hệ</h3>
<?php
    $sql_lh = "SELECT * FROM tbl_lienhe WHERE id = 1";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>

<?php
        while($dong = mysqli_fetch_array($query_lh)) {  
        ?>
            <p><?php echo $dong['thongtinlienhe']  ?></p>
        <?php
        }
        ?>


<!DOCTYPE html>
<html>
<head>
    <title>Google Map Example</title>

    <style>
        iframe {
            margin: 20px 0;
        }
    </style>
</head>
<body>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.6434365844398!2d105.78799176359328!3d20.981134695049384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acce612c766f%3A0xf1fff967689168e!2zxJDhuqFpIEjhu41jIEtp4bq_biBUcsO6YyAtIFRy4bqnbiBQaMO6IChIw6AgxJDDtG5nKQ!5e0!3m2!1svi!2s!4v1699345538035!5m2!1svi!2s"
     width="800" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>

