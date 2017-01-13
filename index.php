<?php
$konekcija = new PDO("mysql:dbname=baza;host=localhost", getenv("MYSQL_USERNAME"), getenv("PASSWORD"));
$rez = $konekcija->query("SELECT * FROM imena");
foreach($rez as $red){
	echo $red['ime']."<br>";
}
?>