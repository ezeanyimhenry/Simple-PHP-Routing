<?php 
if (isset($_GET['service'])) {
    $serviceFile = __DIR__ . '/services/' . basename($_GET['service']) . '.php';

    if (file_exists($serviceFile)) {
        include($serviceFile);
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
</head>
<body>
    <h1>ALL SERVICES</h1>
    <ul>
        <a href="/services?service=web-dev"><li>Web Dev</li></a>
        <a href="/services?service=mobile-dev"><li>Mobile Dev</li></a>
        <a href="/services?service=designs"><li>Designs</li></a>
    </ul>
</body>
</html>