<?php
ob_start();
session_start();
include_once '../quantri/ketnoi.php';
?>

    <div class="row">
        <ul class="list-group">

        <?php
        $thanhtoan=0;
        $k= 0;

        if (!empty($_SESSION["cart_id"]))
            foreach ($_SESSION["cart_id"] as $key => $value) {
                $sql = "SELECT * FROM sanpham WHERE id=$value";
                $query = mysqli_query($con,$sql);
                $row= mysqli_fetch_array($query);
                $thanhtoan += $row['gia'];

                ?>


                    <li class="list-group-item"><?php echo $row['ten'];?></li>

                <?php
                $k++;
            }

        ?>
        </ul>

    </div>

<!--<div class="item-sanpham col-lg-12">-->
<!--    <div class="card">-->
<!--        <div class="card-body text-center">-->
<!--            <img class="card-img-top" height="150" width="150" src="./quantri/anh/--><?php //echo $row['anh'];?><!--">-->
<!---->
<!--            <h6 class="card-title">--><?php //echo $row['ten'];?><!--</h6>-->
<!--            <p class="card-text text-danger">--><?php //echo $row['gia'];?><!--</p>-->
<!---->
<!--            <button class="btn btn-danger "><a class=" text-light" href="xoa.php?key=--><?php //echo $k ?><!--">Xóa</a></button>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->