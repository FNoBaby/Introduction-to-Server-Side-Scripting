<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> User Details Result Page </h2>

    <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Age: $age <br>";
        ?>
</body>
</html>