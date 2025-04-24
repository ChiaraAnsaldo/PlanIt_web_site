<!DOCTYPE html>
<html lang="it">
<head>
    <title>Aggiorna Password</title>
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

        $mail=$_SESSION['ID'];
        $query="SELECT * FROM user WHERE Mail=?";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 's', $mail);
      
        mysqli_stmt_execute($stmt);
      
        $res = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($res);

        $pass=$row['Password'];
    ?>

    <div class='page'  style ='flex-direction:column;'>
    <img src="svg/update4.svg" alt="Update" class="images" style="right: 3%; width:25%; top:25%;"/>
        <div class='center'>
        <img src="svg/update2.svg" alt="Update" class="images" style="width:1300px;"/>
            <form id='Modifica' method='POST' name='Utente' autocomplete="off"> 
                <p class='scritta'>Modifica la password</p>
                <em class='fa fa-unlock-alt' ></em>
                <input type='password' id='pass' name='pass' placeholder='Vecchia Password'><br>

                <em class='fa fa-unlock-alt'></em>
                <input type='password' id='password' name='password' placeholder='Nuova Password'><br>

                <em class='fa fa-unlock-alt'></em>
                <input type='password' id='confirm' name='confirm' placeholder='Conferma Password'><br>
    
            <input type='submit' value='Modifica' name='Modifica'>

            </form>
        </div>
   

    <?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pass1 = mysqli_real_escape_string($conn,test_input($_POST["pass"]));
		$password = mysqli_real_escape_string($conn,test_input($_POST["password"]));
	    $confirm = mysqli_real_escape_string($conn,test_input($_POST["confirm"]));
	}				
		
	if (isset($_POST['Modifica'])){
        unset($_POST['Modifica']);

        $query = "UPDATE user SET Password=? WHERE Mail='$mail'";

		$stmt = mysqli_prepare($conn, $query);
		mysqli_stmt_bind_param($stmt, 's', $password);

        if (password_verify($pass1, $pass)==TRUE){
            if($password=$confirm){
                mysqli_stmt_execute($stmt);
            }
            else{
                echo "Le password non corrispondono";
            }
        }
        else
            echo "Password errata";
		

		if (mysqli_affected_rows($conn)>0){
			$res=mysqli_stmt_get_result($stmt);
            echo "<p>Modifica avvenuta con successo!</p>";
		}

		else{
			echo "<p align=center>C'è stato un problema<br/> Riprova </p>";
		}		
	}					
    ?>
</div>
</body>
</html>