

<main>


        <?php  

            echo $rendercontent->video($video);

            echo $rendercontent->content($project, 'title');

            echo $rendercontent->content($project, 'body');

            echo $rendercontent->carousel();
        ?>



</main>

