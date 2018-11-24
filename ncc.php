<ul class="list-group">
		<li class="list-group-item" id="dm">Nhà Cung Cấp</li>
		<?php
		$sql_ncc = "SELECT * FROM oem";
		$query_ncc = mysqli_query($con, $sql_ncc);
		$row= mysqli_fetch_array($query_ncc);
		
		while ($row= mysqli_fetch_array($query_ncc)){
			?>
			<li id="me" class="list-group-item"><a onclick="document.getElementById('me').style.color = 'red'"  href="index.php?id_ncc=<?php echo $row['id']; ?>&ten_ncc=<?php echo $row['ten']; ?>"><?php echo $row['ten']; ?></a></li>
			<?php
		}
		?>

</ul>