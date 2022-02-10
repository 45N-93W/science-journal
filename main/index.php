<!doctype html>
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
        $post = $_COOKIE["post_id"];
        $host = "localhost";
        $username = "aheisleycook";
        $password = "A714708o";
        $post_id = 0;
        $db = new mysqli("localhost", $username, $password, "journal");
        if($post == null) {

            $posts = $db->query("SELECT * FROM POST where  POST_ID=1")->fetch_Array();
        }
        else {
            $posts = $db->query("SELECT * FROM POST where  POST_ID=$post")->fetch_Array();
        }

        echo "<sub>$posts[0]<sub></sub> $posts[1]";
        ?>
        <br>
        <br>
        <button onclick="SetDarkMode();">dark</button>
        <button onclick="SetLightMode();">light</button>
        <a href="../main/next.php">next</a>

        </button>
    </main>
</body>

</html>