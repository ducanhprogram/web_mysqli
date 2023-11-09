<?php   
    $sql_lietke_sp = "SELECT *FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);

?>


<h3>Liệt kê sản phẩm</h3>
<table border="1" style = " width:100%" style =" border-collapse: collapse; " >
  <tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sản phẩm</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã sản phẩm</th>
    <th>Tóm tắt</th>
    <th>Tình Trạng</th>
    <th>Quản lý</th>
    
</tr>

<?php

$i = 0;           // lấy ra từng mảng
while($row = mysqli_fetch_array($query_lietke_sp)) {
    $i++; 
?>
  <tr>
    <td><?php echo $i  ?></td>
    <td><?php echo $row['tensanpham']  ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']  ?>" width="150px" ></td>
    <td><?php echo $row['giasp']  ?></td>
    <td><?php echo $row['soluong']  ?></td>
    <td><?php echo $row['tendanhmuc']  ?></td>
    <td><?php echo $row['masp']  ?></td>
    <td><?php echo $row['tomtat']  ?></td>
    <td><?php if ($row['tinhtrang']==1)  {
      echo 'Kích hoạt';
    }else{
      echo 'Ẩn';
    }
      ?>
    </td>

    <td class="action-links">
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> |  <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> 
    </td>
  </tr>

  <?php
}
  ?>
</table>

<style>
    table {
        width: 100%;
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

    img {
        max-width: 100%;
        height: auto;
    }

    .action-links {
        display: flex;
        justify-content: space-between;
    }

    .action-links a {
        text-decoration: none;
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        margin: 0 5px; /* Tạo khoảng cách ngang giữa các phần tử */
    }

    .action-links a:hover {
        background-color: #45a049;
    }
</style>

