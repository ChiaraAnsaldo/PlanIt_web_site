<?php 
    
    include("Common/Connection1.php");

    $email = test_input($_POST["email"]);

    $query = "SELECT * FROM user WHERE Mail=?";

    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, 's', $email);

    mysqli_stmt_execute($stmt);

    $res = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($res);

    if (mysqli_affected_rows($conn)==1){
        echo "yes";
    }
    else
        echo "no";

?>