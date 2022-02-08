<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="journal ">
    <meta name="author" content="athepony">
    <title>scientific Journal -Settings</title>
    <script src="../assets/themes.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/theme.css">
</head>

<body>
    <header>about page</header>
    <nav class="nav-menu">
        <ul class="nav-list">
            <li class="active">
                <a href="\">Home</a>
            </li>
            <li>
                <a href="..\about">About</a>
            </li>
            <li>
                <a href="..\settings">Settings</a>
            </li>

        </ul>
    </nav>
    <main>
        <div class="page">
            <h1>about me</h1>
            <p> i am a programmer called athepony have a another but i would reather not use it.</p>
            <p>created for n43w92</p>
            <br>
            <button onclick="SetDarkMode();">dark</button>
            <button onclick="SetLightMode();">light</button>


        </div>

    </main>
</body>

</html>