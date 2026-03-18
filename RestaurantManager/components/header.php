<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pub/css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="restaurant-header">
        <nav id='menu'>
            <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
            <ul>
                <li><a href='menu.php'>Menus</a></li>
                <li><a href='tables.php'>Tables</a></li>
            </ul>
        </nav>
        <script src="./pub/js/tables.js"></script>
    </header>