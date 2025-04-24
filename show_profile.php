<!DOCTYPE html>
<html lang="it">
<head>
    <title>Profilo</title>
    <link rel="stylesheet" type="text/css" href="Progetto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
   
<body>
    <?php
        include("Common/navbar.php");
        include("Common/footer.php");
        require("Common/Connection1.php");
        if (!isset($_SESSION["ID"])){
            header('Location: Homepage.php');
        }
    ?>

    <div class='page'  style ='flex-direction:column;'>
    <img src="svg/update5.svg" alt="Update" class="images" style="left: 2%; width:22%"/>
        <div class='center'>
        <img src="svg/update3.svg" alt="Update" class="images" style="width:1000px;" />
        <div><p class='scritta'>Modifica i tuoi dati</p></div>
            <form id='Modifica' action = 'update_profile.php' method='POST'> 
                <?php
                echo "<em class='fa fa-user'></em>";
                echo "<input type='text' id='firstname' placeholder='$first_name'><br>";

                echo "<em class='fa fa-user'></em>";
                echo"<input type='text' id='lastname' placeholder='$last_name'><br>";

                echo"<em class='fa fa-envelope'></em>";
                echo"<input type='email' id='email' placeholder='$email1'><br>"
                ?>
            <input type='submit' value='Modifica' name='submit'>

            </form>
        </div>
    </div>
</body>
</html>