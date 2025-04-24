<?php

    $conn = mysqli_connect("localhost", "chiara", "chia", "saw21");

	if (mysqli_connect_errno()) {
		die ('Connessione Fallita ' .  mysqli_connect_error());
	}
		
	function test_input($data) {
		$data = trim($data); //Questa funzione serve ad eliminare gli spazi vuoti o dei caratteri all'inizio e alla fine di una stringa
		$data = stripslashes($data); //Questa funzione serve per rimuovere gli slash aggiunti
		$data = htmlspecialchars($data); //Questa funzione serve per convertire i caratteri speciali nelle entità HTML corrispondenti
	return $data;
	}

	if(isset($_SESSION['ID'])){
		$email1 = $_SESSION['ID'];
		$query="SELECT * FROM user WHERE Mail=?";

		$stmt = mysqli_prepare($conn, $query);
		mysqli_stmt_bind_param($stmt, 's', $email1);
	
		mysqli_stmt_execute($stmt);
	
		$res = mysqli_stmt_get_result($stmt);
		$row = mysqli_fetch_array($res);

		$last_name=$row['Cognome'];
		$first_name=$row['Nome'];
	}
?>
