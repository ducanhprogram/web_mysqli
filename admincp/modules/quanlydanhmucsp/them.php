<h3>Thêm danh mục sản phẩm</h3>
<table border="1" width="50%" style = "border-collapse: collapse;">
    <form action="modules/quanlydanhmucsp/xuly.php" method="POST">
  <tr>
    <td>Tên danh mục</td>
    <td><input type="text" name="tendanhmuc"></td>
  </tr>
  <tr>
    <td>Thứ Tự</td>
    <td><input type="text" name="thutu"></td>
  </tr>

  <tr>
    <td collapse="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
  </tr>
  </form>

</table>

<style>
    table {
        width: 50%;
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

    input[type="text"], input[type="submit"] {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="submit"] {
      font-size: 16px;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
