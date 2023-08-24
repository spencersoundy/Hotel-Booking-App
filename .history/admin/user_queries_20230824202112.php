<?php
require('inc/essentials.php');
require('inc/db_config.php');
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
           <h3 class=" mb-4">User Queries</h3>

           <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title  m-0">Images</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#carousel-s">
                        <i class="bi bi-plus-square"></i> Add
                        </button>
                    </div>

                    <div class="row" id="carousel-data">
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>


<?php require('inc/scripts.php'); ?>
<script src="scripts/carousel.js"></script>




</body>
</html>