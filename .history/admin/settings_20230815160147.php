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
    
<?php require('inc/hearder.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
           <h3 class=" mb-4">SETTINGS</h3>

           <!-- Getting settings section -->

           <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title  m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                        <i class="bi bi-pencil-square"></i>Edit
                        </button>
                    </div>
                    <h6 class="card-subtitle mb-2 mb-1 fw-bold">Site Title</h6>
                    <p class="card-text">content</p>
                    <h6 class="card-subtitle mb-2 mb-1 fw-bold">About Us</h6>
                    <p class="card-text">content</p>
                </div>
            </div>

            <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="">
                    
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require('inc/scripts.php'); ?>
</body>
</html>