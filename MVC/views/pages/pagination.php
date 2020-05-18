<?php if($data["current_page"]>3){  $first_page=1;?>
    <a href="?per_page=<?= $data['item_per_page'] ?>&page=<?= $first_page ?>"><button>First</button></a>
<?php }?>
<?php for ($num = 1; $num <= $data["totalPage"]; $num++) { ?>
    <?php if ($num != $data["current_page"]) { ?>
        <?php if($num>$data["current_page"]-3&&$num< $data["current_page"]+3){?>
        <a href="?per_page=<?= $data['item_per_page'] ?>&page=<?= $num ?>"><button><?= $num ?></button></a>
        <?php }?>
    <?php } else { ?>
        <strong class="current-page page-item"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php if($data["current_page"]<$data["totalPage"]-2){  $end_page=$data["totalPage"];?>
    <a href="?per_page=<?= $data['item_per_page'] ?>&page=<?= $end_page ?>"><button>Last</button></a>
<?php }?>
<style>
    .page-item {
        border: 1px solid #ccc;
        padding: 5px 9px;
        color: #000;
    }

    .current-page {
        background: #000;
        color: #FFF;
    }
</style>