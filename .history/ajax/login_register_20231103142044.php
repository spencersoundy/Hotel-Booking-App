<?php 

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');


if(isset($_POST['register']))
{
    $data = filteration($_POST);

    // match password and confirm password

    if($data['pass'] != $data['cpass']){
        echo 'passwords Dont Match'
    }
}

?>