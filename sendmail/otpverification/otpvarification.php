<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>OTP Varification</h2>
  <form action="config.php" method='post'>
    <div class="form-group">
    <div class="form-group">
      <label for="pwd">Name :</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Name" name="name">
    </div>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="mail">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>

<?php
