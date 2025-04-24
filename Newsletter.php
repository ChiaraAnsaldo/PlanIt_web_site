<!DOCTYPE html>
<html lang="it">
<head>
    <title>Newsletter</title>
    <link rel="stylesheet" type="text/css" href="Progetto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class='center' style='padding-top: 110px'>
    <p class="scritta">Iscriviti alla newsletter per <br>ricevere in anteprima le novità in arrivo</p>
    
    <form id="newsletter" method="POST">

        <em class='fa fa-envelope' ></em>
        <input type='email' id='mail' name='mail' placeholder='E-mail'><br>

        <input type ="submit" name="news" value="Iscrivimi">
    </form>
</div>
<?php	

	include("Common/navbar.php");
	include("Common/footer.php");
	
	require("Common/Connection1.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = test_input($_POST["mail"]);
        $a=0;
    }

    require("Common/mailer.php");

?>

</body>
</html>

    