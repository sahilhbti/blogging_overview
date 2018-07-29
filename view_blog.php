<?php 
session_start();
$GLOBALS['e']  = $_SESSION["username"];
     $GLOBALS['p'] = $_SESSION["password"];
?>
<!DOCTYPE html>
<html>
<head>
		<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
	<title>view all blogs</title>
	<style>
		.top
		{
             background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz8GpYQLZ2rlwwOymaqDq-fIzD4tt8gK-cx1H6c68l4qd9sr5kpQ);
		}
		.footer
		{
			background-image: url(http://sfwallpaper.com/images/background-textures-29.jpg);
		}
	</style>
</head>
<body style="background-image: url(https://media.giphy.com/media/TxVVB6PfWMjE4/giphy.gif);">
	<?php  
          $conn = new mysqli("localhost","root","","overview");
      $sql  =  "SELECT COUNT(*) FROM signup WHERE email  = '$e' AND password = '$p'";
      $result = $conn->query($sql);
      
      
       while($row = $result->fetch_assoc())
       {
          $GLOBALS['check']   = $row["COUNT(*)"];
       } 
        if ($check == '1') {
	?>
	<div class="top">
      <p style="font-size: 50px;margin-left: 550px;color: white;margin-bottom: -10px;font-family: 'Abril Fatface';">OpenView<p>
      <i> <p style="font-size: 20px;margin-left: 650px;color: white;">place to express yourself</p><i>
</div>
     <form method="post" action="logout.php">
     	<button type="submit" style="margin-left: 1200px;padding: 10px;border-radius: 50%; color: red;">Logout</button>
     </form>
     <p style="margin-left: 1100px;font-size:20px;color: white;">  Welcome <?php  echo $_SESSION["username"];?></p>
     <br>
     <p  style="font-family: Abril Fatface;color: white;font-size: 35px;margin-left: 550px;color: red;"> Latest 100 Blogs</p>
     <p style="color: white;font-size: 30px;">*****************************************************************************************</p>
    <p style="color: white;"> <?php 

       $conn = new mysqli("localhost","root","","overview");
       $sql = "Select blog_title from blogs LIMIT 100 OFFSET 1";
       
       $result = $conn->query($sql);
       if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
                $GLOBALS['x']  = $row["blog_title"];
                $_SESSION[$x] =  $x;
    	?>
    	<form method="post" action="view_blogget.php" target="_blank" >
    		<input  type="text" name="guess" value = "<?php echo $x  ?>" readonly  style = "margin-left: 10px;width: 1200px;color: red;background-color: rgb(98, 164, 248);font-size: 15px;" >
    		<button type="submit">Open</button>
    	</form>
    	 <br>
    	<?php 
    }
}

     ?>  </p>
     <div class="footer" style="margin-top: 20px;height: 130px;" >
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