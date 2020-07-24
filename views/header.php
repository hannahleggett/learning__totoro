<header>
    <ul>
        <?php
            

            foreach($menu as $menuitem)
            {
                echo $rendercontent->menu($menuitem['id'], $menuitem['title']);
            }


        ?>

    </ul>
</header>
