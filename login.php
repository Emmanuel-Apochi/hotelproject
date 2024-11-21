<?php
session_start();

$correct_username = 'admin';
$correct_password_hash = password_hash('the_gate', PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && password_verify($password, $correct_password_hash)) {
        $_SESSION['logged_in'] = true;
        header('Location: admin_dashboard.php');  
        exit;
    } else {
        header('Location:login1.php');
        echo "Invalid credentials.";
    }
}

$hashed_password = password_hash('the_gate', PASSWORD_DEFAULT);

if (password_verify('group 3', $hashed_password)) {
}
?>

