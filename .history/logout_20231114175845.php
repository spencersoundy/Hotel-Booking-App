<?php 
    session_start();
    require('admin/inc/essentials.php');

    
    session_destroy();
    redirect('index.php');

    error_reporting(E_ALL);
    ini_set('display_errors', 1)

?>