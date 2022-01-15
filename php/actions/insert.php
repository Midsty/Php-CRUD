<!-- Dit is de php code die nieuwe info van gebruikers naar de database stuurt -->
<?php 
//De Conectie:
session_start();
$conn = mysqli_connect('localhost', 'Wouter', 'Titanic007', 'verjaardagen');

//Waar het opgeslagen moet worden
if(isset($_POST['save_date']))
{   //Jaar-maand-dag converteren
    $naam = $_POST['name'];
    $geb = date('y-m-d', strtotime($_POST['geboortedatum']));
    //In welke collum ze moeten opgeslagen worden
    $query = "INSERT INTO naam (naam,geb) VALUES ('$naam','$geb')";
    $query_run = mysqli_query($conn, $query);
    echo $naam;
    
    //Laat weten of de gegevens goed zijn verstuurd met een bericht
    if($query_run)
    {
      $_SESSION['status'] = "Gegevens zijn naar de database gestuurd!";
        header("Location: index.php");
    }
    else 
    {
        $_SESSION['status'] = "Mislukt :(";
        header("Location: index.php");
    }
}


// INSERT INTO `verjaardagen` (`ID`, `naam`, `geb`) VALUES (NULL, 'iemand', '2021-12-27');