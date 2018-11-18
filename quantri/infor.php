<?php 
    ob_start();
   
    include_once './ketnoi.php'; 
?> 
<div id="infor" style="">
    <a href="#" class="btn btn-primary">
         <?php echo ($_SESSION["user"]) ?>
    </a>
         <i class="far fa-user-circle fa-2x text-primary "></i>
    <a href="logout.php" class="btn btn-primary"> Thoát</a>
</div>