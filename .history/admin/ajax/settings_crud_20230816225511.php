<?php 

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if(isset($_POST['get_general']))
{
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_general']))
{
    $frm_data = filteration($_POST);

    $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
    $values = [$frm_data['site_title'],$frm_data['site_about'],1];
    $res = update($q,$values,'ssi');
    echo $res;
}

if(isset($_POST['upd_shutdown']))
{
    $frm_data = ($_POST['upd_shutdown']==0) ? 1 : 0;

    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
    $values = [$frm_data,1];
    $res = update($q,$values,'ii');
    echo $res;
}

if(isset($_POST['get_contacts']))
{
    $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_contacts']))
{
    $frm_data = filteration($_POST);

    $q = UPDATE `contact_details` SET `sr_no`='[value-1]',`address`='[value-2]',`gmap`='[value-3]',`pn1`='[value-4]',`pn2`='[value-5]',`email`='[value-6]',`fb`='[value-7]',`insta`='[value-8]',`tw`='[value-9]',`iframe`='[value-10]' WHERE 1";
    $values = [$frm_data['site_title'],$frm_data['site_about'],1];
    $res = update($q,$values,'ssi');
    echo $res;
}

?>