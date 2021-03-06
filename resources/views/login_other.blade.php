	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>webnews | Berita Kriminal terkini</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="apple-mobile-web-app-capable" content="yes" >
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/login.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	</head>

	<body>

		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner navlogin">
			<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#">Admin Content</a>
			<div class="nav-collapse">
						<ul class="nav">
				<li class="divider"></li>
						<li><h5>Senin, 22 Januari 2013</h5></li>
						</ul>
						<ul class="nav pull-right">
						<li><a href="#">&laquo;Kembali ke Situs</a></li>
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pilihan <b class="caret"></b></a>
							<ul class="dropdown-menu">
							<li><a href="#">Ke Admin Web</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						</ul>
					</div>
			</div>
			</div>
			</div>	

		<div class="container isi">
			<div class="row">
				<div class="span6">
					<form class="form-horizontal">
						<legend>Login Admin</legend>
						<div class="control-group">
							<label class="control-label" for="inputUsername">Username</label>
							<div class="controls">
							<input type="text" id="inputUsername" placeholder="Username">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Password</label>
							<div class="controls">
							<input type="password" id="inputPassword" placeholder="Password">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Level</label>
							<div class="controls">
							<select name="level">
								<option value="">- pilih level -</option>
								<option value="editor">Editor</option>
								<option value="author">Author</option>
								<option value="member">Member</option>
							</select>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							<label class="checkbox">
							<input type="checkbox"> Remember me
							</label>
							<button type="submit" class="btn btn-primary">Sign in</button>
							</div>
						</div>
						</form>
						<hr />
						<p><a href="#">Lost Yout password</a></p>
				</div>

				<div class="span6">
					<h2>Selamat Datang, Admin Content</h2>
					<div class="accordion" id="accordion2">
							<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								Hak Akses Admin Content
								</a>
							</div>
							<div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
								<div class="accordion-inner">
								Hak Akses Admin diberikan kepada Administrator web Memoarema yang mempunyai username dan password. Harap tidak memberikan username dan password ke orang lain untuk menghindari hal-hal yang tidak diinginkan
								</div>
							</div>
							</div>
							<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								Wewenang Admin
								</a>
							</div>
							<div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
								<div class="accordion-inner">
								<ol>
									<li>Bertugas menjaga content situs</li>
									<li>Mengatur Tata Letak Situs</li>
									<li>Menambah, Mengedit, dan Menghapus User Lain.</li>
								</ol>
								</div>
							</div>
							</div>
							<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								Panduan Pengelolaan Situs
								</a>
							</div>
							<div id="collapseThree" class="accordion-body in collapse" style="height: auto; ">
								<div class="accordion-inner">
									<p>Panduan pengelolaan situs dapat diunduh <a href="#">disini</a></p>
									<p>Tutorial Penggunaan Framework YII dapat dilihat <a href="#">disini</a></p>
								</div>
							</div>
							</div>
							</div>
				</div>

			</div>
		</div>
		
		<footer align="center">
			<h5>&copy; WEBNEWS - Powered by webnews Media</h5>
		</footer>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
			<script src="js/jquery.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<!--
		<script src="js/bootstrap-modal.js"></script>
			<script src="js/bootstrap-scrollspy.js"></script>
			<script src="js/bootstrap-popover.js"></script>

			<script src="js/bootstrap-button.js"></script>
			<script src="js/bootstrap-collapse.js"></script>
			<script src="js/bootstrap-carousel.js"></script>
			-->

	</body>
	</html>
