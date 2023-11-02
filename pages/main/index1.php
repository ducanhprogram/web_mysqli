<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
    if(isset($_GET['trang'])) {
        $page = $_GET['trang'];
    }else {
        $page =1;
    }
    if($page==''|| $page ==1) {
        $begin = 0;
    }else {
        $begin = ($page*3)-3;
    }
    $sql_pro = "SELECT * FROM  tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc =tbl_danhmuc.id_danhmuc 
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";  // begin là bắt đầu từ và lấy 3 sản phẩm
// $begin,3
    $query_pro = mysqli_query($mysqli,$sql_pro);
    //get ten danh muc


?>


<h3>Sản phẩm mới nhất</h3>
            <ul class="product_list">
                <?php
            while($row = mysqli_fetch_array($query_pro)) {
                ?>
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                        <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham']  ?></p>
                        <p class="price_product">Giá: <?php echo number_format($row['giasp'], 0, ',','.').' vnđ' ?></p>
                        <!-- <p style="text-align:center; color: #d51ab8"></p><?php echo $row['tendanhmuc']  ?></p>        -->
                    </a>
                </li>

                <?php
                }
                ?>
                
            </ul>

            <div style="clear:both;"></div>
            <style type="text/css">
                ul.list_trang {
                    padding: 0;
                    margin: 0;
                    list-style: none;
                }

                ul.list_trang li {
                    
                    float: left;        
                    margin: 5px;                
                    display: block;

                }

                ul.list_trang li a {
                    background: burlywood;
                    padding: 5px 13px;
                    color: #000;
                    text-align: center;
                    text-decoration: none;
                }

            </style>
           
            <?php 
            $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham" );
            $row_count = mysqli_num_rows($sql_trang);
             $trang = ceil($row_count / 3);
            ?>
           <!-- <span>Trang hiện tại: <?php echo $page ?>/<?php echo $trang ?></span> -->

            <!-- <ul class="list_trang">
                <?php
                for($i=1; $i<=$trang;$i++) {
                ?>
                <li><a  <?php if($i==$page){echo 'style="background: brown !important;"';}
                else{echo '';} ?> href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php
                }
                ?>

            </ul> -->