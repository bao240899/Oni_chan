<div class="container">
    <br>
    <h2 style="text-align: center">Manga List</h2> <br>
    <table class="table table table-striped ">
        <tr>
            <th>comment ID</th>
            <th>User ID</th>
            <th>MangaID</th>
            <th>Content</th>
            <th>date</th>
            <th>Action</th>
        </tr>
        <?php
        while ($fields = mysqli_fetch_array($data["comment"])) {
        ?>
            <tr>
                <td><?= $fields[0] ?></td>
                <td><?= $fields[1] ?></td>
                <td><?= $fields[2] ?></td>
                <td><?= $fields[3] ?></td>
                <td><?= $fields[4] ?></td>
                <td>
                    <a href="./deleteComment/<?= $fields[0] ?>" onclick="return confirm('Are you sure to remove?')" class="btn btn btn-outline-secondary">Delete</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
</div>