<form method="GET">
    Search: <input type="text" name="query" required>
    <button type="submit">Search</button>
</form>

<?php
if (isset($_GET['query'])) {
    echo "You searched for: " . htmlspecialchars($_GET['query']);
}
?>
