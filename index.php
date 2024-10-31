<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gryffindor</title>
</head>
<body>
    <h1>Welcome to Gryffindor</h1>
    <h2>Hostname Information</h2>
        <p id="hostname">
            <?php
                // Get the server hostname
                echo gethostname();
            ?>
        </p>
    <p><a href="php/register.php">Register</a></p>
    <p><a href="php/login.php">Login</a></p>
</body>
</html>
