<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'test' && $password === '123') {
        echo "<p>Login successful!</p>";
    } else {
        echo "<p>Invalid username or password.</p>";
    }
}
?>
