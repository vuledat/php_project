<!-- <link rel="stylesheet" type="text/css" href="./css/style.css"> -->


	<ul class="list-group get-tt" >
		<li class="list-group-item" id="dm">Danh Mục</li>
		<?php
		while ($row= mysqli_fetch_array($query)){
			?>
			<li id="me" class="list-group-item"><a onclick="document.getElementById('me').style.color = 'red'"  href="index.php?id_dm=<?php echo $row['id']; ?>&ten_dm=<?php echo $row['ten']; ?>"><?php echo $row['ten']; ?></a></li>
			<?php
		}
		?>


	</ul>