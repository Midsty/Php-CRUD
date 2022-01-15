
<?php
 
    if(isset($_GET['ID'])){
        $id = $_GET['ID'];
        require_once("../connection.php");
        $sql = "DELETE FROM `verjaardagen` WHERE `verjaardagen`.`ID` = $id";
        if($mysqli->query($sql)){
            echo "Doorsturen";
            header("location: ../../index.php");
        } else {
            echo "Ging iets fout";
            echo $sql;
        };
    }
?>


