<div id="navbar" >
    
    <div>
    <a href='Homepage.php'><p class="logo">Plan It!</p></a>
    </div>

    <div>
    <?php          
        session_start();
    ?>
        
    <?php if (!isset($_SESSION["ID"])):?>
    <ul>   
        <li><a href='Homepage.php#Estensioni'>Upgrade</a></li>
        <li><a href='login.php'>Login</a></li>
        <li><a href='registration.php'>Registrazione</a></li>
    </ul>
    <?php else:?>
    <ul>
        <li><a href='Homepage.php#Estensioni'>Upgrade</a></li>
        <li><a class="submenu" href="#">Il tuo profilo</a>
            <ul>
                <li><a href="show_profile.php">Modifica i tuoi dati personali</a></li>
                <li><a href="update_password.php">Modifica Password</a></li>
                <li><a href="amici.php">Aggiungi ai tuoi contatti</a></li>
            </ul>
   		</li>
        <li><a href='logout.php'>Logout</a></li>
        <li><a href='cart.php?action=cart'><i class='fa fa-shopping-cart'></i></a></li>
    </ul>    
    <?php endif;?>
    
    </div>
    
</div>