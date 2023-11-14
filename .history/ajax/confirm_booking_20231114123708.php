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

        
    }