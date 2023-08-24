<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
<?php require('inc/links.php'); ?>
</head>
<body class="bg-white">
    
<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
           <h3 class=" mb-4">CAROUSEL</h3>


            <!-- c section -->

           <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title  m-0">Management Team</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                        <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div>

                    <div class="row" id="team-data">
                    </div>

                </div>
            </div>

             <!-- Management Team modal -->
            
            <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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


        </div>
    </div>
</div>


<?php require('inc/scripts.php'); ?>
<script src="script/settings.js"></script>




</body>
</html>