<?php
session_start();

if(isset($_SESSION['user_id']) && !is_null($_SESSION['user_id'])){
    $_SESSION['user_id'] = null;
    
    header('Location:index.php');
}