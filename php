<!DOCTYPE html>
<html>
<head>
    <title>PHP Web Page</title>
</head>
<body>
    <header>
        <h1>Welcome to My PHP Web Page</h1>
    </header>

    <main>
        <p>Current Date and Time:</p>
        <p><?php echo date("Y-m-d H:i:s"); ?></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Name</p>
    </footer>
</body>
</html>
