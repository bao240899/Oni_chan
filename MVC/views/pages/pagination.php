<div class="pagination">
<?php if ($data["current_page"] > 3) {
    $first_page = 1; ?>
    <div class="a"> </div>
    <form class="form-inline" action="http://localhost:8080/Oni_chan/<?= $data["linkPagination"] ?>" method="POST">
        <input type="text" name="per_page" value="<?= $data['item_per_page'] ?>" hidden>
        <input type="text" name="page" value="<?= $first_page ?>" hidden>
        <input type="submit" name="btnSubmit" value="First">
    </form>
<?php } ?>
<?php for ($num = 1; $num <= $data["totalPage"]; $num++) { ?>
    <?php if ($num != $data["current_page"]) { ?>
        <?php if ($num > $data["current_page"] - 3 && $num < $data["current_page"] + 3) { ?>
            <div class="a"> </div>
            <form class="form-inline" action="http://localhost:8080/Oni_chan/<?= $data["linkPagination"] ?>" method="POST">
                <input type="text" name="per_page" value="<?= $data['item_per_page'] ?>" hidden>
                <input type="text" name="page" value="<?= $num ?>" hidden>
                <input type="submit" name="btnSubmit" value="<?= $num ?>">
            </form>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php if ($data["current_page"] < $data["totalPage"] - 2) {
    $end_page = $data["totalPage"]; ?>
    <div class="a"> </div>
    <form class="form-inline" action="http://localhost:8080/Oni_chan/<?= $data["linkPagination"] ?>" method="POST">
        <input type="text" name="per_page" value="<?= $data['item_per_page'] ?>" hidden>
        <input type="text" name="page" value="<?= $end_page ?>" hidden>
        <input type="submit" name="btnSubmit" value="Last">
    </form>
<?php } ?>
</div>
<style>
    .pagination{
        display: inline-block;
        display: flex;
        flex-flow: row wrap;
        align-items: center;
    }
    .form-inline {
        display: inline-block;
        display: flex;
        flex-flow: row wrap;
        align-items: center;
    }

    


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