<?php
$konekcija = new PDO("mysql:dbname=baza;host=localhost", "root", "");
$rez = $konekcija->query("SELECT * FROM imena");
foreach($rez as $red){
	echo $red['ime']."<br>";
}
?>