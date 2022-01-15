<?php
    require_once("../connection.php");
    $id = $_GET['ID'];
    $sql = "SELECT * FROM verjaardagen WHERE ID=$id";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editprocess.php" method="GET">
        <input type="hidden" name="id" value="<?= $id?>">
        <label for="naam">Naam: </label>
        <input type="text" name="naam" value="<?=  $row['naam']?>">
        <label for="geb">Geboortedatum: </label>
        <input type="date" name="geb" value="<?=  $row['geb']?>">
        <input type="submit" name="Opslaan" value="Opslaan">
    </form>
    <a href="../../index.php"><button>Annuleren</button></a>
</body>
</html>

