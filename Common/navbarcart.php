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
        <li><a href='Log.php'>Login</a></li>   
        <li><a href='Homepage.php#Registrazione'>Registrazione</a></li>
        <li><a href='Homepage.php#Estensioni'>Estensioni</a></li>
        <li><a href ='Cart.php'><i class="fa fa-cart-plus" style = "font-size: 35px; color: whitesmoke"></i></a></li>
    </ul>
    <?php else:?>
    <ul>
        <li><a href='#Estensioni'>Estensioni</a></li>
        <li><a class="submenu" href="#">Il tuo profilo</a>
            <ul>
                <li><a href="Profile.php">Modifica i tuoi dati personali</a></li>
                <li><a href="Pass.php">Modifica Password</a></li>
                <li><a href="Amici.php">I tuoi contatti</a></li>
            </ul>
   		</li>
        <li><a href='Logout.php'>Logout</a></li>
    </ul>    
    <?php endif;?>
    
    </div>
    
</div>