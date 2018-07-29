<?php 
session_start();
 $GLOBALS['e']  = $_SESSION["username"];
     $GLOBALS['p'] = $_SESSION["password"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>view required blog</title>
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
<body  style="background-image: url(https://media.giphy.com/media/TxVVB6PfWMjE4/giphy.gif);">
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
<br><br>
     <form method="post" action="logout.php">
     	<button type="submit" style="margin-left: 1200px;padding: 10px;border-radius: 50%; color: red;">Logout</button>
     </form>
     <p style="margin-left: 1100px;font-size:20px;color: white;">  Welcome <?php  echo $_SESSION["username"];?></p>
     <br>
     <p style="color: red;font-size: 25px;">Blog Title </p>
     <textarea rows="2" cols="164"  readonly style="color: white;background-color: red;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;resize: vertical;font-size: 15px;resize: vertical;"> <?php echo $_POST['guess']; ?></textarea>
     <p style="color: red; font-size: 25px; ">Blog Content</p>
     <textarea   rows="30" cols="164" style="color: white;background-color: rgb(51, 16, 116);padding-top: 5px;padding-bottom: 5px;padding-left: 5px;resize: vertical;font-size: 15px;" readonly><?php
  
   $GLOBALS['getvariable'] = $_POST['guess'];
   $conn = new mysqli("localhost","root","","overview");
   $sql  =  "SELECT blog_content FROM blogs WHERE blog_title = '$getvariable'";
   $result = $conn->query($sql);
  /* if ($conn->query($sql) === TRUE) {
   echo "BLOG SUCCESSFULLY SUBMITTED";
} else {
    echo $conn->error;
}*/

    $row = mysqli_fetch_assoc($result);

        echo $row["blog_content"];
 
?> </textarea>
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

