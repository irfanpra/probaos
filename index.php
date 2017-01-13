<?php
$konekcija = new PDO("mysql:dbname=baza;host=mysql-57-centos7", "korisnik", "sifra"));
$rez = $konekcija->query("SELECT * FROM imena");
foreach($rez as $red){
	echo $red['ime']."<br>";
}
?>

mysql -u korisnik -p sifra < baza/baza.sql