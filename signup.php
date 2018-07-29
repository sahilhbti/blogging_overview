<!DOCTYPE html>
<html>
<head>
	<title>SignUp Successfully</title>
	<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
	<style>
		
	</style>
</head>
<body style="background-image: url(https://media.giphy.com/media/TxVVB6PfWMjE4/giphy.gif);">
<p style="color: red;font-size: 50px;font-family: 'Abril Fatface';margin-top: 300px;margin-left: 380px;">	<?php
      $conn = new mysqli("localhost","root","","overview");
     $GLOBALS['email_signup'] = $_POST['email_signup'];
     $GLOBALS['DOB']  = $_POST['DOB']; 
     $GLOBALS['Rec_email'] = $_POST['Recovery_email'];
     $GLOBALS['password'] = $_POST['password_signup'];
     $sql = "INSERT INTO signup (email,DOB,rec_email,password)
VALUES ('$email_signup', '$DOB', '$Rec_email','$password')";

if ($conn->query($sql) === TRUE) {
   echo "Account created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?></p>

</body>
</html>