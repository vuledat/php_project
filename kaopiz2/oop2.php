
<!DOCTYPE html>
<html>
<head>
	<title>Caculate</title>
</head>
<body>
	<?php
	/**
	 * 
	 */
	class Calculator
	{
		
		function add($a,$b){
			return($a + $b);
		}
		function minus($a,$b){
			return($a - $b);
		}
		function multiply($a,$b){
			return($a * $b);
		}
		function devide($a,$b){
			return($a / $b);
		}
	}
	$x = $y = $result = 0;
	$calculator = '';
	if (isset($_POST['num1'])) {
		$x = $_POST['num1'];
	}
	if (isset($_POST['num2'])) {
		$y= $_POST['num2'];
	}
	if (isset($_POST['calculate'])) {
		$calculator = $_POST['calculate'];
	}

	$obj = new Calculator();
	switch ($calculator) {
		case 'add':
			$result = $obj->add($x,$y);
			break;
		case 'minus':
			$result = $obj->minus($x,$y);
			break;
		case 'devide':
			$result = $obj->devide($x,$y);
			break;
		case 'multiply':
			$result = $obj->multiply($x,$y);
			break;
		default:
			# code...
			break;
	}
	?>
	<form method="post">
		<table>
			<tr>
				<td>Number 1:</td>
				<td><input type="text" name="num1" value="<?php echo $x ?>" ></td>
			</tr>
			<tr>
				<td>Number 2:</td>
				<td><input type="text" name="num2" value="<?php echo $y ?>"></td>
			</tr>
			<tr>
				<td>Calculator: </td>
				<td>
					<select name="calculate">
						<option value="add">+</option>
						<option value="minus">-</option>
						<option value="devide">/</option>
						<option value="multiply">*</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Result</td>
				<td>
					<input type="text" name="result" value="<?php echo $result ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Calcula">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>