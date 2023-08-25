<?php
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();

if(isset($_GET['seen']))
{
    $frm_data = filteration($_GET);

    if($frm_data['seen']=='all'){
        $q = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if(update($q,$values,'i')){
            alert('success','Marked all as read!');
        }
        else{
            alert('error','Operation Failed');
        }
    }
    else{
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `sr_no`=?";
        $values = [1,$frm_data['seen']];
        if(update($q,$values,'ii')){
            alert('success','Marked as read');
        }
        else{
            alert('error','Operation Failed');
        }
    }
}

if(isset($_GET['del']))
{
    $frm_data = filteration($_GET);

    if($frm_data['del']=='all'){
        $q = "DELETE FROM `user_queries`";
        if(mysqli_query($con,$q)){
            alert('success','All Deleted!');
        }
        else{
            alert('error','Operation failed');
        }
    }
    else{
        $q = "DELETE FROM `user_queries` WHERE `sr_no`=?";
        $values = [$frm_data['del']];
        if(delete($q,$values,'i')){
            alert('success','Deleted!');
        }
        else{
            alert('error','Operation failed');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features & Facilities</title>
<?php require('inc/links.php'); ?>
</head>
<body class="bg-white">
    
<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
           <h3 class=" mb-4">Features & Facilities</h3>

           <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title  m-0">Features</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#features-s">
                        <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div>

                 <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                  <table class="table table-hover border">
                    <thead class="sticky-top">
                        <tr class="bg-dark text-light">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col" width="20%">Subject</th>
                        <th scope="col" width="30%">Message</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $q = "SELECT * FROM `user_queries` ORDER BY `sr_no` DESC";
                        $data = mysqli_query($con,$q);
                        $i=1;

                        while($row = mysqli_fetch_assoc($data))
                        {
                            $seen='';
                            if($row['seen']!=1){
                                $seen="<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read<a><br>";
                            }
                            $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete<a>";
                            echo<<<query
                                <tr>
                                  <td>$i</td>
                                  <td>$row[name]</td>
                                  <td>$row[email]</td>
                                  <td>$row[subject]</td>
                                  <td>$row[message]</td>
                                  <td>$row[date]</td>
                                  <td>$seen</td>
                                </tr>
                            query;
                            $i++;
                        }
                        ?>
                    </tbody>
                   </table>
                 </div>

                </div>
            </div>


        </div>
    </div>
</div>


    <!-- Features modal -->
            
    <div class="modal fade" id="features-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="team_s_form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Team Member</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Picture</label>
                            <input type="file" name="member_picture" id="member_picture_inp" accept=".jpg, .png, .jpeg, .webp" class="form-control shadow-none" required>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" onclick="member_name.value='', member_picture.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                        </div>
                </div>
            </form>
        </div>
    </div>

<?php require('inc/scripts.php'); ?>

</body>
</html>