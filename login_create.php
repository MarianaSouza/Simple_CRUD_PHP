<?php include "functions_database.php";?>
<?php Create();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My MySQL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<div class="container" align="center">
		<div class="col-sm-6">
			<h1 class='text-center'>Create</h1>
			<form action="login_create.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Create">
			</form>
		</div>
	</div>
</body>
</html>
