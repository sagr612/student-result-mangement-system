<?php
if (!session_id()) session_start();
if ($_SESSION['login']){ 
    $_SESSION['login']=false;
    header("Location:admin.php");
    exit();
}
?>