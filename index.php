<!--Hier komt een pagina waarbij de gebruiker de ID's kan zien
en er komen knoopen met het verwijderen en wijzigen van de ID"s -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht van gebruikers</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>


    <?php
        require_once("php/connection.php");
        // pre_r($result);
        ?>

<div class="row justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th>Naam</th>
                <th>GeboorteDatum</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>        
        <?php
        $result = $mysqli->query("SELECT * FROM verjaardagen") or die($mysqli->error);
        while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['naam']; ?></td>
                <td><?= $row['geb']; ?></td>
                <td><a href="php/actions/edit.php?ID=<?= $row['ID']?>"><button>edit</button></a></td>
                <td><a href="php/actions/delete.php?ID=<?= $row['ID']?>"><button>delete</button></a></td>
            </tr>

            
        <?php endwhile ?>
    
    </table>
    </div>
    <br>
    <a href="php/actions/toevoegen.php">
      <button>Gerbuiker Toevoegen</button>
     </a>
    <?php

    pre_r($result->fetch_assoc());
    pre_r($result->fetch_assoc());

    function pre_r( $array ) {
        echo '<pre>';
        print_r($array);
        echo '<pre>';
    }
?>

</body>
</html>