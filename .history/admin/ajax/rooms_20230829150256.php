<?php 

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if(isset($_POST['add_room']))
{
    $features = filteration($_POST);
    $frm_data = filteration($_POST);

    print_r($frm_data);
}
?>