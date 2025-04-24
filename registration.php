<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link rel="stylesheet" type="text/css" href="Progetto.css">
	<script type="text/javascript" src="livevalidation_standalone.js"></script>
	<script src='utility.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
   
<body>

<?php
	include("Common/navbar.php");
	include("Common/footer.php");
	require("Common/Connection1.php");
	if (isset($_SESSION["ID"])){
		header('Location: Homepage.php');
	}
?>

<div class=page1 >
	<div class='center'>
	<img src="svg/registration.svg" alt="Registrati" class="images" style="right:1%; width:40%;"/>
	<img src="svg/register.svg" alt="Registrati" class="images" style="left:1%; top:13%; width:35%;"/>
	<form name='registrazione' method='POST' name='Utente'> 
	
		<p class='scritta'>Registrati per connetterti  <br> con i tuoi compagni</p>

		<em class='fa fa-user' ></em>
		<input type='text' id='firstname' name='firstname' placeholder='Nome'><br>

		<em class='fa fa-user'></em>
		<input type='text' id='lastname' name='lastname' placeholder='Cognome'><br>

		<em class='fa fa-envelope'></em>
		<input type='text' id='email' name='email' placeholder='E-mail' onblur="checkemail('mail.php')"><br>
		<span id=error></span>
		
		<em class='fa fa-unlock-alt'></em>
		<input type='password' id='pass' name='pass' placeholder='Password'><br>

		<em class='fa fa-unlock-alt'></em>
		<input type='password' id='confirm' name='confirm' placeholder='Conferma password'><br> <br>

		<input type='checkbox' id='news' name='newsletter' value='s'/> 
		<label for= 'news' class="l"> Desidero iscrivermi al servizio di newsletter </label><br>

		<script type="text/javascript" src="form.js"></script>

	<input type='submit' value='Registrati' name='submit'>
	</form>
	</div>

	<div class='center'>
		<p >Sei già registrato?</p> 
		<a class='a1' href='login.php'>Vai al Login</a>
	</div>
</div>
<div class='center'>

<?php
if(isset($_POST['submit'])){
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") { 
		$first_name = mysqli_real_escape_string($conn,test_input($_POST["firstname"]));
		$last_name= mysqli_real_escape_string($conn,test_input($_POST["lastname"]));
	    $email = mysqli_real_escape_string($conn,test_input($_POST["email"]));
		$password = test_input($_POST["pass"]);
		$conferma = test_input($_POST["confirm"]);
	}
		
	if (isset($first_name) && isset($last_name) && isset($email) && isset($password) && isset($conferma) && $password==$conferma){
	
		$hash_pass = password_hash($password, PASSWORD_DEFAULT); 

        $query = "INSERT INTO user VALUES (?,?,?,?)";

		$stmt = mysqli_prepare($conn, $query);
		mysqli_stmt_bind_param($stmt, 'ssss', $first_name, $last_name, $email, $hash_pass);

		mysqli_stmt_execute($stmt);

		if (mysqli_affected_rows($conn)>0){

			if (isset($_POST["newsletter"])){
				include("Common/mailer.php");
			}
			
			$res=mysqli_stmt_get_result($stmt);
			header('Location: Homepage.php');
		}	
	}					

	else {
		echo "<p>ERRORE! <br/> Riprova</p>";
	}
	unset($_POST['submit']);
}	
?>


</div>

</body>
</html>