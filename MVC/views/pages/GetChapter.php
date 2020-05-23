<div class="container">
    <br>
    <h2 style="text-align: center">Chapter List</h2> <br>

    <table class="table table table-striped ">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Manga ID</th>
            <th>Content</th>
            <th>View</th>
            <th>Last Update</th>
            <th>Chapter</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        while ($fields = mysqli_fetch_array($data["Chapter"])) {
        ?>
            <tr>
                <td><?= $fields[0] ?></td>
                <td><?= $fields[1] ?></td>
                <td><?= $fields[2] ?></td>
                
                <td>
                    <textarea rows="5" cols="20" readonly><?= $fields[3] ?></textarea>
                </td>
                <td><?= $fields[4] ?></td>
                <td><?= $fields[5] ?></td>
                <td><?= $fields[6] ?></td>

                <td><a href="../EditChapter/<?= $fields[0] ?>" class="btn btn btn-outline-secondary">Edit</a></td>

                <td>
                    <a href="../DeleteChapter/<?= $fields[2] ?>/<?= $fields[0] ?>" onclick="return confirm('Are you sure to remove?')" class="btn btn btn-outline-secondary">Delete</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php if (isset($_SESSION["notification_AddChapter"]) && $_SESSION["notification_AddChapter"] == "success") { ?>
  <script>
    alert("add chapter success");
    <?php $_SESSION["notification_AddChapter"] = "off" ?>
  </script>
<?php } else if (isset($_SESSION["notification_AddChapter"]) && $_SESSION["notification_AddChapter"] == "fail") { ?>
  <script>
    alert("add chapter fail");
    <?php $_SESSION["notification_AddChapter"] = "off" ?>
  </script>
<?php } ?>