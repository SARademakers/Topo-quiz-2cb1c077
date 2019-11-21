<?php
$goed = 0;
$fout = 0;
$quiz = array("Japan" => "Tokyo" ,
				"Mexico" => "Mexico City" ,
				"USA" => "Washington D.C." ,
				"India" => "New Delhi" ,
				"Zuid-Korea" => "Seoul" ,
				"China" => "Peking" ,
				"Nigeria" => "Abuja" ,
				"Argentina" => "Buenos Aires" ,
				"Egypt" => "Cairo" ,
				"UK" => "London");
foreach ($quiz as $key => $value) {
	echo("wat is de hoofdstad van " . $key . PHP_EOL);
	$antwoord = readline();
	if ($antwoord == $value) {
		echo ("Correct" . PHP_EOL);
		$goed += 1;
	}
	else {
		echo ("Incorrect" . PHP_EOL);
		$fout += 1;
	}
}
print("Je hebt " . $goed . " goed" . PHP_EOL);
print("Je hebt " . $fout . " fout" . PHP_EOL);
?>