

<?php 
  session_start();
   echo $_SESSION["username"] = $_POST['email_login'];
  echo   $_SESSION["password"] = $_POST['Password_login'];
  
  header('Location: login_successful.php');
 
?>