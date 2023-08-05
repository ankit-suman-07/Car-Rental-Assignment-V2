<?php
// Start the session
session_start();

// Include 'config.php' which may contain database connection or other configurations
@include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        // Check if 'admin_name' session variable is set
        if (isset($_SESSION['admin_name'])) {
            // Display the 'admin_name' if it is set
            echo $_SESSION['admin_name'];
            echo '<button>Sample Button</button>';
        } else {
            // Display "No user" if 'admin_name' is not set
            echo "No user";
        }
        ?>
    </div>
</body>
</html>
