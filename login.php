<!DOCTYPE html>
<html lang="it" >
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Progetto.css">
    <script type="text/javascript" src="livevalidation_standalone.js"></script>
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
    <div class='page1' >
    <img src="svg/login.svg" alt="Login" class="images" style="right:0; width:65%;"/>
    <img src="svg/welcome.svg" alt="Login" class="images" style="left:0; top:13%; width:33%;"/>

      <div class='center'>
      <form id='login' method='POST'> 
        <p class='scritta'>Fai il login per controllare <br>i tuoi impegni</p>

        <em class='fa fa-envelope' ></em>
        <input type='text' id='email' name='email' placeholder='E-mail'><br>

        <em class='fa fa-unlock-alt'></em>
        <input type='password' id='pass' name='pass' placeholder='Password'><br>

        <a href="recupero.php" style="color: rgb(121,167, 198);margin-left:96px;font-family:Courgette;font-size:17px">Password Dimenticata?</a>
        <br>

        <script type="text/javascript" src="login.js"></script>

        <input type='submit' name='submit' value='Login'>
      </form>
      </div>

      <?php
  
        if(isset($_POST['submit'])){
          unset($_POST['submit']);

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = test_input($_POST["email"]);
            $password = test_input($_POST["pass"]);
          }

          if (isset($email) && isset($password)){

            $query = "SELECT * FROM user WHERE Mail=?";

            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 's', $email);

            mysqli_stmt_execute($stmt);

            $res = mysqli_stmt_get_result($stmt);

            $row = mysqli_fetch_array($res);

            if (mysqli_affected_rows($conn)>0){
              $hash = $row["Password"];
              
              if (password_verify($password, $hash)==TRUE){
                $_SESSION["ID"] = $email;
                header('Location: Homepage.php');
              }
            }
            else
              echo"<div class=center><p align=center>E-mail o Password Errata <br/> Riprova </p></div>";
          }
        }
      ?>

      <div class='center'>
        <p class='center'>Non sei ancora registrato?</p>
        <a class='a1' href='registration.php'>Vai alla registrazione</a>
      </div>

    </div>

</body>
</html>