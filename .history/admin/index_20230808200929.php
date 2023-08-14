<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php');?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">
   
    
<div class="login-form text-center rounded bg-white">
    <form>
        <h4>ADMIN LOGIN PANEL</h4>
        <div>
            <div class="mb-3">
                <input type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
            </div>
            <div class="mb-4">
                <input type="password" class="form-control shadow-none text-center" placeholder="Password">
            </div>
            <button type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
        </div>
    </form>
</div>

    <?php require('inc/scripts.php')?>
</body>
</html>