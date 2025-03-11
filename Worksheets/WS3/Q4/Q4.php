<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1>Associative Array</h1>
    <?php
    // Create an associative array
    $person = [
        "Name" => "John",
        "Age" => 25,
        "City" => "Valletta"
    ];

    // Display its keys and values using a foreach loop
    foreach ($person as $key => $value) {
        echo "$key: $value<br>";
    }
    ?>
</body>
</html>
