<html>
<?php
$_COOKIE["username"] = null;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="journal ">
    <meta name="description" content="journal ">
    <link rel="stylesheet" type="text/css" href="../assets/theme.css">
    <script src="../assets/themes.js"></script>
</head>

<body onload="changeTemp();">
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
        []
    </nav>
    <main>
        <?php
        $_COOKIE["theme"] = "light";

        ?>
        <?php

        $host = "localhost";
        $username = "aheisleycook";
        $password = "A714708o";
        $page = $_GET["post_id"]->url;
        /** @var TYPE_NAME $_COOKIE */
        echo "<b> current:$_COOKIE[username]";

        $db = new mysqli("localhost", $username, $password, "journal");
        $posts = $db->query("SELECT * FROM POSTS")->fetch_Array();
        echo "<sub>$posts[0]</sub> <h3>$posts[1]</h3> <p>$posts[2]</p> ";

        ?>
        <div class="theme-toggles">
            <button onclick="SetDarkMode();">dark</button>
            <button onclick="SetLightMode();">light</button>
        </div>
    </main>
</body>

</html>