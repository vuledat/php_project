<!DOCTYPE html>
<html>
<head>
	<title>File</title>
</head>
<style type="text/css">
	table td{
		border: solid black 1px;
	}
</style>
<?php 
		$f = fopen("text.txt", "r");
		$i = 1;
?>
<body>
	<table>
		<tr>
			<td>Row</td>
			<td>Content</td>
		</tr>
		<?php
			while (!feof($f)) {
				$line = fgets($f);	
		?>
		<tr>
			<td>Row <?php echo $i;?>: </td>
			<td><?php echo $line  ?></td>
		</tr>

		<?php
		$i++;
			}
			?>

	</table>
</body>
</html>