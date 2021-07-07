<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>All movies</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div class="header">
      <h2>Movies that you booked!</h2>
    </div>
    <div class="content">
      <?php
      $p=$_SESSION['username'];
      $sql = "SELECT * FROM book WHERE username='$p'";
 $result = mysqli_query($db, $sql);
 if ($result->num_rows > 0){
   echo "<table><tr><th>Movie name</th><th>Movie Id</th><th>number of tickets</th><th>Username</th></tr>";
   while($row = $result->fetch_assoc()) {

       echo "<tr><td>".$row["movienam"]."</td><td>" . $row["id"]. "</td><td>" . $row["noofticketss"]. "</td><td>" . $row["username"]. "</td></tr>";
   }
   echo"</table>";

 }
       ?>
         <p><a href="login.php?logout='1'" style="color: red;">Logout</a></p><br>
         <p><a href="index.php?logout='1'" style="color: red;">Go Back</a></p>

</div>

  </body>
</html>
