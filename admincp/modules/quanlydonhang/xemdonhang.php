<h3>Xem đơn hàng</h3>

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
    </style>
<?php   
    $code = $_GET['code'];
    // $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND 
    // tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
    $sql_lietke_dh = "SELECT * , tbl_cart_details.created_at as order_date FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND 
    tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
    $query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);

?>

<table border="1" style = " width:100%" style =" border-collapse: collapse; " >
  <tr>
    <th>Id</th>
    <th>Mã Đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
    <th>Ngày đặt hàng</th>
</tr>

<?php

$i = 0;        // lấy ra từng mảng
$tongtien = 0;
while($row = mysqli_fetch_array($query_lietke_dh)) {
    $i++;
    $thanhtien = $row['giasp']*$row['soluongmua'];
    $tongtien += $thanhtien;
?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart']  ?></td>
    <td><?php echo $row['tensanpham']  ?></td>
    <td><?php echo $row['soluongmua']  ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.' ).'vnđ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td><?php echo $row['order_date'] ?></td>

  </tr>

  <?php
}
  ?>
    <tr>
    <td colspan="6">
        <p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>


    </td>
    </tr>

</table>