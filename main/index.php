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
        /** @var TYPE_NAME $_COOKIE */
echo "<b> current:$_COOKIE[username]";
        $db = new mysqli("localhost", $username, $password, "journal");
        $posts = $db->query("SELECT * FROM POSTS")->fetch_Array();
        echo "$posts[1] $posts[2] ";

        ?>
        <button onclick="setDarkTheme();">dark</button>
        <button onclick="setLightTheme();">light</button>
    </main>
</body>

</html>