<?php
$db= mysqli_connect("localhost","root","","rangerover");
if(!$db)
{
    echo "Došlo je do greške prilikom konekcije na bazu podataka".mysqli_connect_error();
    die();
}

//query for load models, glitch on navbar-bottom for services
mysqli_query($db, "SET NAMES UTF8");
$res=mysqli_query($db, "SELECT * FROM products WHERE active=1");
$all=mysqli_fetch_all($res, MYSQLI_ASSOC);
echo JSON_encode($all, 256);

?>