<!--------------------------------- INICIO CODIGO -------------------------------------------->
<?php $user = current_user();//OPTIENE EL NOMBRE DEL USUARIO ?>
<!-------------------------------- INICIO CUERPO HTML ---------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php if (!empty($page_title))
  echo remove_junk($page_title);
  elseif(!empty($user))
   echo ucfirst($user['name']);
 else echo "Sistema de inventario";?>
</title>
<!----------------------------- CODIGO PARA LLAMAR LAS LIBRERIAS NECESARIAS ---------------------------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>

<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="libs/css/main.css" />
<link rel="shortcut icon" href="libs/images/Logo.jpeg" type="image/x-icon">

</head>
<body>
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">
      <div class="logo pull-left"> Jaibita's Racing </div>
      <div class="header-content">
        <div class="header-date pull-left">
          <strong><!--<?php
        //echo date("d-m-Y-l  G:i a");?></strong>-->
        </div>
        <!----------------------------------- OPCIONES SOBRE PERFIL Y CERRAR SESION --------------------->
        <div class="pull-right clearfix">
          <ul class="info-menu list-inline list-unstyled">
            <li class="profile">
              <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
                <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
                <span><?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="perfil.php?id=<?php echo (int)$user['id'];?>">
                    <i class="glyphicon glyphicon-user"></i>
                    Perfil
                  </a>
                </li>
                <li>
                 <a href="editar_cuenta.php" title="edit account">
                   <i class="glyphicon glyphicon-cog"></i>
                   Configuración
                 </a>
               </li>
               <li>
                <a href="idioma.php">
                  <i class="glyphicon glyphicon-paperclip"></i>
                  Idioma
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Español</a> </li>
                  <li><a href="#">Ingles</a> </li>
                </ul>
              </li>
              <li class="last">
               <a href="logout.php">
                 <i class="glyphicon glyphicon-off"></i>
                 Salir
               </a>
             </li>
           </ul>
         </li>
       </ul>
     </div>
   </div>
 </header>
 <!-------------------------------------------- CODIGO DE NAVBAR ---------------------------------->
 <div class="sidebar">
  <?php if($user['user_level'] === '1'): ?>
    <!-- admin menu -->
    <?php include_once('menu_administrador.php');?>

    <?php elseif($user['user_level'] === '2'): ?>
      <!-- Special user -->
      <?php include_once('menu_especial.php');?>

      <?php elseif($user['user_level'] === '3'): ?>
        <!-- User menu -->
        <?php include_once('menu_usuario.php');?>

      <?php endif;?>

    </div>
  <?php endif;?>

  <div class="page">
    <div class="container-fluid">
