<?php

DEFINE("HOST", "localhost");
DEFINE("USER", "Wouter");
DEFINE("PASSWD", "Titanic007");
DEFINE("DATABASE", "verjaardagen");

    $mysqli = new mysqli(HOST, USER, PASSWD, DATABASE) or die(mysqli_error($mysqli));

?>