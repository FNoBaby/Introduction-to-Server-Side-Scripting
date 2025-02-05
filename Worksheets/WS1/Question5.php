<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 5</title>
</head>
<body>
    <?php
        $quantity = 5;
        echo "Initial quantity: $quantity<br>";

        // Post-increment
        echo "After increment: " . $quantity++ . "<br>";
        // Value is incremented after printing, so we print it again to show the correct value
        echo "Current quantity: $quantity<br>";

        // Post-decrement
        echo "After decrement: " . $quantity-- . "<br>";
        // Value is decremented after printing, so we print it again to show the correct value
        echo "Current quantity: $quantity<br>";

        // Pre-increment
        echo "After pre-increment: " . ++$quantity . "<br>";

        // Pre-decrement
        echo "After pre-decrement: " . --$quantity . "<br>";
    ?>
</body>
</html>