



<main>

    <ul>
        <?php
        while ($row = $result -> fetch_row()) {
        printf ("<li><h2>%s</h2><p>%s</p></li> \n", $row[0], $row[1]);
        }
        $result -> free_result();
        ?>

    </ul>

</main>