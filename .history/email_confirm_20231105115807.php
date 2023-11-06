<?php
    
    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');

    if(isset($_GET['email_confirmation']))
    {
        $data = filteration($_GET);

        $query = select("SELECT * FROM `user_cred` WHERE `email`=? and `token`=? LIMIT 1",
          [$data['email'],$data['token']],'ss');

        if(mysqli_num_rows($query)==1)
        {
            $fetch = mysqli_fetch_assoc($query);

            if($fetch['is-verified']==1){
                echo"<script>alert(Email already Verified!')</script>";
                redirect('index.php')
            }
            else{
                $update =update("UPDATE `user_ced` SET `id`='[value-1]',`name`='[value-2]',`email`='[value-3]',`address`='[value-4]',`phonenum`='[value-5]',`pincode`='[value-6]',`dob`='[value-7]',`profile`='[value-8]',`password`='[value-9]',`is_verified`='[value-10]',`token`='[value-11]',`t_expired`='[value-12]',`status`='[value-13]',`datentime`='[value-14]' WHERE 1")
            }
        }
        else{
            echo"<script>alert(Invalid link!')</script>";
        }
    }
?>