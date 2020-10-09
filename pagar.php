<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera_ingles_usuario.php';
?>
<?php 
if($_POST){
//Ya esta guardando toda la informacion del producto o los productos que se estan comprando
    $total=0;
    $SID=session_id();
    $Correo = $_POST['email'];

    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }
    $sentencia=$pdo->prepare("INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
    VALUES (NULL, ':ClaveTransaccion', '', NOW(), ':Correo', ':Total', 'pendiente');");

    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Correo",$Correo);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();


    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $sentencia=$pdo->prepare("INSERT INTO 
        `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
        VALUES (NULL, ':IDVENTA', ':IDPRODUCTO', ':PRECIOUNITARIO', ':CANTIDAD', '0');");
        $sentencia->bindParam(":IDVENTA",$idVenta);
        $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
        $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
        $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
        $sentencia->execute();
    }
  
} // Ya cuando se ha digitado el correo
?>
<div class="jumbotron text-center">
    <h1 class="display-4">¡FINAL STEP!</h1>
    <hr class="my-4">
    <p class="lead"> You are about to pay PayPal the amount of:
    <h4>$<?php echo number_format($total,2); ?></h4>
    </p>
    <p>Products will be shipped once payment has benn processed</br>
    <strong>(For clarifications write to email: jaibitasracing2020@gmail.com)</strong>
    </p>
</div>

<!-- Ya esta es la parte para pagar con paypal -->

<!DOCTYPE html>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php echo $total;?>'
                        },
                        descrpcion:"Compra de productos a Jaibita´s Racing:$<?php echo number_format($total,2);?>",
                        custom:"<?php echo $SID;?>#<?php echo openssl_encrypt($idVenta,COD,KEY);?>"
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    console.log(data);
                    window.location="verificador.php?";
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>
</body>

<?php include 'templates/pie.php'; ?>