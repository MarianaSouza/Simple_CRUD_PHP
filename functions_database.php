<?php include "db.php";?>

<?php

function Create(){

	//We put variables from other places, like $connection, inside a function by using global
	global $connection;

	if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
	$username = mysqli_real_escape_string($connection, $username);
	$password = mysqli_real_escape_string($connection, $password);

	//encrypting password
	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashF_salt = $hashFormat . $salt;
	$password = crypt($password, $hashF_salt);



	$query = "INSERT INTO users(username, password) ";
	$query .= "VALUES ('$username' , '$password')";

	$result = mysqli_query($connection, $query);
	if(!$result){
		die("Query failed." . mysqli_error());
		}else{
			echo "Record created succesfully";
		}
	}
}

function Read(){

	//We put variables from other places, like $connection, inside a function by using global
	global $connection;

	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("Query failed." . mysqli_error());
	}

	while ($row = mysqli_fetch_assoc($result)) {
	print_r($row);
	}
}

function showAllData(){
	//We put variables from other places, like $connection, inside a function by using global
	global $connection;

	$query = "SELECT * FROM users";
	//We use the mysqli built functions to stablish a connection (db.php) and perform the queries in our database.
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("Query failed." . mysqli_error());
	}

	while($row = mysqli_fetch_assoc($result)){
	$id = $row['id'];
	echo "<option value='$id'>$id</option>";
	}
}

function Update(){

	//We put variables from other places, like $connection, inside a function by using global
	global $connection;
	if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
	//In queries, when it comes to strings, use single quotes for the variables, like '$username' and $password
	$query = "UPDATE users SET ";
	$query .= "username = '$username', ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if(!$result){
		die("Query Failed." . mysqli_error($connection));
		}else{
			echo "Record updated succesfully";
		}
	}
}

function Delete(){

	//We put variables from other places, like $connection, inside a function by using global
	global $connection;

	if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	//In queries, when it comes to strings, use single quotes for the variables, like '$username' and $password
	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("Query Failed." . mysqli_error($connection));
		}else{
			echo "Record deleted succesfully";
		}

	}
}

?>

