<!DOCTYPE html>
<html lang="it">
<head>
<title>Pagamento</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="Progetto.css">
<script type="text/javascript" src="livevalidation_standalone.js"></script>
</head>


<?php 
    include("Common/navbar.php");
    include("Common/footer.php");
?>

<img src="svg/compra.svg" alt="Shopping" class="images" style="left: -8%; top:35%; width:30%"/>
<img src="svg/pay.svg" alt="Shopping" class="images" style="right: 2%; top:35%; width:30%"/>

<div class = "cart" >
    <div class = "cart1">
    <div class = "container">
        <form action = "grazie.php" method = "POST" name = "myform">
        
        <h2>Indirizzo di fatturazione </h2>
        <label for = "nome"><em class="fa fa-user"></em> Nome </label>
        <input type= "text" id="nome" name="nome" placeholder="es.Mario">
        <br></br>
        <label for = "cognome"><em class="fa fa-user"></em> Cognome</label>
        <input type = "text" id = "cognome" name = "cognome" placeholder ="es.Rossi"> 
        <br></br>
        <label for = "email"><em class="fa fa-envelope"></em> Email</label>
        <input type = "text" id="email" name="email" placeholder="es.MarioRossi@example.com">
        <br></br>
        <label for = "indirizzo"><em class="fa fa-address-card-o"></em> Indirizzo</label>
        <input type = "text" id="indirizzo" name="indirizzo" placeholder="es.Via XX Settembre">
        <br></br>
        <label for = "citta"><em class="fa fa-institution"></em> Città</label>
        <input type = "text" id="citta" name="citta" placeholder="es.Genova">
        <br></br>
        <label for="provincia"> Provincia</label>
        <select id="provincia" name="provincia" class= "select">
        <option value="ag">Agrigento</option>
        <option value="al">Alessandria</option>
        <option value="an">Ancona</option>
        <option value="ao">Aosta</option>
        <option value="ar">Arezzo</option>
        <option value="ap">Ascoli Piceno</option>
        <option value="at">Asti</option>
        <option value="av">Avellino</option>
        <option value="ba">Bari</option>
        <option value="bt">Barletta-Andria-Trani</option>
        <option value="bl">Belluno</option>
        <option value="bn">Benevento</option>
        <option value="bg">Bergamo</option>
        <option value="bi">Biella</option>
        <option value="bo">Bologna</option>
        <option value="bz">Bolzano</option>
        <option value="bs">Brescia</option>
        <option value="br">Brindisi</option>
        <option value="ca">Cagliari</option>
        <option value="cl">Caltanissetta</option>
        <option value="cb">Campobasso</option>
        <option value="ci">Carbonia-iglesias</option>
        <option value="ce">Caserta</option>
        <option value="ct">Catania</option>
        <option value="cz">Catanzaro</option>
        <option value="ch">Chieti</option>
        <option value="co">Como</option>
        <option value="cs">Cosenza</option>
        <option value="cr">Cremona</option>
        <option value="kr">Crotone</option>
        <option value="cn">Cuneo</option>
        <option value="en">Enna</option>
        <option value="fm">Fermo</option>
        <option value="fe">Ferrara</option>
        <option value="fi">Firenze</option>
        <option value="fg">Foggia</option>
        <option value="fc">Forl&igrave;-Cesena</option>
        <option value="fr">Frosinone</option>
        <option value="ge">Genova</option>
        <option value="go">Gorizia</option>
        <option value="gr">Grosseto</option>
        <option value="im">Imperia</option>
        <option value="is">Isernia</option>
        <option value="sp">La spezia</option>
        <option value="aq">L'aquila</option>
        <option value="lt">Latina</option>
        <option value="le">Lecce</option>
        <option value="lc">Lecco</option>
        <option value="li">Livorno</option>
        <option value="lo">Lodi</option>
        <option value="lu">Lucca</option>
        <option value="mc">Macerata</option>
        <option value="mn">Mantova</option>
        <option value="ms">Massa-Carrara</option>
        <option value="mt">Matera</option>
        <option value="vs">Medio Campidano</option>
        <option value="me">Messina</option>
        <option value="mi">Milano</option>
        <option value="mo">Modena</option>
        <option value="mb">Monza e della Brianza</option>
        <option value="na">Napoli</option>
        <option value="no">Novara</option>
        <option value="nu">Nuoro</option>
        <option value="og">Ogliastra</option>
        <option value="ot">Olbia-Tempio</option>
        <option value="or">Oristano</option>
        <option value="pd">Padova</option>
        <option value="pa">Palermo</option>
        <option value="pr">Parma</option>
        <option value="pv">Pavia</option>
        <option value="pg">Perugia</option>
        <option value="pu">Pesaro e Urbino</option>
        <option value="pe">Pescara</option>
        <option value="pc">Piacenza</option>
        <option value="pi">Pisa</option>
        <option value="pt">Pistoia</option>
        <option value="pn">Pordenone</option>
        <option value="pz">Potenza</option>
        <option value="po">Prato</option>
        <option value="rg">Ragusa</option>
        <option value="ra">Ravenna</option>
        <option value="rc">Reggio di Calabria</option>
        <option value="re">Reggio nell'Emilia</option>
        <option value="ri">Rieti</option>
        <option value="rn">Rimini</option>
        <option value="rm">Roma</option>
        <option value="ro">Rovigo</option>
        <option value="sa">Salerno</option>
        <option value="ss">Sassari</option>
        <option value="sv">Savona</option>
        <option value="si">Siena</option>
        <option value="sr">Siracusa</option>
        <option value="so">Sondrio</option>
        <option value="ta">Taranto</option>
        <option value="te">Teramo</option>
        <option value="tr">Terni</option>
        <option value="to">Torino</option>
        <option value="tp">Trapani</option>
        <option value="tn">Trento</option>
        <option value="tv">Treviso</option>
        <option value="ts">Trieste</option>
        <option value="ud">Udine</option>
        <option value="va">Varese</option>
        <option value="ve">Venezia</option>
        <option value="vb">Verbano-Cusio-Ossola</option>
        <option value="vc">Vercelli</option>
        <option value="vr">Verona</option>
        <option value="vv">Vibo valentia</option>
        <option value="vi">Vicenza</option>
        <option value="vt">Viterbo</option>
        </select>
        <br></br>
        <label for="cap"> CAP</label>
        <input type="text" id="cap" name="cap" placeholder="es.16121">
    </div>                    
                        
    <div class = "container">
        <h2> Metodo di Pagamento</h2>
        <label for = "nome"> Carte accettate:</label>
            <div class="icon-container">
                <em class="fa fa-cc-visa fa-2x" style="color:navy;"></em>
                <em class="fa fa-cc-amex fa-2x" style="color:green;"></em>
                <em class="fa fa-cc-mastercard fa-2x" style="color:red;"></em>
                <em class="fa fa-cc-paypal fa-2x" ></em>
            </div>
                   
        <label for="nomecarta">Nome Titolare Carta</label>
        <input type="text" id="nomecarta" name="nomecarta" placeholder="es.Mario Rossi">
        <br></br>
        <label for="numerocarta">Numero Carta</label>  
        <input type="text" id="numerocarta" name="numerocarta" placeholder="es.0000-5555-3333-9999">
        <br></br>

        <label for="datascadenza">Data di Scadenza</label>
            <select name="Mese di scadenza" class ="select">
                <option value="gennaio">Gennaio</option>
                <option value="febbraio">Febbraio</option>
                <option value="marzo">Marzo</option>
                <option value="aprile">Aprile</option>
                <option value="maggio">Maggio</option>
                <option value="giugno">Giugno</option>
                <option value="luglio">Luglio</option>
                <option value="agosto">Agosto</option>
                <option value="settembre">Settembre</option>
                <option value="ottobre">Ottobre</option>
                <option value="novembre">Novembre</option>
                <option value="dicembre">Dicembre</option>
            </select>
                    
            
            <select name="Anno di scadenza" class= "select">
                <option value="2023">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
            </select>
            <br></br>
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="es.352">
            <br>
            <input type="submit" value="Prosegui all'acquisto" class="btn"></a>
        </div> 
        <script type="text/javascript" src="pagamento.js"></script>     
        </form>
    </div>

</div>
</body>
</html>