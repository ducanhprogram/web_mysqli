<?php
    session_start();
    include("../../admincp/config/config.php");
    // Thêm số lượng
    if(isset($_GET['cong'])) {
        $id=$_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item) {
            if($cart_item['id'] != $id) {
                $product[] = array('tensanpham' =>  $cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);   
                $_SESSION['cart'] = $product;
            }
            else {
                $tangsoluong = $cart_item['soluong'] + 1;
                if($cart_item['soluong'] < 10 ) {
                    $product[] = array('tensanpham' =>  $cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$tangsoluong,
                    'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);   
                }else {
                    $product[] = array('tensanpham' =>  $cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                    'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);   
                }
                $_SESSION['cart'] = $product;
            }
           
    }
    header('Location: ../../index.php?quanly=giohang');
    }

    //Trừ số lượng
    if(isset($_GET['tru'])) {
        $id=$_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item) {
            if($cart_item['id'] != $id) {
                $product[] = array('tensanpham' =>  $cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);   
                $_SESSION['cart'] = $product;
            }
            else {
                $tangsoluong = $cart_item['soluong'] - 1;
                if($cart_item['soluong'] > 1 ) {
                    $product[] = array('tensanpham' =>  $cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$tangsoluong,
                    'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);   
                }else {
                    $product[] = array('tensanpham' =>  $cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                    'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);   
                }
                $_SESSION['cart'] = $product;
            }
           
    }
    header('Location: ../../index.php?quanly=giohang');
    }
    //Xóa sản phẩm
    if(isset($_SESSION['cart']) &&isset($_GET["xoa"])){
        $id=$_GET['xoa'];  // Trên đường link   vd: id = 9
        foreach($_SESSION["cart"]as $cart_item){
            if($cart_item["id"] != $id){
                //Nếu cart_item[id]  nếu sản phẩm nào khác id thì sẽ chạy hết tất cả session  -> session mới
                $product[] = array('tensanpham' =>  $cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);   
        }
        // ví dụ: nếu $id ở trên = 9, nếu car_item = 9 sẽ bỏ qua. Nếu 8, 9, 10. Thì 8 và 10 khác id=9 sẽ thiết lập lại product => còn 8, 10
        $_SESSION['cart'] = $product;
    }
        header('Location: ../../index.php?quanly=giohang');
}
    //xóa tất cả
    if(isset($_GET["xoatatca"])&&$_GET['xoatatca']==1){
            unset($_SESSION['cart']);   // chỉ định chỉ xóa 1 session cart
            header('Location:../../index.php?quanly=giohang');
    }
    //Thêm sản phẩm vào giỏ hàng
    if(isset($_POST["themgiohang"])){
        // session_destroy();
        $id = $_GET["idsanpham"];
        $soluong=1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        if($row){                     // tensanpham -> là key không phải csdl -> đặt giống
            $new_product = array(array('tensanpham' => $row['tensanpham'], 'id' => $id, 'soluong'=>$soluong, 'giasp' => $row['giasp']
            , 'hinhanh' => $row['hinhanh'], 'masp' => $row['masp']));
            //Kiểm tra session giỏ hàng tồn tại
            if(isset($_SESSION['cart'])) {
                    $found = false;
                    // nếu sản phẩm đã có trong giỏ hàng rồi
                    foreach($_SESSION['cart'] as $cart_item){
                        // Nếu dữ liệu trùng
                        if($cart_item['id']==$id){
                  $product[] = array('tensanpham' =>  $cart_item['tensanpham'],'id'=>$cart_item['id'], 'soluong'=>$soluong+1,
                   'giasp'=>$cart_item['giasp'], 'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
                            $found = true;   // đúng

                            //Nếu dữ liệu ko trùng
                        }else {
                            $product[] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],
                             'giasp'=>$cart_item['giasp'] ,'hinhanh'=>$cart_item['hinhanh'],'masp'=> $cart_item['masp']);
                            

                        }
                    }
                    if($found == false){
                        //Liên kết dữ liệu new_product với product
                        //Nếu dữ liệu trùng sẽ array_merge  => tăng product ( gom 2 dữ liệu với nhau)
                        $_SESSION['cart'] = array_merge($product, $new_product);
                    }else {
                        $_SESSION['cart'] = $product;

                    }
                }else {
                      $_SESSION['cart'] = $new_product;
            }
        }
        header('Location:../../index.php?quanly=giohang');
      
    }

?>