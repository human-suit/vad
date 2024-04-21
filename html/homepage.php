<?php
include "bd.php";

$result = mysqli_query($conn, 'SELECT * FROM `doma`');



?>
<div class="cards">
    <?php
        while ($dom = mysqli_fetch_assoc($result)){
    ?>

    <div class="card card_v_v">
        <img src="./assets/img/image-11.png" class="img_v_v" alt="img1"/>
        <div class="hi">
            <h1><?php echo $dom['title_name']; ?></h1>
        </div>
        <div class="intro">
            <h1></h1>
            <p><?php echo $dom['opis_base']; ?></p>
            <p><?php echo $dom['opis_rabot']; ?></p>
        </div>
    </div>
    <?php
        }
    ?>
    
</div>