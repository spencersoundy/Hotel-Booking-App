<?php 

    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');

    require('inc/paytm/config_paytm.php');
    require('inc/paytm/encdec_paytm.php');

    date_default_timezone_set("Africa/Johannesburg");

    session_start();

    if(!(isset($_SESSION['login']) && $_SESSION['login']==true)){
        redirect('index.php');
    }
