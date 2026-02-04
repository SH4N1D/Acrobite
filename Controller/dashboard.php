<?php
include "../Model/config.php";
include "../View/templates/dashboard.php";


if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
}

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 5)) {
    session_unset();
    session_destroy();
    header("Location:login.php");
    exit();
}

$_SESSION['last_activity'] = time();

$message = "";

if (isset($_POST['submit'])) {
    $payroll = $_POST['payroll'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO attendance (user_id, payroll) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $payroll);
    $stmt->execute();

    $message = "Payroll saved!";
}

