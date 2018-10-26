<?php
session_start();
if($_SESSION['user']==null || $_SESSION['user']==''){
    header("Location: ../../index.php");
}
?>