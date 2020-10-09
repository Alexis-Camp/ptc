<?php
  $page_title = 'Home';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>This is your new home page</h1>

         <h4>Already filled out our customer form?</h4>
         <a href="home.php" class="btn btn-primary">Yes</a>
         <a href="add_client.php" class="btn btn-primary">No</a>
     
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
