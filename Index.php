<!DOCTYPE HTML>
<html>
<head>
	<style>
	.error {color:#FF0000;}
	</style>
</head>
<body>
<h1> Contact us </h1>

<p><span class="error">* Required field.</span></p>

<p>	
<!--<form action="welcome.php" method="post">-->
<!--The ($_SERVER["PHP_SELF"]) variable is a super global variable
that returns the filename of the currently executing script. So in this case,
sends the submitted form data to the page itself instead 
of jumping to another page-->
<form method="POST" action="indexInsert.php">	

First Name: <input type="text" name="firstName">
<span class="error">* <?php echo $firstNameErr;?></span>
<br><br>

Last Name: <input type="text" name="lastName">
<span class="error">* <?php echo $lastNameErr;?></span>
<br><br>

E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>

Comment: <br><textarea name="comment" rows="5" cols="40"></textarea>
<br><br>

Gender:
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" value="Submit">

</form>



</p>
</body>
</html>




