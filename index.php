<?php

//connection
$mysqli = new mysqli("localhost","portfolioroot","password","portfolioproject");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

//get data
$sql = "SELECT title, description FROM projects";

$result = $mysqli -> query($sql);

//$mysqli -> close();
?>


<head>
    <title>Totoro</title>
    <link href="inc/CSS/style.css" rel="stylesheet" type="text/css"></link>
    <link href="inc/JS/app.js" rel="script" type="text/javasript"></link>
</head>

<body>
    <article class="Container">

        <?php 
        include 'views/header.php';
        ?>

        <?php 
        include 'views/main.php';
        ?>

        <?php 
        include 'views/footer.php';
        ?>

    </article>
</body>

