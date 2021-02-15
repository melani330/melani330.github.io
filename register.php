<?php
// include 'session.php';
include "header.php";
?>

<!-- <body> -->
	<!-- buat class container -->

	<!-- <div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center"> -->
	<body style="color: black;" >
    <!-- buat class container -->
    <div class="container infinity-container">
		<div class="text-center mb-4 mt-4">
					<!-- <img src="img/logoos.jpg" width="180px"> -->
					
			<!-- <img src="image/sttb.jpg"> -->

			<!-- membuat form -->
			<!-- <form action="config/register.php" method="POST" class="col-lg-6">
				<h5>Registrasi</h5> -->
			<div class="row">
			<div class="col-md-1 infinity-left-space"></div>
			
			<!-- FORM BEGIN -->
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
				<!-- Logo -->
				<div class="text-center mb-4 mt-4">
					<!-- <img src="img/logoos.jpg" width="180px"> -->
					<h1 style="color:rgb(194, 153, 19); "><font face="The Austin">Kripikku</font></h1>
					<h5 style="color: rgba(253, 248, 197, 0.795);">Join new member </h5>
				<!-- Form -->
				<form class="input-form-login px-3" action="config/register.php" method="POST">

				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama Depan</label>
						<input type="text" class="form-control" name="namadepan" placeholder="Nama Depan">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Nama Belakang</label>
						<input type="text" class="form-control" name="namabelakang" placeholder="Nama Belakang">
					</div>
				</div>
				<!-- end baris 1 pada form -->
				<div class="form-row" >
					<div class="form-group col-md-12">
						<label for="contoh1">Email</label>
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
				<!-- baris ke 2 pada form -->
				<div class="form-row" >
					<div class="form-group col-md-6">
						<label for="contoh2">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Password</label>
						<input type="text" class="form-control" name="password" placeholder="Password">
					</div>
				</div>
				</div>
				<!-- end baris 2 pada form -->
				<center><button name="register" type="submit" class="btn btn-primary col-md-6">Register</button></center>
               			 <div class="text-center mb-2">
	                   	<div class="text-center mb-3" style="color:rgba(253, 248, 197, 0.795);">or register with</div>
		                   	
	                   	<!-- Facebook Button -->
	                   	<a href="" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i></a>

                    	<!-- Google Button -->
						<a href="" class="btn btn-social btn-google"><i class="fa fa-google"></i></a>

						<!-- Twitter Button -->
						<a href="" class="btn btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
					</div>
					<div class="text-center mb-5" style="color: rgba(253, 248, 197, 0.795);">Already have an account? 
						<a class="login-link" href="login.php">Login here</a>
			       	</div>
				<!-- <button type="submit" class="btn btn-primary">Tambah</button> -->
			</form>
			
			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>