<?php

include 'classes/db.php';
include 'classes/render.php';

$id = 1;

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
} 

//connection
$bob = new db; 
$rendercontent = new render;

//get data
$project = $bob->query($id, 'projects');
$menu = $bob->all('projects');

//get data - video
$video = $bob->query($project[5], 'videos');

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

