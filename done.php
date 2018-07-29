<?php
  session_start(); 

    if(isset($_SESSION["username"]))
      header('Location: login_successful.php');

   
  $hello  = $_POST['new_password'];
  $world = $_SESSION['rt'];
  $conn = new mysqli("localhost","root","","overview");
  $sql = " UPDATE signup
SET 
    password = '$hello'
WHERE
    email = '$world' ";
    if($conn->query($sql))
    {
      ?>
      <script>
      function myfunction()
      {
  alert("Password Successfully Recovered");
}
  myfunction();
  </script>

  <?php   
   session_unset(); 


session_destroy(); 

	
}  ?>

