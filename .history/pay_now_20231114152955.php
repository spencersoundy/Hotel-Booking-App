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

    if(isset($_POST['pay_now'])){
        header("Pragma: no-cache");
        header("Cache-Control: no-cache");
        header("Expires: 0");

        $checkSum = "";

        $ORDER_ID = 'ORD_';
        $CUST_ID = $_POST["CUST_ID"];
        $INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
        $CHANNEL_ID = $_POST["CHANNEL_ID"];
        $TXN_AMOUNT = $_POST["TXN_AMOUNT"];
        
        $paramList = array();

    }

?>