<html>
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="journal ">
    <meta name="description" content="journal ">
    <style type="text/css">
        header {
            color: white;
            background: gray;
        }

        .nav-menu .nav-list {
            display: inline-block;
            padding: 4px;
        }

        .nav-list .nav-list li a {
            display: inline-block;
            list-style-type: none;
        }
    </style>
    <script>
        function SetDarkTheme() {
            page = document.getElementById("page");
            page.style.background = "black";

        }

4       function setlightTheme() {            
        page = document.getElementById("page");
        page.style.background = "white";
        }
    </script>
</head>

<body id="page">
    <header>about page</header>
    <nav class="nav-menu">
        <ul class="nav-list">
            <li class="active">
                <a href="./main">Home</a>
            </li>
            <li>
                <a href="./about">About</a>
            </li>
            <li>
                <a href="./settings">Settings</a>
            </li>

        </ul>
    </nav>
    <main>
        <?php

        $host = "localhost";
        $username = "aheisleycook";
        $password = "A714708o";
        $db = new mysqli("localhost", $username, $password, "journal");
        $posts = $db->query("SELECT * FROM POSTS")->fetch_Array();
        echo "$posts[1] $posts[2] ";

        ?>
        <button onclick="setDarkTheme();">dark</button>
        <button onclick="setLightTheme();">light</button>
    </main>
</body>

</html>