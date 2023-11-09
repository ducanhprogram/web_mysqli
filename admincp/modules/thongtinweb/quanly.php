<h3 style="text-align: center; margin-top: 20px;">Quản lý thông tin liên hệ</h3>

<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        textarea {
            width: calc(100% - 20px);
            padding: 5px;
            resize: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .lh {
            font-size: 30px;
        }
    </style>
<?php
    $sql_lh = "SELECT * FROM tbl_lienhe WHERE id = 1";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>
<table border="1" width="100%" style = "border-collapse: collapse;">
<?php
        while($dong = mysqli_fetch_array($query_lh)) {  
        ?>
    <form action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id'] ?>" method="POST" enctype="multipart/form-data">
       
  <tr>
    <td class="lh">Thông tin liên hệ</td>
    <td><textarea rows="10"  name="thongtinlienhe" style="resize: none"><?php echo $dong['thongtinlienhe'] ?></textarea></td>
  </tr>

  <tr>
    <td collapse="2"><input type="submit" name="submitlienhe" value="Cập nhật"></td>
  </tr>
  <?php
    }
  ?>
  </form>

</table>

<style>
    .lh {
        font-size: 30px;

    }
</style>