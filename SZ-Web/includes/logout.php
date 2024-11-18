<?php
    session_start();
    
    $_SESSION["idLog"] = "";
    $_SESSION["nomeLog"] = "";
    $_SESSION["emailLog"] = "";
    $_SESSION["dataLog"] = "";
    $_SESSION["sexoLog"] = "";
    $_SESSION["telLog"] = "";
    $_SESSION["cpfLog"] = "";
    $_SESSION["pfpLog"] = "";
    $_SESSION["idConsul"] = "";
    header('Location: ../Login.php');
