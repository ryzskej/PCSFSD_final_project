<div class="one-tree-card">
    <?php if (isset($value["img_card"])) { ?>
        <img src="./resources/img/img-card/<?php echo $value["img_card"] ?>" alt="<?php echo $value["name"] ?>"><?php } ?>
    <h2><?php echo $value["name"] ?></h2>
    <p><?php echo $value["short_descr"] ?></p>
    <form action="detail" class="form-button-detail">
        <input type="hidden" name="id" value="<?php echo $value["id"] ?>">
        <button class="one-button one-button--detail">Detail</button>
    </form>
</div>