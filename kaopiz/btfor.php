<?php
echo "số chia hết cho 3 từ 200-600 là:";
$tong=0;
for ($i=200; $i <= 600; $i++) { 
	if ($i%3 == 0) {
		$tong += $i;
	}
}
		echo " $tong<br>";
echo "số chia hết cho 7 từ 50-70 là:";
for ($i=50; $i <=100 ; $i++) { 
	if ($i % 7 == 0) {
		echo "$i ,";
	}
}
?>