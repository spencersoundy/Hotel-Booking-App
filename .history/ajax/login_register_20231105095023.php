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

    $u_exist = select("SELECT * FROM `user_ced` WHERE `email`=? AND `phonenum`=? LIMIT 1",
       [$data['email'],$data['phonenum']],"ss");

    if(mysqli_num_rows($u_exist)!=0){
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_exists' : 'phone_exists';
        exit;
    }

    // upload user image to server

    $img = uploadUserImage($_FILES['profile'])

    if($img == 'inv_img'){
        echo 'inv_img';
    }
    else

}

?>