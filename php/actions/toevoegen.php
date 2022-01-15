<!-- DIt is een pagina waarbij de gebruiker een naam en geboortedatum kan toevoegen. -->

<?php
session_start();

//Het uitrekenen van de leeftijd:
function getleeftijd($gebor) {
    $verjar = new DateTime($gebor);
    $vandaag = new DateTime(date('d.m.y'));
    if($verjar>$vandaag) {
        return 'Je bent nog niet geboren...';
    }
    $ver = $vandaag->vers($verjar);
    return 'Jouw Leeftijd Is : '.$ver->d.' Dagen, '.$ver->m.' Maanden, '.$vers->y.' jaren';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Eindopdracht 2</title>
</head>
<body>

<?php 
                if(isset($_SESSION['status']))
                {
                    echo "<h4>".$_SESSION['status']."<h4/>";
                    unset($_SESSION['status']);
                }
                
                ?>

                        <div class="card mt-5">
                        <div class="card-header">
                            <h1>Vul uw leeftijd in</h1>
                        </div>
                        <div class="card-body">


                        <form action="insert.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Naam</label>
                            <input type="text" name="name" class="form-controler" />
                            <label for="">Achternaam</label>
                            <input type="text" name="achternaam" class="form-controler" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Geboortedatum</label>
                            <input type="date" name="geboortedatum", class="form-control" />
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="save_date" class="btn btn-primary">Sla het op</button>
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(isset($_GET['gebor']) && $_GET['gebor']!=''){?>
        <div class="result-wrapper">
            <?php echo getleeftijd($_GET['gebor']);?>
    </div>
    <?php } ?>
</body>
</html>