<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <style>
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Navigation Menu</h1>
    <div class="navbar">
        <?php
        $role = 'admin';

        if ($role == 'admin') {
            echo '<a href="#">Dashboard</a> <a href="#">Manage Users</a> <a href="#">Settings</a>';
        } elseif ($role == 'editor') {
            echo '<a href="#">Dashboard</a> <a href="#">Edit Content</a>';
        } elseif ($role == 'viewer') {
            echo '<a href="#">Dashboard</a> <a href="#">View Content</a>';
        } else {
            echo '<a href="#">Invalid role</a>';
        }
        ?>
    </div>
</body>
</html>
