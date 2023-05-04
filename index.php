<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="styles.css">

</head>
<body>
<div class="wrapper">
  <h2>Login Form</h2>
  <form action="processor.php" method="POST" id="myform">
    <div class="input_field">
  <label>Username:</label>
  <input type="text" placeholder="username" id="username" name="username" required>
  </div>

  <div class="input_field">
  <label>Password:</label>
  <input type="password" placeholder="password" id="password" name="password" required>

  <div class="btn">
  <button type="submit" name="submit">Log In</button>
  </div>
</form>
</div>

</body>
</html>
