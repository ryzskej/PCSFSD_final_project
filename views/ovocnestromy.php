<?php Core\View::render("header");
Core\View::render("menu"); ?>

    
    <div class="all-items">

    <?php 
        
        foreach($trees as $key => $value)
        {
            if($_GET["where"] == $value["whereIsMature"])
            {
                echo ' 
                <div class="one-tree-card">
                    <h2>Název: '.$value["tree"].'</h2>
                    <p>Popis: '.$value["description"].'</p>
                    <p>Doba zrání: '.$value["whereIsMature"].'</p>
                </div>
            ';
            }
        }
    
    ?>
    </div>

</body>
</html>