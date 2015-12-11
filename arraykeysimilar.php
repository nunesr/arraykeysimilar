<?php
//Função similar array_keys
$array = array(
	'time1' => 'Corinthians',
	'time2' => 'Palmeiras',
	'time3' => 'Santos',
	'Internacional',
	'Bahia',
	'Sport');

while ($times = current($array)) {
         echo key($array).'<br>';
         next($array);
}             
?>