<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" type="text/css" href="Progetto.css">
    <title>Grazie</title>
</head>

<?php 
    include("Common/navbar.php");
    include("Common/footer.php");
    if (!isset($_SESSION["ID"])){
        header('Location: Homepage.php');
    }
    unset($_SESSION['cart']);
    unset($_SESSION['tot']);
?>
<body> 
    <img src="svg/thank.svg" alt="Thank" class="images" style="right: 1%; width: 43%"/>
    <img src="svg/thank2.svg" alt="Thank" class="images" style="left: 3%; width: 30%"/>
    <div class='page' style='display:grid'>
        <div class='center'>
            <p>Acquisto avvenuto!<br> Ora potrai utilizzare al meglio le nostre estensioni</p>
        </div>
        <div class='center'>
            <a href = 'Homepage.php'><input type="submit" value="Home del Sito"></a>
        </div>
    </div>
 
</body>
</html>