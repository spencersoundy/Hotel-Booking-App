<?php 

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if(isset($_POST['get_users']))
{
    $res = selectAll('user_ced');
    $i=1;
    $path = USERS_IMG_PATH;

    $data = "";

    while($row = mysqli_fetch_assoc($res))
    {
        

        if($row['is_verified']){
            $verified = "<span class='badge bg-success'><i class='bi bi-check-lg'></i></span>";
        }

        $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-dark btn-sm shadow-none'>
        active</button>";

        if(!$row['status']){
            $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-danger btn-sm shadow-none'>inactive</button>";
        }
       
        $data.="
           <tr>
            <td>$i</td>
            <td>
            <img src='$path$row[profile]' width='55px'>
            <br>
            $row[name]
            </td>
            <td>$row[email]</td>
            <td>$row[phonenum]</td>
            <td>$row[address] | $row[pincode]</td>
            <td>$row[dob]</td>
            <td>$verified</td>
           </tr>
        ";
        $i++;
    }

    echo $data;
}

// if(isset($_POST['toggle_status']))
// {
//     $frm_data = filteration($_POST);

//     $q = "UPDATE `rooms` SET `status`=? WHERE `id`=?";
//     $v =  [$frm_data['value'],$frm_data['toggle_status']];

//     if(update($q,$v,'ii')){
//         echo 1;
//     }
//     else{
//         echo 0;
//     }
// }

// if(isset($_POST['remove_room']))
// {
//     $frm_data = filteration($_POST);

//     $res1 = select("SELECT * FROM `room_images` WHERE `room_id`=?",[$frm_data['room_id']],'i');

//     while($row = mysqli_fetch_assoc($res1)){
//         deleteImage($row['image'],ROOMS_FOLDER);
//     }

//     $res2 = delete("DELETE FROM `rooms_images` WHERE `room_id`=?",[$frm_data['room_id']],'i');
//     $res3 = delete("DELETE FROM `rooms_features` WHERE `room_id`=?",[$frm_data['room_id']],'i');
//     $res4 = delete("DELETE FROM `rooms_facilities` WHERE `room_id`=?",[$frm_data['room_id']],'i');
//     $res5 = update("UPDATE `rooms` SET `removed`=? WHERE `id`=?",[1,$frm_data['room_id']],'ii');
        
//     if($res2 || $res3 || $res4 || $res5){
//         echo 1;
//     }
//     else{
//         echo 0;
//     }
// }

?>