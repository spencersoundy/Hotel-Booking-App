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
                echo"<script>alert('Email already Verified!')</script>";
                redirect('index.php')
            }
            else{
                $update =update("UPDATE `user_ced` SET `is_verified`=? WHERE `id`=?,"[$fetch['id']],'i');
                if($update){
                    echo"<script>alert('Email verification successful!')</script>";
                }
                else{
                    echo"<script>alert('Email verification failed!')</script>";
                }
                redirect('index.php')
            }
        }
        else{
            echo"<script>alert('Invalid link!')</script>";
        }
    }
?>