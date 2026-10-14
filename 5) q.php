<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    echo "Submitted Data: $fname $lname ($email)";
}
?>
<form method="POST">
    First Name: <input type="text" name="fname" required>
    Last Name: <input type="text" name="lname" required>
    Email: <input type="email" name="email" required>
    <button type="submit">Submit</button>
</form>
