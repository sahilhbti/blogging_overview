<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Write Blog</title>
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
    if(isset($_SESSION["username"]))
    {
?>
	<p style="color: red;font-size: 18px;padding-left: 400px; background-color: white;"><b><?php 
	error_reporting(0);
     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
	     $x = $_POST['title'];
	     $y = $_POST['content'];
     $conn = new mysqli("localhost","root","","overview");
     $sql = "INSERT INTO blogs (blog_title,blog_content)
       VALUES ('$x', '$y')";
       if ($conn->query($sql) === TRUE) {
   echo "BLOG SUCCESSFULLY SUBMITTED";
} else {
    echo "Blog title already exist please change blog title";
}
   
   
  }

  
?></b></p>

   <div class="top">
      <p style="font-size: 50px;margin-left: 550px;color: white;margin-bottom: -10px;font-family: 'Abril Fatface';">OpenView<p>
      <i> <p style="font-size: 20px;margin-left: 650px;color: white;">place to express yourself</p><i>
</div>
<br>
      <form method="post" action="logout.php">
      <button type="submit" style="margin-left: 1200px;padding: 10px;border-radius: 50%; color: red;">Logout</button>
     </form>
        <p style="color: white;margin-left: 1100px;font-size: 25px;">Welcome</p>
        <p style="color: white;margin-left: 1100px;font-size: 25px;margin-top: 1px;"><?php echo $_SESSION["username"]; ?></p>

	  <form method="post"  action="<?=$_SERVER['PHP_SELF'];?>">

<h1 style="margin-left: 450px;color: red;">Title of the Blog<h1>
		
		 <textarea name="title" rows="1" cols="118" style="font-size: 20px;"></textarea>
<h1 style="color: red;margin-left: 450px;">Content of the Blog</h1>
      <textarea name="content" rows="30" cols="162" style="font-size: 15px;resize: vertical;"></textarea>
     <p  style="color: red;font-size: 20px;margin-left: 10px">Warning:Blog once submitted cannot be edited or deleted</p>
   
    <input type="submit" name="submit" style="margin-left: 550px;font-size: 28px;padding: 10px;border-radius: 50%;">
</form>
     	
     
<div class="footer" style="margin-top: 100px;height: 130px;" >
  		<p style="margin-left: 420px;font-size: 20px;padding-top: 20px;color: white;"><b>OpenView.com Place to Express Yourself</b></p>
  		<p style="margin-left: 320px;font-size: 20px;color: yellow;"><b>OpenView is a blogging site where people can express views on any topic</b></p>
  		<a href="https://www.facebook.com/sahil.srivastava.12935" ><b style="font-size: 20px;margin-left: 500px;">Follow us at Facebook</b></a>
  		<p>
  	</div>
  <p id = "check"></p>
<?php } 
else
{
  header('Location: blogging_homepage.php');
}
?>
</body>
</html>