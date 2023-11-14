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

        $ORDER_ID = 'ORD_'.$_SESSION['uId'].random_int(11111,9999999);
        $CUST_ID = $_SESSION['uId'];
        $INDUSTRY_TYPE_ID = INDUSTRY_TYPE_ID;
        $CHANNEL_ID = CHANNEL_ID;
        $TXN_AMOUNT = $_SESSION['room']['payment'];
        

        // Create an array having all required parameters for creating checksum.

        $paramList = array();
        $paramList["MID"] = PAYTM_MERCHANT_MID;
        $paramList["ORDER_ID"] = $ORDER_ID;
        $paramList["CUST_ID"] = $CUST_ID;
        $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
        $paramList["CHANNEL_ID"] = $CHANNEL_ID;
        $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
        $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
        $paramList["CALLBACK_URL"] = CALLBACK_URL;

        //Here checksum string will return by getChecksumFromArray() function.
        $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

        // insert payment data into database

        $frm_data = filteration($_POST);

        $query1 = "INSERT INTO `booking_order`(`user_id`, `room_id`, `check_in`, `check_out`, `order_id`) VALUES (?,?,?,?,?)";

        insert($query1,[$CUST_ID,$_SESSION['room']['id'],$frm_data['checkin'],$frm_data[checkout],$ORDER_ID],'issss');

        $booking_id = mysqli_insert_id($con);

        $query2 = "INSERT INTO `booking_details`(`sr_no`, `booking_id`, `room_name`, `price`, `total_pay`, `room_no`, `user_name`, `phonenum`, `address`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')";
    }

?>