<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
     $(document).ready(function(){
    $("button").click(function(){
        $("#div1").fadeToggle("slow");
        $("#div2").fadeToggle("slow");
        $("#div3").fadeToggle("slow");
    });
    });
</script>
	<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
	<title>Welcome to OpenView Blogging</title>
	<style>
		.top
		{
             background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz8GpYQLZ2rlwwOymaqDq-fIzD4tt8gK-cx1H6c68l4qd9sr5kpQ);
		}
		
		.middle form
		{
			float: left;
		}
		.footer
		{
			background-image: url(http://sfwallpaper.com/images/background-textures-29.jpg);
		}
		.fight
		{

		}
		#div1{
			display: none;
		}
		#div2
		{
			display: none;
		}
		#div3
		{
			display: none;
		}

	</style>
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
<div class = "fight">
	<button style="font-size: 30px;margin-left: 600px;margin-top: 30px;border-radius: 50%;padding: 8px;">Overview</button>
	<div id="div1" style="background-color:red;font-size: 25px;padding-left:300px;margin-top: 30px;font-family: 'Abril Fatface'; ">OpenView is blogging site where you read and write blogs</div><br>
<div id="div2" style="background-color:green;font-size: 25px;padding-left: 430px;font-family: 'Abril Fatface';">Express best view to the world</div><br>
<div id="div3" style="background-color:blue;font-size: 25px;padding-left: 430px;font-family: 'Abril Fatface';">Just SignUp and start blogging</div>
	</div>
 
   <div class="middle">

   	 <form style="background-image: url(http://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-08.jpg);margin-left: 90px;width: 350px;margin-top: 110px;height: 300px;" action="intermediate.php" method="post" >
   	 	   <br>
   	 	    <b style="margin-left: 100px;font-size: 25px;background-color: rgb(255, 0, 0);"> LOGIN </b><br>
   	 	    <br>
   	 	    <br>
   	       <b style="margin-left: 50px;font-size: 20px;"> Email</b><br>
   	       <br>
   	 	  <input type="text" name="email_login" style="margin-left: 50px;font-size: 18px;margin-top: -40px;" required><br>
          <b style="margin-left: 50px;font-size: 20px;">Password </b> <br>
          <br>
          <input type="Password" name="Password_login" style="margin-left: 50px;font-size: 18px;" required><br>
          <a href="forgot.php" style="margin-left: 50px;">Forget Password</a>
           <br>
           <br>
           <input type="submit" name="submit" style="margin-left: 90px;font-size: 20px;" >
         
   	 </form>
  	 <form style="background-image: url(http://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-08.jpg);margin-left: 450px;width: 350px;margin-top: 110px;height: 480px;" action="signup.php" method="post">
   	 	   <br>
   	 	    <b style="margin-left: 120px;font-size: 25px;background-color: rgb(255, 0, 0);"> SIGN UP </b><br>
   	 	    <br>
   	 	    <br>
   	       <b style="margin-left: 50px;font-size: 20px;"> E-Mail</b><br>
   	       <br>
   	 	  <input type="text" name="email_signup" style="margin-left: 50px;font-size: 18px;margin-top: -40px;" required><br><br>
          <b style="margin-left: 50px;font-size: 20px;">DOB</b> <br>
          <br>
          <input type="text" name="DOB" style="margin-left: 50px;font-size: 18px;margin-top: -40px;" placeholder="DD-MM-YYYY" required><br><br>
          <b style="margin-left: 50px;font-size: 20px;">Enter your nicename(recovery)</b><br>
          <input type="text" name="Recovery_email" style="margin-left: 50px;font-size: 18px;margin-top: 15px;" required><br><br>
          <b style="margin-left: 50px;font-size: 20px;">Password</b><br>
          <br>
          <input type="Password" name="password_signup" style="margin-left: 50px;font-size: 18px;margin-top: -40px;" pattern=".{6,}" title="password must contain 6 or more characters" required><br><br><br>
          <input type="Submit" name="submit" style="margin-left: 100px;margin-bottom: 5px;font-size: 20px;">
   	 </form>
  	</div>
  	<br>
  	<div class="footer" style="margin-top: 600px;height: 130px;" >
  		<p style="margin-left: 420px;font-size: 20px;padding-top: 20px;color: white;"><b>OpenView.com Place to Express Yourself</b></p>
  		<p style="margin-left: 320px;font-size: 20px;color: yellow;"><b>OpenView is a blogging site where people can express views on any topic</b></p>
  		<a href="https://www.facebook.com/sahil.srivastava.12935" ><b style="font-size: 20px;margin-left: 500px;">Follow us at Facebook</b></a>
  		<p>
  	</div>

</body>
</html>





   