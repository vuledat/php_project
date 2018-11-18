<?php
include_once '../ketnoi.php';
if (isset($_GET['keyword'])){

    $keyword = $_GET['keyword'];
    $sql= "SELECT * FROM sanpham WHERE ten LIKE '%$keyword%'";
}
$query = mysqli_query($con, $sql);


while ($row= mysqli_fetch_array($query)){
    ?>
    <tr>
        <th scope="row"><?php echo $row['id'];  ?></th>

        <td><?php echo $row['ten']; ?> </td>
        <td><?php echo $row['gia']; ?> </td>
        <td><?php
            $id_dm=$row['id_dm'];
            $sql2 = "SELECT * FROM danhmucsp WHERE id =$id_dm ";
            $query2 = mysqli_query($con, $sql2);
            $row2= mysqli_fetch_array($query2);
            echo $row2['ten'];
            ?> </td>
        <td><span class="thumb"><img width="80px" height="auto" src="anh/<?php echo $row['anh']; ?>" /></span></td>

        <td><a href="xoasp.php?id=<?php echo $row['id']; ?>"
               onclick="return xoa();"><span class="fa fa-trash-alt"></span></a></td>

        <td><a href="quantri.php?page=suasp&id=<?php echo $row['id']?>"><span class="fa fa-edit"></span></a></td>
    </tr>
    <?php

}

?>

