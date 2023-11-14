<?php 

    require('admin/inc/db_config.php');
    require('admin/inc/db_essentials.php');

    require('inc/paytm/config_paytm.php');
    require('inc/paytm/encdec_paytm.php.php');

    date_default_timezone_set("Africa/Johannesburg");

    sessions_start();

    if(!(isset($_SESSION['login']) && $_SESSION['login']==true)){
        redirect('index.php');
    }

    if

?>