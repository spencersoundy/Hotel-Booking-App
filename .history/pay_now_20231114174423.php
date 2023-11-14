<?php 

    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');

  
    date_default_timezone_set("Africa/Johannesburg");

    session_start();

    if(!(isset($_SESSION['login']) && $_SESSION['login']==true)){
        redirect('index.php');
    }

    if(isset($_POST['pay_now']))
    {
       redirect('thankyou.php')
    }

?>

