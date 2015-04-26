<?php 
	
//CREATE A CONNECTION using Procedural Style
$conn = mysqli_connect('localhost', 'root', 'root','myDB');

//CHECK CONNECTION 
if (!$conn) {
	die('Connection failed: ('.mysqli_connect_errno().')'. mysqli_connect_errno());
} 
echo 'Success...' . mysqli_get_host_info($conn). "\n" ;


//$_SERVER is an array containing info (headers, paths, script locations);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty($_POST["firstName"])) {
	    $firstNameErr = "First Name Required";
	} else {$firstName = test_input($_POST["firstName"]);}

	if(empty($_POST["lastName"])) {
		$lastNameErr = "Last Name Required";
	} else {$lastName = test_input($_POST["lastName"]);}

	if(empty($_POST["email"])) {
		$emailErr = "Email Required";
	} else {$email = test_input($_POST["email"]);}

	if(empty($_POST["comment"])) {
		$comment = "";} else {
			$comment = test_input($_POST["comment"]);}

	if(empty($_POST["gender"])) {
		$genderErr = "Gender Required"; 
	} else {$gender = test_input($_POST["gender"]);}	

	
	}
	
	//trim function will strip unnecessary characters (extra space, tab, newline) from the user input data.
	//stripslashes function will remove (\) from the user input data
	//htmlspecialchars function will convert special characters to HTML entities to prevent 
	//..continue.. exploitation of the ($_SERVER["PHP_SELF"]) variable.
	function test_input($data) {
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;

}




//CREATE A DATABASE
//$sql = "CREATE DATABASE myDB";
//if ($conn->query($sql)=== TRUE){
//	echo "Database created successfully";
//} else { 
//	echo "Error creating database: " . $conn->error;
//	}
//$conn->close();

//SQL TO CREATE A TABLE
//$sql = "CREATE TABLE MyGuests (
//	id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//	firstName VARCHAR(30) NOT NULL,
//	lastName VARCHAR(30) NOT NULL, 
//	email VARCHAR(50) NOT NULL )";

//if ($conn->query($sql) === TRUE) {
//	echo "Table MyGuests created successfully";
//} else {echo "Error creating table: ". $conn->error;
//}
// $conn->close();

//INSERTING DATA INTO MySQL
$sql = "INSERT INTO MyGuests (firstName, lastName, email)
Values ('$firstName','$lastName', '$email')";

if ($conn->query($sql) === TRUE) { 
echo "New record created successfully";} else { echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();



//echo '<strong>Hello from the code</strong><br>';
//echo ("\nHow are you doing today?<br>");
//</p> means paragraph	
// phpinfo();
?>