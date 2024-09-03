<?php
    session_start();
    
    $_SESSION["idLog"] = "";
    $_SESSION["nomeLog"] = "";
    $_SESSION["emailLog"] = "";
    $_SESSION["dataLog"] = "";
    $_SESSION["sexoLog"] = "";
    $_SESSION["telLog"] = "";
    $_SESSION["cpfLog"] = "";
    header('Location: ../Login.php');
