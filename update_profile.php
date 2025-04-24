<?php  
    include("Common/navbar.php");
    include("Common/footer.php");
    require("Common/Connection1.php");
    if (!isset($_SESSION["ID"])){
        header('Location: Homepage.php');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["firstname"];
        $surname = $_POST["lastname"];
        $mail = $_POST["email"];
        if(empty($name)) $name=$first_name;
        if(empty($surname)) $surname=$last_name;
        if(empty($mail)) $mail=$email1;
        $name = mysqli_real_escape_string($conn,test_input($name));
        $surname = mysqli_real_escape_string($conn,test_input($surname));
        $mail = mysqli_real_escape_string($conn,test_input($mail));
    }				
        
        $query = "UPDATE user SET Nome=? , Cognome=? , Mail=? , Password=? WHERE Mail='$mail'";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $surname, $mail, $pass);

        mysqli_stmt_execute($stmt);

        if (mysqli_affected_rows($conn)>0){
            $res=mysqli_stmt_get_result($stmt);
            $_SESSION['ID']=$mail;
            echo "<p>Modifica avvenuta con successo!</p>";
        }

        else{
            echo "<p>C'è stato un problema<br/> Riprova </p>";
        }
        					
?>
