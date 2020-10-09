<?php
session_start();
include('loyauts/header.php');
    $segundos = 5;
    header("Refresh:".$segundos);

if(isset($user['name'])){
    $text = $_POST['text'];
     
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("d-m-y, g:i a").") <b>".$user['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
}
?>