<!DOCTYPE html>
<html>
<head>
	<title>Join the thread</title>
	<link rel="stylesheet" type="text/css" href="join.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container-fluid" style="margin: 0;padding: 4vh; background-color: #e6e6e6">
<center><strong><h2>Join the thread to weave the diffrent ideas into a single strong strand.</h2></strong></center>
<br>
Initiate yourself to share your thoughts with the people across globe and enjoy the community of people.Blog your ideas under your intrest sections and blog on daily or weekly basis and get on our top members list and get appreciation,prizes and several exciting 
</div>
<div class="row" style="margin-top: 0;">

	<div class="col-md-2"></div>
	<div class="col-md-8" style="background-color: #f2f2f2">
	<center><strong><h2>Get Started!!</h2></strong></center>
		
		<form style="padding: 2px" action="bloghere.php">
		<br>
		<ul class="nav nav-tabs">
			<li><a href="#home" data-toggle="tab" style="color: black">Personal Details</a></li>
			<li><a href="#Qualify" data-toggle="tab" style="color: black;">Qualifications</a></li>
			<li><a href="#Signup" data-toggle="tab" style="color: black;">Join The Strand</a></li>
		
		</ul>
		<div class="tab-content">
			<div class="container-fluid tab-pane fade in active" id="home">
			<br>
			<div class="form-group" >
				<label for="First-Name">Full Name:</label>
			<input type="text" name="Fname" class="form-control" placeholder="Enter name">
			<br><label for="First-Name">Blogging-Tag:</label>
			<input type="text" name="Bname" class="form-control" placeholder="Enter any nickname you prefer to be called by">
			<br><label for="Area">Blog Intrest Area</label><br>
			<div class="checkbox-inline">
			<input type="checkbox" name="">Technical</div>
			<div class="checkbox-inline">
			<input type="checkbox" name="">Literature</div>
			<div class="checkbox-inline">
			<input type="checkbox" name="">Business</div>
			<div class="checkbox-inline">
			<input type="checkbox" name="">Lifestyle</div>

			</div>
				<div class="form-group">
					<label for="prefer">Preference as a blogger</label>	
					<br><div class="radio-inline"><input type="radio" name="preferance">Daily</div>
					<div class="radio-inline"><input type="radio" name="preferance">Weekly</div>
					<div class="radio-inline"><input type="radio" name="preferance">Freely</div>
					<br>
				</div>
				<div class="form-group">
					<label for="email">Phone-Number</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Phone-Number">
				</div>
					<center><a href="#Qualify" data-toggle="tab" class="btn btn-success">Next</a></center><br>
			</div>
			<div class="container-fluid tab-pane fade in" id="Qualify" style="height: auto">
				<br>
				<label for="joinas">Join as a:</label>
				<select class="form-control">
				<option>Begineer</option>
				<option>Professional</option>
				</select><br>
				<label for="Education">Educational Qualification</label>
				<SELECT class="form-control">
					<option>School</option>
					<option>Graduate</option>
					<option>Post-Graduate</option>
				</SELECT>	
				<br>
				<label for="declare">Declaration</label><br>
				<input type="checkbox" name="declaration" required> I hereby declare that I will be fully responsible for the blogs I write,share on this website.		
					<br><br>
					<center><a href="#Signup" data-toggle="tab" class="btn btn-success">Next</a></center><br>


			</div>
			<div class="container-fluid tab-pane fade in" id="Signup">
			<br>
			**Please enter E-mail address and password below to create your account
				<br>	<br>
					<label for="email">E-mail:</label>
					<input type="text" class="form-control" name="E-mail" placeholder="Enter E-mail" required>
					<br><label for="pwd">Password:</label>
					<input type="text" class="form-control" name="pwd" placeholder="Enter Password" required>
					<span class="help-box">**Length of password must be atleast 8 characters.<br>**Your password must include atleast a number,special symbol,uppercase letter,lowercase letter</span>
					<br><br>
					<center><button class="btn btn-success">Enroll</button></center><br>
			</div>
		</div>
		</form>
			
	
	</div>
	<div class="col-md-2"></div>

</div>
<br><br><br>
<?php  include 'footer.php' ?>

</body>
</html>