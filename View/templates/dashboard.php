
<h2>Dashboard</h2>
<p>You will be logged out after <b>5 seconds</b> of inactivity.</p>

<?php if (!empty($message)) echo "<p>$message</p>"; ?>

<form method="post" action="dashboard.php">
    <textarea name="payroll" required placeholder="Enter payroll details"></textarea><br><br>
    <button type="submit" name="submit">Submit Payroll</button>
</form>

<br>
<a href="logout.php">Logout</a>

