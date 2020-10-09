<?php
//Incluye el diseño y la base de datos
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera_ingles_usuario.php';
?>
    <br>
    <?php if($mensaje!="") { ?>
    <div class="alert alert-success">
        <?php echo $mensaje; ?>
        <a href="mostrar_carrito_ingles_usuario.php" class="badge badge-success">Show car</a>
    </div>
    <?php } ?>
    <div class="row">
        <?php
        //Prepara la sentencia sql
        $sentencia=$pdo->prepare("SELECT * FROM `tblproductos`");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos);
        ?>
        <?php foreach($listaProductos as $producto){ 
        //Ya muestra los productos que hay en existencia desde la base de datos junto con us informacion
        ?>
            <div class="col-3">
            <div class="card">
                <img 
                title="<?php echo $producto['Nombre']; ?>"
                alt="<?php echo $producto['Nombre']; ?>"
                class="card-img-top" 
                src="<?php echo "data:image/jpg;base64,".base64_encode($producto['Imagen']); ?>"
                data-toggle="popover"
                data-trigger="hover"
                data-content="<?php echo $producto['Descripcion']; ?>"
                height="317px";
                width="800px";
                >
                <div class="card-body">
                    <span><?php echo $producto['Nombre']; ?></span>
                    <h5 class="card-title"><?php echo $producto['Precio']; ?></h5>
                    <p class="card-text">Description</p>
                <form action="" method="POST">
                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY) ?>">
                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY); ?>">
                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY)?>">

                <button class="btn btn-success" name="btnAccion" value="Agregar" type="submit">Add to cart</button><br/>
                </form>
                </form>
                </form>
                </div>
            </div>
        </div>
        
        <?php }?>       
    </div>
</div>
<script>
         $(function () {
                 $('[data-toggle="popover"]').popover()
         })
</script>
<?php include 'templates/pie.php'; ?>