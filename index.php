<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>User registration system using PHP and MySQL</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  </head>
  <body>
    <div class="header">
      <h2>Home page</h2>
    </div>
    <div class="content">
      <?php if(isset($_SESSION['success'])): ?>
        <div class="error success">
          <h3>
          <?php echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
        </div>
      <?php endif ?>
      <?php if(isset($_SESSION["username"])): ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <form method="post" action="index.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <button type="submit" class="btn" name="ticketbook">Ticket Booking</button>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="allmovies">View all movies</button>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="view">View my bookings</button>
    </div>
  </form>
        <p><a href="login.php?logout='1'" style="color: red;">Logout</a></p>
      <?php endif ?>


    </div>

  </body>
</html>
