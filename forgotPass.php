<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form {
    border: 3px solid #f1f1f1;
    font-family: Arial;
}

.container {
    text-align: center;
    padding: 20px;
    background-color: #f1f1f1;
}

input[type=text] {
    width: 50%;
    padding: 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    width: 25%;
    padding: 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    background-color: #4CAF50;
    color: white;
    border: none;
}
</style>
<body>
<br><br><br><br><br><br><br><br>
  <h2 style="text-align: center; color: red;">Forgot Password</h2>

<form action="emailVal.php" method="POST">
  <div class="container">
    <h2>Reset your password</h2>
    <p>You can reset your password by your e-mail. We'll send a link to reset your password.</p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Email address" name="mail" required>
  </div>

  <div class="container">
    <input type="submit" name="email_submit" value="Reset my password">
  </div>
</form>
</body>
</html>
