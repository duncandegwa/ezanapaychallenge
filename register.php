<?php include 'DB.php'; ?>

<?php

// create a variable
$name=$_POST['name'];

$password=$_POST['password'];
$email=$_POST['email'];

//Execute the query


mysqli_query($connect,"INSERT INTO personal_details (name,email,password)
		        VALUES ('$name','$email','$password')");
				
	if(mysqli_affected_rows($connect))
	{
	echo '<p>You have been successfully Added to our Register</p>';

} else 
{
	echo '<p>Try register again an error occurred <p><br>';

	echo '<a href="register.html">Go Back</a>';
	echo mysqli_error ($connect);
}
