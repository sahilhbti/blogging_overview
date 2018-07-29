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
     <form style="background-image: url(http://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-08.jpg);margin-left: 500px;width: 400px;margin-top: 110px;height: 350px;" action="forgot_check.php" method="post">
     	<br>
     	<p style="margin-left: 80px;font-family: Abril Fatface;font-size: 25px;background-color: red;margin-right: 120px;">Forgot Password</p>
     	<b><p style="margin-left: 80px;font-size: 20px;">Enter your email id</p></b>
     	<input type="text" name="email_id" style="margin-left: 80px;font-size: 20px;" required><br>
     	<b><p style="margin-left: 80px;font-size: 20px;">Enter Recovery code</p></b>
     	<input type="text" name="recovery" style="margin-left: 80px;font-size: 20px" required><br><br>
     	<button type="submit" style="margin-left: 80px;font-size: 20px;">submit</button>
     </form>
  	<br>
  	<div class="footer" style="margin-top: 20px;height: 130px;" >
  		<p style="margin-left: 420px;font-size: 20px;padding-top: 20px;color: white;"><b>OpenView.com Place to Express Yourself</b></p>
  		<p style="margin-left: 320px;font-size: 20px;color: yellow;"><b>OpenView is a blogging site where people can express views on any topic</b></p>
  		<a href="https://www.facebook.com/sahil.srivastava.12935" ><b style="font-size: 20px;margin-left: 500px;">Follow us at Facebook</b></a>
  		<p>
  	</div>

</body>
</html>
 