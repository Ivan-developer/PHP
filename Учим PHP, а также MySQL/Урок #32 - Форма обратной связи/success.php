<?php
    session_start();
    if($_GET["send"] == 1){
    echo "You passed enter email to email ".$_SESSION["to"];
    }
?>