<!DOCTYPE html>
<html>
<head>
	<title>Trang chu</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<div id="wrap">
		
		<?php
		include 'header.php';
		include 'menu.php';
		if (isset($_GET['page'])) {
		switch ($_GET['page']) {
			case 'home':
				include 'container.php';
			break;

			case 'contact':
				include 'contact.php';
			break;
			default:
				include 'container.php';
				
			break;
		}
			
		}

	// include 'footer.php';

		?>
	</div>
	

</body>
</html>