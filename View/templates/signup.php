<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>

<h2>Signup</h2>

<?php if (!empty($message)) echo "<p>$message</p>"; ?>

<form method="post" action="signup.php">
    <input type="text" name="name" required placeholder="Full Name"><br><br>
    <input type="email" name="email" required placeholder="Email"><br><br>
    <input type="text" name="phone" required placeholder="Phone Number"><br><br>
    <input type="password" name="password" required placeholder="Password"><br><br>
    <input type="password" name="confirm_password" required placeholder="Confirm Password"><br><br>
    <button type="submit" name="signup">Sign Up</button>
</form>

<p>Already have an account? <a href="login.php">Sign In</a></p>

</body>
</html>
