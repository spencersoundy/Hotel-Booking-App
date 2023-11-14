<?php 
    session_start();
    require('admin/inc/essentials.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 1)
    
    session_destroy();
    redirect('index.php');

    error_reporting(E_ALL);
    ini_set('display_errors', 1)

?>