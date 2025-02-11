<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
    <?php
        if (isset($_GET['age'])) {
            $age = $_GET['age'];

            if ($age >= 18) {
                echo "<p>Welcome to the website!</p>";
            } else {
                echo "<p>You must be at least 18 years old to access this site.</p>";
            }
        }
    ?>
</body>
</html>