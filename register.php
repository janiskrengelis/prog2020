<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Patversme</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/lightbox.min.css">
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<a class="navbar-brand" href="images/logofull.png" data-lightbox="Header" data-title="Catgirls"><img src="images/logo.png" alt="Logo"></a>
	<a class="navbar-brand" href="#"><h1>Patversme</h1></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Pieejamie dzīvnieki
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="index.php#linkclothes">Miki</a>
					<a class="dropdown-item" href="index.php#linklitter">Laimiņa</a>
					<a class="dropdown-item" href="index.php#linkfeeding">Koperfīlds</a>
					<a class="dropdown-item" href="index.php#linkgrooming">Lio</a>
					<a class="dropdown-item" href="index.php#linkbathing">Bairons</a>
					<a class="dropdown-item" href="index.php#linksafety">Aladins</a>
					<a class="dropdown-item" href="index.php#linkdowntime">Džims</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contacts.php">Contacts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>
		</ul>
	</div>
</nav>

<!-- saturs -->
<section class="fixed" id="grooming">
	<div class="col-12">
	</div>
</section>
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-1">Register</h1>
		</div>
		<fieldset class="form-group">

            <div class="form-group">
                <label class="form-control-label" for="username">Username</label>
                <input  class="form-control" type="text" name="username" id="username" placeholder="Your Username" minlength="1" required>
                <span><?php if (isset($errors['username1'])) echo $errors['username1'];?></span>
            </div><!-- form-group -->

            <div class="form-group">
                <label for="pwd">Password:</label><br>
                <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Password" minlength="8" required>
                <span><?php if (isset($errors['pwd1'])) echo $errors['pwd1'];?>
            </div><!-- form-group -->

            <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Address" required>
                <span><?php if (isset($errors['email1'])) echo $errors['email1'];?>
            </div><!-- form-group -->
            <div class="form-group">
                <label class="form-control-label" for="name">Name</label>
                <input  class="form-control" type="text" name="name" id="name" placeholder="Your Name" >
                <span><?php if (isset($errors['name1'])) echo $errors['name1'];?>
            </div><!-- form-group -->
            <div class="form-group">
                <label class="form-control-label" for="surname">Surname</label>
                <input  class="form-control" type="text" name="surname" id="surname" placeholder="Your Surname" >
                <span><?php if (isset($errors['surname1'])) echo $errors['surname1'];?>
            </div><!-- form-group -->
			<label class="form-control-label" for="image">Image</label>
            <input type="file" name="myFile" name="filename">
            <button class="btn btn-primary" type="submit">Submit</button>
        </fieldset>
		<?php

//not empty

if ($_POST) {
    $errors = array();

//start validation
    if(empty($_POST['username'])){
        $errors['username1'] = "Your username cannot be empty";
    }
    if(empty($_POST['pwd'])){
        $errors['pwd1'] = "Your password cannot be empty";
    }
    if(empty($_POST['email'])){
        $errors['email1'] = "Your email cannot be empty";
    }
    if(empty($_POST['name'])){
        $errors['name1'] = "Your name cannot be empty";
    }
    if(empty($_POST['surname'])){
        $errors['surname1'] = "Your surname cannot be empty";
    }
//check errors
    if (count($errors) == 0) {
        //redirect to success page
        header("Location: success.php");
        exit();
    }
}

		?>
	</div>
</div>
<!--- Footer -->
<footer>
	<a id="linkcontacts"></a>
	<div class="container-fluid padding">
	<div class="row text-center">
    	<div class="col-lg-4">
        	<h3>Our location</h3>
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4351.19249131942!2d24.11177918303782!3d56.95571847305823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96a8a0e931b27448!2sR%C4%ABgas%20Valsts%20Tehnikums!5e0!3m2!1slv!2slv!4v1575641566597!5m2!1slv!2slv" width="400" height="350" style="border:0;" allowfullscreen=""></iframe>
    	</div>
    	<div class="col-lg-4">
        	<h3>Our contacts</h3>
        	<p>+371 12341234</p>
        	<p>nooneLooks@this.com</p>
        	<p>100 Street Name</p>
        	<p>City, LV-1000</p>
			<a href="http://ulubele.org/category/mekle-majas/">Information source</a><br>
			<a href="https://github.com/janiskrengelis/prog2020">Github repository</a>
		</div>
		<div class="col-lg-4">
        	<h3>A short video about us</h3>
        	<iframe width="400" height="250" src="https://www.youtube.com/embed/Y5ygS16408w" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    	</div>
	</div>
	</div>
</footer>
</body>
</html>