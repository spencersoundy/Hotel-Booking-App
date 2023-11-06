<?php 

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');


if(isset($_POST['register']))
{
    $data = filteration($_POST);

    // match password and confirm password

    if($data['pass'] != $data['cpass']){
        echo 'Passwords Do Not Match';
        exit;
    }

    //check user exists or not

    $u_exist = select("SELECT * FROM `user_ced` WHERE `email`=? AND `phonenum`=?",
       [$data['email'],$data['phonenum']],"ss");



}

?>