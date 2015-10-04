<?php
?>


<html>
<head>
<meta charset="utf-8">
<title>Azam</title>
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Mobile Specific Metas -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Libs CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/ionicons.css" rel="stylesheet">
<link href="../css/prettyPhoto.css" rel="stylesheet" type="text/css"
	media="all">
<!-- Template CSS -->
<link href="../css/style.css" rel="stylesheet">
<!-- Google Fonts -->
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,300,200,600,600italic,700">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic">
<!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
      <script src="./js/respond.js"></script>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

<script type="text/javascript" src="../js/addtransport.js"></script>
</head>
<body data-spy="scroll" data-target=".navigation">
	<!-- Loader -->
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<!-- Start Logo / Text -->
				<a class="navbar-brand text-logo" href="#"><i
					class="ion-ios-grid-view"></i>Brand</a>
				<!-- End Logo / Text -->
			</div>
			<!-- Navigation Links -->
			<div class="navigation navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="../../index.html">Home</a></li>
					<li><a href="../transport/transport.html">Transport</a></li>
					<li><a href="../builder/builder.html">Builder</a></li>
					<li><a href="brickcompany.html">BricksCompany</a></li>
					<li><a href="../finance/finance_home.html">Finance</a></li>
					<li><a href="#">View record</a></li>
					<li><a href="#">Extra</a></li>
					<li><a href="#">sign out</a></li>
				</ul>
			</div>
			<!-- End Navigation Links -->
		</div>
	</nav>
	<!-- End Navigation -->
	<!-- Top Banner -->
	<!-- End Top Banner -->
	<!-- Top Form -->
	<!-- End Top Form -->
	<!-- Introduction -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Add new Builders</h2>
				</div>
			</div>
		</div>
		<hr>


		<form action="../db_code/insertStudentInfo.php" method="post"
			enctype="multipart/form-data">

			<div class="container">
				<div class="row">
					<div class="col-md-12" id="bank">
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="exampleInputfname">Office Name</label>
								<input class="form-control" id="bname" placeholder="Office name"
									type="text" name="bname" maxlength="30" required>
							</div>

							<div class="form-group">
								<label class="control-label" for="exampleInputfname">Contact
									Person</label> <input class="form-control" id="name"
									placeholder="Name" type="text" name="name" maxlength="30"
									required>
							</div>

							<div class="form-group">
								<label class="control-label" for="exampleInputcontact">Contact</label>
								<input class="form-control" id="contact"
									placeholder="Contact number" type="tel" name="contact"
									maxlength="10" required pattern="\d{10}">
							</div>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="exampleInputdob">Office Area</label>
								<input class="form-control" id="area" placeholder="area"
									type="text" name="area" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="exampleInputSex">City</label>
								<input class="form-control" id="city" name="city"
									placeholder="city" type="text" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="exampleInputBgrp">Phone</label>
								<input class="form-control" id="phone" placeholder="Phone"
									type="text" name="phone" maxlength="10" pattern="\d{10}">
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<hr>
					<div class="row">
						<div class="col-md-12 text-right">
							<input type="button" value="Add" class="btn btn-warning "
								onclick="addRow();"> <input type="button" value="Delete"
								class="btn btn-warning " onclick="deleteRow();">
						</div>
					</div>
					<hr>
					<div class="row text-center ">
						<div class="col-md-12">
							<table class="table table-bordered" id="mytable">
								<thead>
									<tr class="info">
										<th>#</th>
										<th>Vehicle No.</th>
										<th>Type</th>
										<th>Capacity</th>
										<th>Driver</th>
										<th>Driver Number</th>
										<th>Rate</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="col-md-1">1</td>
										<td class="col-md-1"><input type="text" class="form-control"
											name="sitename" value=""></td>
										<td class="col-md-1"><input type="text" class="form-control"
											name="area0" value=""></td>
										<td class="col-md-1"><input type="text" class="form-control"
											name="sitename" value=""></td>
										<td class="col-md-3"><input type="text" class="form-control"
											name="sitename" value=""></td>
										<td class="col-md-2"><input type="text" class="form-control"
											name="sitename" value=""></td>
										<td class="col-md-2"><input type="text" class="form-control"
											name="sitename" value=""></td>
										<td class="col-md-1"><input type="checkbox"
											class="form-control" name="check1"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>



			<div class="section">
				<div class="container">
					<div class="row text-center ">
						<div class="col-md-12">
							<button type="submit" class="btn btn-blue">Submit</button>
						</div>
					</div>
				</div>
			</div>

		</form>
	</div>
	<section class="footer footer-top">
		<div class="container">
			<div class="row">
				<!-- Footer Intro -->
				<div class="col-md-4 col-sm-12"></div>
				<!-- End Footer Intro -->
				<!-- Company Links -->
				<div class="col-md-2 col-sm-3 col-xs-6">
					<h3>Company</h3>
					<ul class="quick-links">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Team</a></li>
						<li><a href="#">Jobs<span class="label label-info">We're hiring!</span></a></li>
					</ul>
				</div>
				<!-- Quick Links -->
				<div class="col-md-2 col-sm-3 col-xs-6">
					<h3>Terms</h3>
					<ul class="quick-links">
						<li><a href="#">Disclaimer</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
				<!--Documentation Links -->
				<div class="col-md-2 col-sm-3 col-xs-6">
					<h3>Documentation</h3>
					<ul class="quick-links">
						<li><a href="#">Product Help</a></li>
						<li><a href="#">Developer API</a></li>
						<li><a href="#">Product Markdown</a></li>
					</ul>
				</div>
				<!-- Quick Links -->
				<div class="col-md-2 col-sm-3 col-xs-6">
					<h3>Quick Links</h3>
					<ul class="quick-links">
						<li><a href="#">Affiliate</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Members Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Top Footer -->
	<!-- Footer Bottom -->
	<footer class="footer footer-sub">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<p>© Az. All Right Reserved</p>
				</div>
				<div class="col-md-6 col-sm-12">
					<p class="copyright">
						Made with <i class="ion-heart"></i>by <a href="#"> Az</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Bottom -->
	<!-- Start Scroll To Top -->
	<a href="#" class="scroll-up"><i class="ion-android-arrow-up"></i></a>
	<!-- End Scroll To Top -->
	<!-- Start Js Files -->
	<script type="text/javascript"
		src="../../code.jquery.com/jquery-2.1.0.min.js"></script>
	<!--jQuery is a Javascript library that greatly reduces the amount
      of code that you must write.-->
	<script type="text/javascript">
		window.jQuery
				|| document
						.write('<script src="../js/jquery-2.1.0.min.js"><\/script>')
	</script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<!--Packed with many functionalies such as carousel slider, responsive
      attributes, tabs, drop downs, buttons, and many other features-->
	<script src="../js/modernizr.min.js" type="text/javascript"></script>
	<!--Modernizr is an open-source JavaScript library that helps
      you build the next generation of HTML5 and CSS3-powered websites.-->
	<script src="../js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- Script for Lightbox Image -->
	<script src="../js/custom.js" type="text/javascript"></script>
	<!-- Script File containing all customizations -->
	<!-- End Js Files -->
	<!-- Mirrored from websites.simplesphere.net/shar/headline-middle-button.html
      by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Aug 2015 16:59:01 GMT
      -->
	</div>


</body>
</html>