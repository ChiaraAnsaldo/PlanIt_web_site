<?php 
    
if(isset($_SESSION['cart'])){
    $prodotti=$_SESSION['cart'];
    $subtotal = $_SESSION['tot'];
}
    
else{
    $prodotti = [0,0,0,0];
    $_SESSION['cart']=$prodotti;
    $subtotal = 0;
    $_SESSION['tot']=$subtotal; 
}

if ($prodotti && isset($_GET['id']) && $_GET['action']=='add'){
    
    $id = $_GET['id'];

    $query = "SELECT * FROM products WHERE id_prodotto = ?";
        
    $stmt = mysqli_prepare($conn, $query);

    for($i=0; $i<4; $i++){

        mysqli_stmt_bind_param($stmt, 'i', $id);

        mysqli_stmt_execute($stmt);

        $res = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($res);  
        
        if($prodotti[$id-1]==0){
            $prodotti[$id-1]=1;
            $subtotal += $row['Prezzo'];
        }   
    }
$_SESSION['cart']=$prodotti;
$_SESSION['tot']=$subtotal;

}

function mostra($conn, $id) : array{

    $query = "SELECT * FROM products WHERE id_prodotto = ?";
        
    $stmt = mysqli_prepare($conn, $query);
    
    mysqli_stmt_bind_param($stmt, 'i', $id);

    mysqli_stmt_execute($stmt);

    $res = mysqli_stmt_get_result($stmt); 

    return mysqli_fetch_assoc($res);
}
?>