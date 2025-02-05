<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
</head>
<body>
    <?php
        $firstName = "John";
        $lastName = "Doe";
        $firstNameEqual = "No";
        $firstNameIdentical = "No";

        if($firstName == $lastName){
            $firstNameEqual = "Yes";
            $firstNameIdentical = "Yes";
        }

        echo "Full Name: ". $firstName ." ". $lastName . "<br>";
        echo "Is first name equal to last name? ". $firstNameEqual . "<br>";
        echo "Is first name identical to last name? ". $firstNameIdentical . "<br>";


        ?>
</body>
</html>