
<?php
  error_reporting(0);
  include "config/koneksi.php";
  if(isset($_POST['login100-form'])){
    $sql = mysqli_query($con, "INSERT INTO user VALUES ('', '$_POST[nama]', '$_POST[Nilai]', '$_POST[alamat]')");
    if ($sql) {
      echo "<script>alert('Data berhasil masuk');
      document.location.href='?menu=index.php'</script>";
    }else{
      echo "<script>alert('Data gagal masuk');
      document.location.href='?menu=index.php'</script>";
    }
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Survey Covid19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/sick.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Survey Corona Virus 
				</span>
				<form action="redirect.php" id="#form" method="post" name="#form" class="login100-form validate-form p-b-33 p-t-5">

        <div class="wrap-input100 validate-input" data-validate = "Masukan Nama Lengkap">
						<input class="input100" type="text" name="name" id="name" placeholder="Nama Lengkap" required>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan Alamat">
            
						<input class="input100" type="text" name="address" id="address" placeholder="Alamat" required>
						<span class="focus-input100" data-placeholder="&#xe99f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
            <!-- <a href="index.php?$_POST['name']" class="login100-form-btn">
            Masuk
            </a> -->
						<input id='btn' name="submit" class="login100-form-btn" type='submit' value='Submit'>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{assets(/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>