<?php
include "header.php";
?>
<html>

<body style="color: black;" >
    <!-- buat class container -->
    <div class="container infinity-container">
        <!-- <div class="row h-100 justify-content-center align-items-center"> -->
            <!-- membuat form -->

            <!-- <form class="col-lg-6" action="config/login.php" method="POST">
                <center>
                    <h2>LOGIN</h2>
                </center> -->
                <!-- <center> <img src="image/sttb.jpg" width="150px" height="150px"></center> -->
                <!-- baris ke 2 pada form -->
         <div class="row">
			<div class="col-md-1 infinity-left-space"></div>
			
			<!-- FORM BEGIN -->
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
				<!-- Logo -->
				<div class="text-center mb-4 mt-4">
					<!-- <img src="img/logoos.jpg" width="180px"> -->
					<h1 style="color:rgb(194, 153, 19); "><font face="The Austin">Kripikku</font></h1>
				</div>

				<div class="text-center mb-4">
					<h5 style="color: rgba(253, 248, 197, 0.795);">Welcome Back </h5>
				</div>
				<!-- Form -->
				<form class="input-form-login px-3" action="config/login.php" method="POST">

				<div class="form-row" style="text-align:left; color:rgba(253, 248, 197, 0.795);">
					<div class="form-group col-md-12">
					<label for="contoh2" >Username</label>
						<input type="text" class="form-control" name="username" placeholder="username">
					</div>
					<div class="form-group col-md-12">
						<label for="contoh2">Password</label>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
				</div>

                <div class="row mb-2">
						<!-- Remember Box -->
			            <div class="col-auto d-flex align-items-center">
			                <div class="custom-control custom-checkbox">
			                    <input type="checkbox" class="custom-control-input" id="cb1">
			                   	<label class="custom-control-label" for="cb1" style="color:  rgba(253, 248, 197, 0.795);">Remember me</label>
			                </div>
				        </div>
			   	    </div>
                		<center><button name="login" type="submit" class="btn btn-primary col-md-6">Login</button></center>
						<!-- <a href="config/login.php"></a> -->
					<div class="text-center mb-5" style="color: rgba(253, 248, 197, 0.795);">Don't have an account? 
						<a class="login-link" href="register.php">Register here</a>
			       	</div>
        
        <!-- end baris 2 pada form -->
        </form>
		</div>
	</div> 
	
        <!-- end form -->
 
    <!-- end container -->
</body>

</html>