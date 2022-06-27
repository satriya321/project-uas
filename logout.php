<?php
    session_start();
    session_unset();
    session_destroy();

    setcookie('login','',time()-120);
    
    header("Location: fromlogin.php");
?>