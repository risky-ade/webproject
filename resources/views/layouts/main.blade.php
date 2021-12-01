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
		<link href="css/admin.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body>
    @include('partials/navbar')

    <div class="container-fluid mt-4">
        @yield('container')
    </div>


		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/ckeditor/ckeditor.js"></script>
        <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
        </script>
</body>
</html>
