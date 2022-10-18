<?php
include "connection.php";
$email=$_POST['email'];
$query="insert into subscribe values(NULL,'$email');";
if (mysqli_query($conn, $query)) {
    ?>
    <script>
      alert('Subscribe Successfully ');
      window.location.assign('index.html')
    </script>
      <?php
  
   
  } 
  else { 
    ?>
    
    <script>
      alert(' Error: something went wrong');
      window.location.assign('index.html')
    </script>
      <?php
  }




?>