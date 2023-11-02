<?php   
    $sql_lietke_danhmucsp = "SELECT *FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);

?>


<h3>Liệt kê danh mục sản phẩm</h3>
<table border="1" style = " width:100%" style =" border-collapse: collapse; " >
  <tr>
    <th>Id</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
   
</tr>

<?php

$i = 0;           // lấy ra từng mảng
while($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
    $i++;
?>
  <tr>
    <td><?php echo $i  ?></td>
    <td><?php echo $row['tendanhmuc']  ?></td>
    <td>
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> |  <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>

  <?php
}
  ?>

</table>


<style>
    table {
        /* width: 100%; */
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    tr td > a {
        text-decoration: none;
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
    }

    a:hover {
        background-color: #45a049;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

