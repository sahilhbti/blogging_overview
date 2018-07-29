<?php 
    session_start();
         $GLOBALS['e']  = $_SESSION["username"];
     $GLOBALS['p'] = $_SESSION["password"];
     
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Welcome to overview blogging</title>
	<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
	<style>
			.top
		{
             background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz8GpYQLZ2rlwwOymaqDq-fIzD4tt8gK-cx1H6c68l4qd9sr5kpQ);
             
		}
		.footer
		{
			background-image: url(http://sfwallpaper.com/images/background-textures-29.jpg);
		}
		.middle
		{

		}
	</style>
</head>
<body style="background-image: url(https://media.giphy.com/media/TxVVB6PfWMjE4/giphy.gif);" > 
   <div class="top">
      <p style="font-size: 50px;margin-left: 550px;color: white;margin-bottom: -10px;font-family: 'Abril Fatface';">OpenView<p>
      <i> <p style="font-size: 20px;margin-left: 650px;color: white;">place to express yourself</p><i>
      </div>
       <form method="post" action="logout.php">
     	<button type="submit" style="margin-left: 1200px;padding: 10px;border-radius: 50%; color: red;">Logout</button>
     </form>

 
  <?php 
    
     // echo $e;
     // echo $p;
    //$e = $_POST['email_login'];
   //  $p = $_POST['Password_login'];
       $conn = new mysqli("localhost","root","","overview");
      $sql  =  "SELECT COUNT(*) FROM signup WHERE email  = '$e' AND password = '$p'";
      $result = $conn->query($sql);
      
      
       while($row = $result->fetch_assoc())
       {
          $GLOBALS['check']   = $row["COUNT(*)"];
       } 
      if ($check == '1') {
       

?>   
       <div>
  	       <p style="margin-left: 1100px;font-size:20px;color: white;">  Welcome <?php  echo $e;?></p>
  </div>
      <form action="write_post.php" method="post"> 
      	<button type="submit" style="margin-left: 500px; font-size: 25px;font-family: 'Abril Fatface';border-radius: 50%;padding: 10px; color: red;">WRITE BLOG</button>
      </form>
      <form method="post" action="view_blog.php">
      	<br>
      	<br>
      	<button type="submit" style="margin-left: 500px; font-size: 25px;font-family: 'Abril Fatface';border-radius: 50%;padding: 10px;color: blue;">VIEW BLOGS</button>
      </form>
  

      
<div class="footer" style="margin-top: 85px;height: 130px;" >
  		<p style="margin-left: 420px;font-size: 20px;padding-top: 20px;color: white;"><b>OpenView.com Place to Express Yourself</b></p>
  		<p style="margin-left: 320px;font-size: 20px;color: yellow;"><b>OpenView is a blogging site where people can express views on any topic</b></p>
  		<a href="https://www.facebook.com/sahil.srivastava.12935" ><b style="font-size: 20px;margin-left: 500px;">Follow us at Facebook</b></a>
  		<p>
  	</div>
<?php   }
else
{
       session_unset(); 


session_destroy(); 
	header('Location: blogging_homepage.php');
    
	
}
?>


</body>
</html>