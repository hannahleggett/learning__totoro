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

    //flickety
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

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
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="inc/JS/app.js" rel="script" type="text/javasript"></link>
</body>

