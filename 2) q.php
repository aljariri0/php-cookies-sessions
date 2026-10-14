<?php
$visits = isset($_COOKIE['visits']) ? $_COOKIE['visits'] + 1 : 1;
setcookie('visits', $visits, time() + (3600 * 24), "/");
echo "Total visits: " . $visits;
?>
