<?php
ob_start();
session_start();
include_once '../quantri/ketnoi.php';
?>

    <div class="row">
        <ul class="list-group" style="margin: 0;padding:0;width: 100%;">

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

                    <li class="list-group-item">

                            <table style="width: 100%">
                                <tr>
                                    <?php
                                        $str = $row['ten'];
                                        $result = substr($str, 0, 15);
                                       
                                    ?>
                                    
                                    <td><?php echo $result;?>...</td>
                                    <td><img src="./quantri/anh/<?php echo $row['anh'];?>" style="width: 40px; height: auto;"></td>
                                    <td class="text-danger"><?php echo $row['gia'];?></td>

                                </tr>
                            </table>

                    </li>

        <?php
                $k++;
            }
        ?>
        </ul>

        <li class="list-group-item text-center" style="width: 100%">
            Tổng Tiền:
            <span class="text-danger font-weight-bold"><?php echo $thanhtoan; ?> Đồng</span>
        </li>


    </div>
