<?php
if(isset($_POST['submit'])){
	if(isset($_POST['name']))
	{
		if ($_POST['name']=="") {
			echo '<center class="alert alert-danger">Nhập tên</center>';
		}
		else{
			$name = $_POST['name'];
			$age = $_POST['age'];
			$exper = $_POST['exper'];
			$gradu = $_POST['gradu'];

			if (isset($_POST['Male'])) {
				$sex = $_POST['Male'];
			}
			else 
				$sex = $_POST['Female'];

			if ($age==1 || $age == 4) {
				echo"Không đủ tuổi";
			}

			elseif ($age==3 ) {
				echo "Bạn có quyên quản lý";
			}
			elseif ($age==2 && $gradu==3 ) {
				echo "Bạn có quyên quản lý";
			}
			else{
				echo "Bạn là nhân công";
			}
		}

	}
}
?>