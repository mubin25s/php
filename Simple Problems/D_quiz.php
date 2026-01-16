<!DOCTYPE html>
<!--
    PROBLEM:
    Create a simple login system.
    1. Display a form with "username" and "password" fields.
    2. When the form is submitted, check if the username is "admin" and the password is "1234".
    3. If they match, display "Login Successful".
    4. Otherwise, display "Invalid Username or Password".
-->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["username"] === "admin" && $_POST["password"] === "1234") {
        $message = "Login Successful";
    } else {
        $message = "Invalid Username or Password";
    }
}
?>

<form method="post">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required>
    <br><br>
    <input type="password" name="password" placeholder="Password" required>
    <br><br>
    <button type="submit">Login</button>
</form>

<p><?php echo $message; ?></p>

</body>
</html>