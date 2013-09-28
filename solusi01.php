<?php

// If we list all the natural numbers below 10 that are multiples of 3 or 5, we
// get 3, 5, 6 and 9. The sum of these multiples is 23.  Find the sum of all
// the multiples of 3 or 5 below 1000.

// Jika kita deretkan semua bilangan asli dibawah 10 yang merupakan kelipatan 3 atau 5 yaitu 3, 5, 6 dan 9,
// maka kita akan memperoleh jumlah dari deret bilangan itu sebanyak 23. Hitunglah jumlah kelipatan 3 atau 5 dibawah 1000
# hasilnya = 233168

function solusi01(){
	$sum = 0;
	for($i=1; $i < 1000; $i++){
		if ($i%3 == 0 || $i%5 == 0) {
			$sum += $i;
			echo "$i untuk $sum\n";
		}
	}
	echo "hasilnya $sum";
}

solusi01() 
?>