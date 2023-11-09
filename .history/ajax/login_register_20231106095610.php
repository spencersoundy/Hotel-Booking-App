<?php 

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');
require("../inc/sendgrid/sendgrid-php.php");


function send_mail($uemail,$name,$token)
{
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("spencersoundy@icloud.com","Digital Soundy");
    $email->setSubject("Account Verification Link");

    $email->addTo($uemail,$name);

    $email->addContent(
        "rxt/html"
    )
}


if(isset($_POST['register']))
{
    $data = filteration($_POST);

    // match password and confirm password

    if($data['pass'] != $data['cpass']){
        echo 'pass_mismatch';
        exit;
    }

    //check user exists or not

    $u_exist = select("SELECT * FROM `user_ced` WHERE `email`=? OR `phonenum`=? LIMIT 1",
       [$data['email'],$data['phonenum']],"ss");

    if(mysqli_num_rows($u_exist)!=0){
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
        exit;
    }

    // upload user image to server

    $img = uploadUserImage($_FILES['profile'])

    if($img == 'inv_img'){
        echo 'inv_img';
        exit;
    }
    else if($img == 'upd_failed'){
        echo 'upd_failed';
        exit;
    }

    // send confirmation link to user's email

    $token = bin2hex(random_bytes(16));

    if(!send_mail($data['email'],$data['name'],$token)){
        echo 'mail_failed';
        exit
    }

    $enc_pass = password_hash($data['pass'],PASSWOD_BCRYPT);

    $query = "INSERT INTO `user_ced`(`name`, `email`, `address`, `phonenum`, `pincode`, `dob`,
     `profile`, `password`, `token`) VALUES (?,?,?,?,?,?,?,?,?)";

    $values = [$data['name'],$data['email'],$data['address'],$data['phonenum'],$data['pincode'],$data['dob'],
        $img,$enc_pass,$token];

    if(insert($query,$values,'sssssssss')){
        echo 1;
    }
    else{
        echo 'ins_failed';
    }


}

?>