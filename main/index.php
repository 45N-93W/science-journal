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


        .nav-list .nav-list a {
            display: inline-block;
            list-style-type: none;
        }
    </style>
    <script>

    </script>
</head>

<body>
    <header>main page</header>
    <nav class="nav-menu">
        <ul class="nav-list">
            <li class="active">
                <a href="../main">Home</a>
            </li>
            <li>
                <a href="../about">About</a>
            </li>
            <li>
                <a href="../settings">Settings</a>
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
        foreach($posts as $post) {
            echo $post;
        }
        ?>
        <br>
        <button onclick="SetDarkMode();">dark</button>
        <button onclick="SetLightMode();">light</button>
    </main>
</body>

</html>