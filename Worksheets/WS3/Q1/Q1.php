<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits List</title>
</head>
<body>
    <h1>Fruits</h1>
    <?php
    // Create an indexed array of fruits
    $fruits = ["Apples", "Bananas", "Cherries"];

    // Display each fruit using a for loop
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i] . "<br>";
    }
    ?>
</body>
</html>
