<?php include "functions_database.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My MySQL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="col-sm-6">
			<h1>Read</h1>
			<pre>
				<?php Read();?>
			</pre>
		</div>
	</div>
</body>
</html>

