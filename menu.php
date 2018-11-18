<link rel="stylesheet" type="text/css" href="./css/style.css">

<div class="col-lg-3 col-md-3 col-sm-12" id="menu">

	<ul class="list-group">
		<li class="list-group-item" id="dm">Danh Mục</li>
		<?php
		while ($row= mysqli_fetch_array($query)){
			?>
			<li id="me" class="list-group-item"><a onclick="document.getElementById('me').style.color = 'red'"  href="index.php?id_dm=<?php echo $row['id']; ?>"><?php echo $row['ten']; ?></a></li>
			<?php
		}
		?>


	</ul>
</div>