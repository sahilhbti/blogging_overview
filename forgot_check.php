<?php 
  session_start();
  $_SESSION['rt'] = $_POST['email_id'];
  $_SESSION['ps'] = $_POST['recovery'] ;
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
			.top
		{
             background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz8GpYQLZ2rlwwOymaqDq-fIzD4tt8gK-cx1H6c68l4qd9sr5kpQ);
         }
        	.footer
		{
			background-image: url(http://sfwallpaper.com/images/background-textures-29.jpg);
		}

		}
	</style>
	<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
	<title>Email send successfully</title>
</head>
<?php 
    if(isset($_SESSION["username"]))
      header('Location: login_successful.php');

    ?>
    
<body style="background-image: url(https://media.giphy.com/media/TxVVB6PfWMjE4/giphy.gif);">
	  <div class="top">
      <p style="font-size: 50px;margin-left: 550px;color: white;margin-bottom: -10px;font-family: 'Abril Fatface';">OpenView<p>
      <i> <p style="font-size: 20px;margin-left: 650px;color: white;">place to express yourself</p><i>
</div>
          <?php
              $e  = $_POST['email_id'];
             $r  =   $_POST['recovery'];
              $conn = new mysqli("localhost","root","","overview");
              $sql  =  "SELECT COUNT(*) FROM signup WHERE email  = '$e' AND rec_email = '$r'";
             // $sql  =  "SELECT COUNT(*) FROM signup WHERE email  = '$e' AND password = '$p'";
              $result = $conn->query($sql);
               while($row = $result->fetch_assoc())
             {
             $GLOBALS['check']   = $row["COUNT(*)"];
            } 
      if ($check == '1') {
      	?>
      	<form  style="background-image: url(http://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-08.jpg);margin-left: 450px;width: 400px;margin-top: 110px;height: 220px;" action="done.php" method="post"><br>
      	<p style="margin-left: 30px;font-size: 25px;font-family: Abril Fatface;background-color: red;margin-right: 60px;margin-left: 50px;">Enter the new password</p>
      	<input style="margin-left: 50px; font-size: 20px" type="text" name = "new_password" title="password should be 6 or more character long" pattern=".{6,}"><br><br>
      	<button style="margin-left: 50px;font-size: 20px;" type="submit">submit</button>
      	</form>

    <?php }?>
    	<div class="footer" style="margin-top: 40px;height: 130px;" >
  		<p style="margin-left: 420px;font-size: 20px;padding-top: 20px;color: white;"><b>OpenView.com Place to Express Yourself</b></p>
  		<p style="margin-left: 320px;font-size: 20px;color: yellow;"><b>OpenView is a blogging site where people can express views on any topic</b></p>
  		<a href="https://www.facebook.com/sahil.srivastava.12935" ><b style="font-size: 20px;margin-left: 500px;">Follow us at Facebook</b></a>
  		<p>
  	</div>
</body>
</html>