<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Color Form</title>
    <?php
    $backgroundColor = 'white';
    if (isset($_POST['name']) && isset($_POST['color'])) {
        $name = $_POST['name'];
        $color = $_POST['color'];

        if (!empty($color)) {
            $backgroundColor = $color;
        }
    }
    ?>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['name'])) {
        if (empty($color)) {
            echo "<p style='color: red;'>Please select a color.</p>";
        } else {
            echo "<h1>Hello, $name!</h1>";
            echo "<p>Your favorite color is $color.</p>";
        }
    }
    ?>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="color">Favorite Color:</label>
        <select id="color" name="color">
            <option value="">Select a color</option>
            <option value="Red">Red</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
