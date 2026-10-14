<?php
if (isset($_POST['color'])) {
    setcookie('bg_color', $_POST['color'], time() + 3600, "/");
    $_COOKIE['bg_color'] = $_POST['color']; 
}
$bgColor = $_COOKIE['bg_color'] ?? 'white';
?>
<body style="background-color: <?php echo htmlspecialchars($bgColor); ?>;">
    <form method="POST">
        <select name="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
        </select>
        <button type="submit">Save</button>
    </form>
</body>
