<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['username']) && $_POST['username'] === 'admin' && $_POST['password'] === '123') {
    $_SESSION['user'] = $_POST['username'];
}

if (isset($_SESSION['user'])) {
    echo "Welcome to the protected page, " . htmlspecialchars($_SESSION['user']) . "!";
    echo '<form method="POST"><button name="logout">Logout</button></form>';
} else {
    echo '<form method="POST">
        Username: <input type="text" name="username" required>
        Password: <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>';
}
?>
