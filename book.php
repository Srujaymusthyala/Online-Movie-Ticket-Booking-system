<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Book Ticket</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Book Ticket</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Moviename</label>
  	  <input type="text" name="moviename" placeholder="moviename">
  	</div>
  	<div class="input-group">
  	  <label>Select number of tickets</label>
  	  <input type="number" name="nooftickets" placeholder="number of tickets">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="con">Book!</button>
  	</div>
  </form>
</body>
</html>
