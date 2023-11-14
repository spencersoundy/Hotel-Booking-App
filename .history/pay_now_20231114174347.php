<?php 

    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');

  
    date_default_timezone_set("Africa/Johannesburg");

    session_start();

    if(!(isset($_SESSION['login']) && $_SESSION['login']==true)){
        redirect('index.php');
    }

    if(isset($_POST['pay_now']))
    {
       redirect()
    }

?>

<html>
<head>
<title>Proccessing</title>
</head>
<body>

	<h1>Please do not refresh this page...</h1>

		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
			<?php
				foreach($paramList as $name => $value) {
					echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
				}
				?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
		</form>

		<script type="text/javascript">
			document.f1.submit();
		</script>
	
</body>
</html>