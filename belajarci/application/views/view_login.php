
<!-- Include CDN Bootstrap 3.3 Start -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>vendor2/Login.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>vendor2/fontawesome-free-6.1.1-web/css/all.min.css">

    <title>Login Page</title>
  </head>
  <body>

	  <div class="container">

		  <h3 class="text-center">Selamat Datang</h3>
	<hr>
		  
	<?php
	echo form_open('auth/login');
	?>
		  
	<div class="form-group">
		<label for=""> Username</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text"><i class="fas fa-user"></i></div>
			</div>
			<input class="form-control" type="text" name="username" placeholder="Masukkan Username Anda">
		</div>
	</div>

	<div class="form-group">
		<label for=""> Password</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
			</div>
		<input class="form-control" type="password" name="password" placeholder="Masukkan Password Anda">
	</div>
	<br>
		<button type="submit" name="submit" class="btn btn-primary">Login</button>
		<button type="reset" name="reset" class="btn btn-danger">Reset</button>
	
	</form>
		  
		  

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<!-- Include CDN Bootstrap 3.3 End -->




<!-- 3################################################################## -->
<!-- 
	<?php
//echo form_open('auth/login');

?>

<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<button type="submit" name="submit">Login</button>

</form> -->

