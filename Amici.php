<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "Progetto.css">
    <script type="text/javascript" src="livevalidation_standalone.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Aggiungi Amico</title>
</head>
<body>

<?php
    include("Common/navbar.php");
    include("Common/Connection1.php");
    include("Common/footer.php");
    if (!isset($_SESSION["ID"])){
        header('Location: Homepage.php');
    }
?>

<div class=page1>
    <div class="mydiv1">
        <p class = "scritta" style = "font-size:35px;">Inizia subito a cercare i tuoi amici per condividere con loro le tue giornate</p>
    </div>
   <div class = "center">
   <img src="svg/friends.svg" alt="Connettiti con gli amici" class="images" style="width:800px;" />
   <form name="ricerca" method="POST">
   <fieldset>
        <legend><p>Ricerca secondo</p></legend>
        <div class ="mydiv1">
            <label> <input type="radio" id="email" name="scelta" value="email" checked="checked" /> E-mail </label>
            <label> <input type="radio" id="id" name="scelta" value="id" /> Nome o Cognome </label>
        </div>
        <br>
        <div>
            <input type="search" autocomplete="on" placeholder="Inserisci i dati" name="dato" id="dato" required maxlength="50">
        </div>    
        <input type="submit" name="search" value="Ricerca">
    </fieldset>
    </form>
   

   <?php
    if(isset($_POST["search"])){
    
        $scelta = $_POST["scelta"];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if($scelta == "email"){
                $email = mysqli_real_escape_string($conn, $_POST["dato"]);
            }

            else{
                $id = mysqli_real_escape_string($conn, $_POST["dato"]);
            }

        }

        if (isset($email) || isset($id)){

            if($scelta == "email"){

                $query1 = "SELECT * FROM user WHERE Mail LIKE ?";
                $stmt1 = mysqli_prepare($conn, $query1);
                
                mysqli_stmt_bind_param($stmt1, 's', $email);

                mysqli_stmt_execute($stmt1);

                $res = mysqli_stmt_get_result($stmt1);
        
            }
            else{

                $query2 = "SELECT * FROM user WHERE MATCH (Nome, Cognome) AGAINST (?) ORDER BY Cognome ASC";
                $stmt2 = mysqli_prepare($conn, $query2);

                mysqli_stmt_bind_param($stmt2, 's', $id);

                mysqli_stmt_execute($stmt2);

                $res = mysqli_stmt_get_result($stmt2);    
            }
        }
    }
    ?>
    <?php if(mysqli_num_rows($res)>0):?>
        
        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>E-mail</th>
                <th>Aggiungi Amico</th>
            </tr>
                             
        <?php while($row=mysqli_fetch_assoc($res)):?>
            <?php
                $n=test_input($row['Nome']);
                $c=test_input($row['Cognome']);
                $nick=test_input($row['Mail']);
            ?>
                <tr>
                    <td><?php echo $n; ?></td>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $nick; ?></td>
                    <td><input type='checkbox' id='<?php $nick?>' name='<?php $nick?>' value='add'/></td>
                </tr>
            
        <?php endwhile;?>
    
        </table>
            <form method='POST' action='contatti.php'>
                <input type='submit' value='Aggiungi amici selezionati' name='aggiungi'>
            </form> 
            
    <?php else: ?>
        <p text-align=center>Non sono presenti persone con questi parametri</p>
    <?php endif; ?>
    
    </div>
</div>
</body>
</html>