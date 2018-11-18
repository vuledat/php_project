<?php
(int)$i=1;
(int)$tong=0;
while ( $i<=100) {
	$tong +=$i;
	$i++;
}
echo "Tổng số nguyên từ 1-100: $tong<br>";
(int)$a=20;
echo "Các số chia hết cho 3 từ 20-50 là: ";
while ( $a<=50) {
	if ($a%3==0) {
		echo "$a ,";
	}
	$a++;
}

?>