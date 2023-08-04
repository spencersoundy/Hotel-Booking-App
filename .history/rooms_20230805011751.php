<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soundy Hotels - CONTACT</title>
    <?php require('inc/links.php') ?>
</head>
<body class="bg-light">
   
<?php require('inc/header.php') ?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
</div>

<div class="container">
    <div class="row">

       <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2">FILTERS</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                        <label class="form-label">Check-in</label>
                        <input type="date" class="form-control shadow-none mb-3">
                        <label class="form-label">Check-out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                        <div class="mb-2">
                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                            <label class="for-check-label" for="f1">Facility One</label>
                        </div>
                        <div class="mb-2">
                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                            <label class="for-check-label" for="f2">Facility Two</label>
                        </div>
                        <div class="mb-2">
                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                            <label class="for-check-label" for="f3">Facility Three</label>
                        </div>
                    </div>
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                        <div class="d-flex">
                            <div class="me-3">
                                <label class="form-label">Adults</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div>
                                <label class="form-label">children</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
       </div>

       <div class="col-lg-9 co-md-12 px-4">
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </div>
       </div>

    </div>
</div>

<?php require('inc/footer.php')?>

</body>
</html>

