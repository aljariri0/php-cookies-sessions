<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['flash'] = "Form submitted successfully!";
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_SESSION['flash'])) {
    echo "<p><b>" . $_SESSION['flash'] . "</b></p>";
    unset($_SESSION['flash']);
}
?>
<form method="POST">
    <button type="submit">Trigger Flash Message</button>
</form>
