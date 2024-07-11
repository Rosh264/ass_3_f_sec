<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Login</title>
</head>
<body>
 <h1>Login</h1>
 <form action="process_login.php" method="POST">
 <label >Username:</label>
 <input type="text" id="username" name="username" required>
 <label >Password:</label>
 <input type="password" id="password" name="password" required>
 <button type="submit">Login</button>
 </form>
</body>
</html>
-------PHP CODE---------
<?php
// Retrieve submitted username and password
$username = $_POST["username"];
$password = $_POST["password"];
// You can use the retrieved credentials for further processing,
// such as checking against a database or implementing a login logic...
echo "Username: $username<br>";
echo "Password: $password"; // avoid printing in real case..
?>