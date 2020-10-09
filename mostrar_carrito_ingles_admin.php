<?php
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('login_v2.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera_ingles_admin.php';
?>

<br>
<h3>Cart list...</h3>
<?php if(!empty($_SESSION['CARRITO'])) { 
    //Trabaja con la variable de sesion
    ?>
<table class="table table-dark table-bordered">
    <tbody>
        <tr>
            <th width="40%">Description</th>
            <th width="15%" class="text-center">Quantity</th>
            <th width="20%" class="text-center">Price</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) { ?>
        <tr>
            <td width="40%"> <?php echo $producto['NOMBRE'] ?> </td>
            <td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?> </td>
            <td width="20%" class="text-center">$<?php echo $producto['PRECIO'] ?> </td>
            <td width="20%" class="text-center">$<?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?> </td>
            <form action="" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY) ?>">
            <td width="5%"> <button class="btn btn-danger" name="btnAccion" value="Eliminar" type="submit">Delete</button> </td>
            </form>
        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); //Suma el precio de todos los productos que se han pedido?>
        <?php } ?> 
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        </tr>
            <tr>
            <?php //Redirecciona a la pagina oficial de paypal a pagar con su usuario y cuenta?>
            <td colspan="5">
            <form action="pagar_ingles_admin.php" method="POST">
                <div class="alert alert-success" role="alert">
                <div class="form-group">
                <label for="my-input">Contact email:</label>
                <input id="email" name="email" class="form-control" type="email" placeholder="example@gmail.com" required>
            </div>
            <small id="emailHelp" class="form-text text-muted">
                The products will be sent to this email.
            </small>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder">Go to pay >></button>
            </form>
            </td>
            </tr>
    </tbody>
</table>
<?php }else{ ?>
<div class="alert alert-success" role="alert">
    There are no products in the cart....
</div>
<?php } ?>

<?php include 'templates/pie.php'; ?>