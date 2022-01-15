
<?php
 
 if(isset($_GET['Opslaan'])){
     $id = $_GET['id'];
     $naam =  $_GET['naam'];
     $geb =  $_GET['geb'];

  
     require_once("../connection.php");
    //  $sql = "UPDATE `verjaardagen` SET `naam` = '$naam', `geb` = '$geb' WHERE `verjaardagen`.`ID` = " . $idtje . ";";
     $sql = "UPDATE `verjaardagen` SET `naam` = '$naam', `geb` = '$geb' WHERE `verjaardagen`.`ID` = $id;";
     if($mysqli->query($sql)){
         echo "Doorsturen";
         header("location: ../../index.php");
     } else {
         echo "Ging iets fout";
         echo $sql;
     };
 }
?>


