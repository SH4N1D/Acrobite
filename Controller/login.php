<?php
include "../Model/config.php";
include "../View/templates/login.php";


if (isset($_POST['submit_login'])) {
    $login_input = trim($_POST['login_input']);
    $password = $_POST['password'];

   


    $sql = "SELECT * FROM users WHERE email = ? OR phone = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login_input, $login_input);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {


    

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['last_activity'] = time();
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<p style='color:red'>Wrong password!</p>";
        }
    } else {
        echo "<p style='color:red'>User not found!</p>";
    }
}
?>
