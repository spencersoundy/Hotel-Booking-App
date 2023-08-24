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
    <h2 class="fw-bold h-font text-center">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Eveniet hic a debitis <br> labore quibusdam in exercitationem 
        quidem suscipit rerum illo.
    </p>
</div>

<?php 
     $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
     $values = [1];
     $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
     print_r($contact_r);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded mb-4" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
                
                    <h5>Address</h5>
                <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-line-block text-decoration-none text-dark mb-2">
                <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
                </a>

                <h5 class="mt-4">Call Us</h5>
                <a href="Tell: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-plus-fill"></i> +<?php echo $contact_r['pn1'] ?>
                </a>
                <br>
                <?php


                <h5 class="mt-4">Email</h5>
                <a href="mailto: info@soundyhotels.co.za" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-envelope-at-fill"></i> info@soundyhotels.co.za
                </a>

                <h5 class="mt-4">Follow Us</h5>
                <a href="#" class="d-inline-block text-dark fs-5 me-3">
                        <i class="bi bi-twitter me-1"></i> 
                </a>
                <a href="#" class="d-inline-block text-dark fs-5 me-3">
                        <i class="bi bi-facebook me-1"></i>
                </a>
                <a href="#" class="d-inline-block">
                        <i class="bi bi-instagram me-1"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
            <div class="bg-white rounded shadow p-4">
                <form>
                    <h5>Send a message</h5>
                    <div class="mt-3">
                        <label class="form-label"style="font-weight: 500;">Name</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label"style="font-weight: 500;">Email</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label"style="font-weight: 500;">Subject</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label"style="font-weight: 500;">Message</label>
                        <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require('inc/footer.php')?>

</body>
</html>

