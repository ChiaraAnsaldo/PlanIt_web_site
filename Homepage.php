<!DOCTYPE html>
<html lang="it">
<head>
    <title>PlanIT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="Progetto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
   
<body>
    <?php
        include("Common/navbar.php");
        include("Common/footer.php");
    ?>

    
    <div class="mydiv2">

        <div class="mydiv1">
            <p class="scritta">L'agenda che permette <br> di sincronizzarsi <br>con i propri amici</p>
            <img src="svg/board.svg" alt="Plan con gli amici" height="400"/>
        </div>
        
        <div class = "mydiv1">
            <img src="svg/Organizza.svg" alt="Organizza online" height="370" />
            <p class="scritta">Con un semplice click <br> si avrà una pianificazione <br> perfetta degli impegni</p>
        </div>

        <div class = "mydiv1">
            <p class="scritta">Inoltre è la prima <br> agenda che coordina<br>sia il proprio tempo che <br>i propri spazi</p>
            <img src="svg/list.svg" alt="To-Do List" height="370" />
        </div>

        <fieldset class="descrizione">
            <legend><p class="scritta">About Us</p></legend>

            <p class="about">
                    PlanIt vuole offrire la possibilità di sincronizzare i propri impegni con quelli 
                degli amici o anche colleghi. Inizialmente era stata pensata principalmente per migliorare 
                la convivenza tra coinquilini, dato che c'è la possibilità di segnare un possibile evento
                e in questo modo avvisare anche i diretti interessati.<br><br>
                    Ci si potrebbe però chiedere che cosa abbia di diverso dalle altre agende che permettono ad esempio 
                già di condividere eventi con determinate persone...<br><br>
                    PlanIt è stata ideata pensando a uno sviluppo futuro nel campo IoT. Infatti quello che si vuole 
                raggiungere è un connubio tra organizzazione del tempo e dello spazio.<br><br>
                    Questo sarebbe permesso, ad esempio, tramite l'acquisti dell'upgrade "Casa" che oltre ad attivare 
                le funzioni non presenti nella versione base (Prenotazione di uno spazio, turni cucina, etc) può spedire, se 
                richiesto dall'utente, un set base IoT con una serratura intelligente che garantisce la propria privacy
            </p>
            
        </fieldset>  

    </div>

    <a id="Estensioni" style="padding-top:25px;"></a>
    <div class="page" >
        <div class="table">
            <div class="tab1"  >
                <p class="scritta">Upgrade</p>
            </div>
            <div class="tab" >
                <p class="sottotitolo">Casa</p>
                <p>Puoi gestire gli spazi <br> comuni della casa <br>con i tuoi coinquilini</p>
                <a class=a1 href="cart.php?action=add&id=1" >Aggiungi al carrello</a>
                <a class=a1 href="cart.php?action=add&id=4" >Aggiungi set IoT al carrello</a>
            </div>
            <div class="tab" >
                <p class="sottotitolo">Free Time</p>
                <p>Puoi gestire il tuo tempo libero in <br> casa o meno scegliendo tra <br> le proposte offerte</p>
                <a class=a1 href="cart.php?action=add&id=2" >Aggiungi al carrello</a>
            </div>
            <div class="tab" >
                <p class="sottotitolo">Food</p>
                <p>Puoi gestire i tempi <br> della preparazione <br> del pranzo o della cena</p>
                <a class=a1 href="cart.php?action=add&id=3" >Aggiungi al carrello</a>
            </div>
        </div>
    </div>
    
    <div class="page">
        <div class="center">
            <p class="scritta">Presto negli store<br>Potrai avere tutto <br> a portata di mano! </p>
            <a href = "https://www.apple.com/it/app-store/"><img src="svg/appstore.png" alt="Presto negli store" class=store /></a>
            <a href = "https://play.google.com/store?hl=it&gl=US"><img src="svg/googleplay.png" alt="Presto negli store" class=store /></a>
        </div>
    </div>

</body>
</html>