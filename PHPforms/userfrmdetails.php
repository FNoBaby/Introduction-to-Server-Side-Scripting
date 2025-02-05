<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form Details</title>
</head>
<body>
<form method="POST">
            <h2> User Details Page</h2>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required> <br/>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required> <br/>
            
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required> <br/>
        
            <input type="submit" name="submit" value="Submit"/>
        </form> 

        <?php

                $name = $_POST['name'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                
                if (isset($_POST['submit'])) {
                echo "Name: $name <br>";
                echo "Email: $email <br>";
                echo "Age: $age <br>";

                var_dump($_POST);
            }
        ?>
</body>
</html>