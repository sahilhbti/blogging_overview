 <?php
   session_start();
   
   if(session_destroy()) {
      header("Location: blogging_homepage.php");
   }
?>