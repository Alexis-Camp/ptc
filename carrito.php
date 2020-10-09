<?php 
//Desencriptando los productos para que funcione, tomando como base el "ID"
session_start();
include ("global/conexion2.php");
$mensaje = "";

if (isset($_POST['btnAccion'])) {

    switch($_POST['btnAccion']){

        case 'Agregar':

            if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
                $ID = openssl_decrypt($_POST['id'],COD,KEY );
                $mensaje.= "Ok correct ID:"." ".$ID."</br>";
             }else{
                $mensaje.= "Upss... ID incorrecto".$ID;
             }
             if (is_string(openssl_decrypt($_POST['nombre'],COD,KEY))) {
                 $NOMBRE = openssl_decrypt($_POST['nombre'],COD,KEY);
                 $mensaje.= "Ok NOMBRE:"." ".$NOMBRE."</br>";
             }else{   $mensaje.="Upss.. algo pasa con el nombre"; }
             if (is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))) {
                $CANTIDAD = openssl_decrypt($_POST['cantidad'],COD,KEY);
                $mensaje.= "Ok CANTIDAD:"." ".$CANTIDAD."</br>";
            }else{  $mensaje.="Upss.. algo pasa con la cantidad"; }
            if (is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))) {
                $PRECIO = openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje.= "Ok PRECIO:"." ".$PRECIO."</br>";
            }else{  $mensaje.="Upss.. algo pasa con el precio"; }

            if (!isset($_SESSION['CARRITO'])) {
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO
                );
                $_SESSION['CARRITO'][0]=$producto;
            }else{
                $NumeroProductos=count($_SESSION['CARRITO']);
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    'PRECIO'=>$PRECIO
                );
                $_SESSION['CARRITO'][$NumeroProductos]=$producto;
            }
                //$mensaje= print_r($_SESSION,true);
                $mensaje = "Product added to cart";
        break;
        case "Eliminar":
            if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
               $ID = openssl_decrypt($_POST['id'],COD,KEY );
               
                foreach($_SESSION['CARRITO'] as $indice=>$producto){
                    if($producto['ID']==$ID){
                        unset($_SESSION['CARRITO'][$indice]);
                        echo "<script>alert('Product removed...');</script>";
                    }
                }
            }else{
                echo "<script>alert('Algo salío mal...');</script>";
            }
        break;
    }
}
?>