<?php

if(isset($email) && !empty($email)){

    if ($a=0){
        $email = $mail2;
        $nome = '';
        $a=1;
    }

    $query2 = "INSERT INTO newsletter VALUES (?)";
    $stmt2 = mysqli_prepare($conn, $query2);
    mysqli_stmt_bind_param($stmt2,'s',$email);
    mysqli_stmt_execute($stmt2);

    if(mysqli_affected_rows($conn) > 0){
    $res=mysqli_stmt_get_result($stmt2);
            
    require("servermail.php");

    $body  = "Ciao " . $first_name . "! <p>";
    $body .= "Ti ringraziamo per esserti iscritt* alla nostra newsletter.<p>";
    $body .= "Ti terremo aggiornato su tutte le news e sconti esclusivi.<p>";
    $body .= "Grazie per il supporto, <br>";
    $body .= "Il team di PlanIt";

    //Recipients
    $mail->setFrom('saw.planit@gmail.com');
    $mail->addAddress($email);               //Name is optional
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Grazie per la registrazione';
    $mail->Body    =  $body;
    $mail->AltBody = 'Grazie per esserti iscritto alla newsletter';

    $mail->send();

    header('Location: Homepage.php');
    }  
    else{
        echo "Si è verificato un errore nell'iscrizione alla newsletter";
    }
}
?>