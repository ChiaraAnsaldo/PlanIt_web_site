<!DOCTYPE html>
<html lang="it">
<head>
<title>Carrello</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="Progetto.css">
<script type="text/javascript" src="livevalidation_standalone.js"></script>
<script type="text/javascript" src="jquery-3.6.0.js"></script>
</head>

<body>

<?php 
    include("Common/navbar.php");
    include("Common/footer.php");
    require("Common/Connection1.php");
    include("carrello.php");

    if($_GET['action']=='remove' && $prodotti[$_GET['id']-1] == 1){
        $prodotti[$_GET['id']-1] = 0;
        $_SESSION['cart'] = $prodotti;
        $row2 = mostra($conn, $_GET['id']);
        $subtotal -= $row2['Prezzo'];
        $_SESSION['tot'] = $subtotal;
    }
    if (!isset($_SESSION["ID"])){
        header('Location: login.php');
    }
?>

<div class = "cart" >

    <table> 
            <tr> 
                <th>Nome</th> 
                <th>Descrizione</th> 
                <th>Prezzo</th> 
            </tr> 
        
        <?php if(($prodotti == [0,0,0,0]) || !isset($_GET['action'])) :?>
            <tr>
                <td colspan="3" style="text-align:center;">Nessun Upgrade presente</td>
                <img src="svg/empty.svg" alt="Carrello vuoto" class="images" style="right: 20%; height:450px"/>
            </tr>

        <?php else: ?>
            <img src="svg/add.svg" alt="Carrello" class="images" style="right: 1%; width:35%;"/>
            <img src="svg/cart.svg" alt="Carrello" class="images" style="left: 5%; width:25%;"/>

            <?php for($i=0; $i<4; $i++):?>
                <?php $row1 = mostra($conn, $i+1); ?>
                <?php if($prodotti[$i] == 1) :?>
                <tr>
                    <td>
                        <?php echo $row1['Nome'];?>
                        <br>
                        <a href="cart.php?action=remove&id=<?php echo $row1['id_prodotto'];?>" class="remove">Rimuovi</a>
                    </td>
                    <td ><?php echo $row1['Descrizione'];?></td>
                    <td class="price"><?php echo $row1['Prezzo'];?>&euro;</td>
                </tr>   
                <?php endif; ?>
            <?php endfor; ?>
            <tr>
                <td colspan="3" style="text-align:center;" class="price">Totale: <?php echo $subtotal?>.00&euro;</td>
            </tr>
        </table>
            <form action="pagamento.php">
                <div class="buttons">
                    <input type="submit" value="Procedi al Pagamento" name="compra">
                </div>
            </form>  
        <?php endif; ?>

   

         

</div>
</body>
</html>