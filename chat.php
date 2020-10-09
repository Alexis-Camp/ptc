<!---------------------------------- CODIGO PHP ----------------------------------------->
  <?php
  session_start();
  ?>
<?php
$page_title = 'Menú Principal';
  require_once('includes/load.php');//INCLUYE LOAD
  if (!$session->isUserLoggedIn(true)) { redirect('chat.php', false);}//VERIFICA SI LA SESION EXISTE
  ?>
  <?php include_once('layouts/header.php');//INCLUYE EL INICIO DE PAGINA ?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="https://www.w3.org/1999/xhtml">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Chat Online</title>
    <link type="text/css" rel="stylesheet" href="libs/css/style_chat.css" />
</head>
<?php


function loginForm(){
    //<h3>Ingrese un nombre para continuar:</h3>
    //<input type="text" class="form-control" name="name" id="name" "required" placeholder="Nombre..."/></br>
    echo'
    <div id="loginform">
    <form action="chat.php" method="post">
    <input type="submit" class="btn btn-success" name="enter" id="enter" value="Entrar" />
    </form>
    </div>';
}

if(isset($_POST['enter'])){
        $user['name'] = stripslashes(htmlspecialchars($_POST['name']));
}



if(!isset($user['name'])){
    loginForm();
}

else{

    ?>
    <div id="wrapper">
        <div id="menu">
            <h6><p class="welcome">Welcome, <b><?php echo $user['name']; ?></b></p></h6>
            <div style="clear:both"></div>
        </div>    
        <div id="chatbox"> 

            <?php
            if(file_exists("log.html") && filesize("log.html") > 0){
                $handle = fopen("log.html", "r");
                $contents = fread($handle, filesize("log.html"));
                fclose($handle);

                echo $contents;
            }
            ?>

        </div>

        <form name="message" action="post.php">
            <input name="usermsg" type="text" id="usermsg" size="63" />
            <input name="submitmsg" type="submit"  id="submitmsg" value="Enviar" />
        </form>
    </div>

    <p>&nbsp</p>
    <p>Let´s to talk</p>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">

// jQuery Document
$(document).ready(function(){
    //If user wants to end session
    $("#exit").click(function(){
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'chat.php?logout=true';}      
    });
});

//If user submits the form
$("#submitmsg").click(function(){   
    var clientmsg = $("#usermsg").val();
    $.post("post.php", {text: clientmsg});              
    $("#usermsg").attr("value", "");
    return false;
});

//Load the file containing the chat log
function loadLog(){     
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
        $.ajax({
            url: "log.html",
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div   
                
                //Auto-scroll           
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }               
            },
        });
    }    
    setInterval (loadLog, 1500);    
</script>
<?php
}
if(isset($_GET['logout'])){ 

    //Simple exit message
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><i>El usuario ". $user['name'] ." Abandono el chat.</i><br></div>");
    fclose($fp);

    session_destroy();
    echo "<script>location.href='chat.php';</script>"; //Redirect the user
}

?>



</body>
</html>