<?php 

    require('../admin/inc/db_config.php');
    require('../admin/inc/essentials.php');

    date_default_timezone_set("Africa/Johannesburg");

    if(isset($_POST['check_availability']))
    {
        $frm_data = filteration($_POST);
        $status = "";
        $result = "";

        // check in and check out validation

        $today_date = new DatTime(date("Y-m-d"));
        $checkin_date = New Datetime($frm_data['check_in']);
        $checkout_date = New Datetime($frm_data['check_out']);

        if($checkin_date == $checkout_date){
            $status = 'check_in_out_equal';
            $result =jason_encode
        }

    }