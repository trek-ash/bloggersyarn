<!DOCTYPE html>
<html>
<head>
	<title>Tailoring The Blog</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body style="overflow-x: hidden;">
<?php include 'header.php'; ?>
<div class="container-fluid" style="background-color: #f2f2f2">
<div>
<center><h2><strong>Blog Here</strong></h2></center>
Write Whatever You feel To share under the Appropriate section.Please Select the section under which you wish your blog to be published.
</div>
<br>
</div>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8"  style="background-color: #f2f2f2">
		<br>
		<ul class="nav nav-tabs">
			<li ><a href="#Brief" data-toggle="tab" style="color: black">Stitch The Blog</a></li>
			<li style="visibility: hidden;"><a href="#write" style="color: black;cursor: not-allowed;">Blog</a></li>
		</ul>	
		<div class="tab-content">
		<div class="tab-pane fade in active" id="Brief" >	
		<form class="form-group">
		<label for="Section">Your blog Will be indexed under following Sections</label><br>
			<div class="radio-inline">
				<input type="radio" name="Section">Literature
			</div>
			<div class="radio-inline">
				<input type="radio" name="Section">Business
			</div>
			<div class="radio-inline">
				<input type="radio" name="Section">Technical
			</div>	
			<div class="radio-inline">
				<input type="radio" name="Section">LifeStyle
			</div>		
			<div class="radio-inline">
				<input type="radio" name="Section">Other
			</div><br><br>
			<label for="Topic">Topic:</label>
			<input type="text" name="topic" placeholder="Topic you want for your blog" class="form-control ">
			<br>

			<label for="Brief">Brief your topic</label>
			<textarea rows="5" placeholder="Brief your topic in max.50 words" class="form-control"></textarea>			
		</form>		
				<br><br><center><a href="#write" data-toggle="tab" class="btn btn-md btn-success">Continue Writing Blog--></a></center>
				
		</div>

		<div id="write" class="tab-pane fade in">	
			<textarea class="form-control" rows="15" placeholder="Write your blog here........"></textarea>
			<button type="button" class="btn btn-md btn-success">Back</button>
			<button type="button" class="btn btn-primary btn-md" style="float: right;">Post Your Blog &nbsp &nbsp<i class="material-icons">send</i></button>
			<br>
			
			<br>
			<br>
			</div>	
		</div>		<br><br>
	</div>
	<div class="col-md-2"></div>
</div>
<br><br>
<?php include 'footer.php';?>
</body>
</html>