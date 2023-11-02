<h3>Thêm sản phẩm</h3>
<table border="1" width="100%" style = "border-collapse: collapse;">
    <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="tensanpham"></td>
  </tr>
  <tr>
    <td>Mã sản phẩm</td>
    <td><input type="text" name="masp"></td>
  </tr>

  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" name="giasp"></td>
  </tr>

  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>

 
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>

  <tr>
    <td>Tóm tắt</td>
    <td><textarea name="tomtat" rows="10" style="resize: none"></textarea></td>
  </tr>

  <tr>
    <td>Nội dung</td>
    <td><textarea rows="10"  name="noidung" style="resize: none"></textarea></td>
  </tr>

  <tr>
    <td>Danh  mục sản phẩm</td>
    <td>
      <select name="danhmuc">

      <?php
      $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
      $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);

      while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
        <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?> </option>
        <?php
      }
      ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>Tình trạng</td>
    <td>
      <select name="tinhtrang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </td>
  </tr>
 
  <tr>
    <td collapse="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
  </tr>
  </form>

</table>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    input[type="text"], textarea, select, input[type="file"] {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
        margin-top: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        padding: 10px;
        border: none;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
        margin-top: 10px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 5px;
    }
</style>
