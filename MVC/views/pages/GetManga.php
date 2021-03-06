<div class="container">
    <br>
    <h2 style="text-align: center">Manga List</h2> <br>
    <table class="table table table-striped ">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Author</th>
            <th>Artists</th>
            <th>CategoryID</th>
            <th>Description</th>
            <th>View</th>
            <th>Rate</th>
            <th>CoverImage</th>
            <th>Chapter</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        while ($fields = mysqli_fetch_array($data["Manga"])) {
        ?>
            <tr>
                <td><?= $fields[0] ?></td>
                <td><?= $fields[1] ?></td>
                <td><?= $fields[2] ?></td>
                <td><?= $fields[3] ?></td>
                <td><?= $fields[4] ?></td>
                <td>
                    <textarea rows="5" cols="20" readonly><?= $fields[5] ?></textarea>
               </td>
                <td><?= $fields[6] ?></td>
                <td><?= $fields[7] ?></td>
                <td>
                    <textarea rows="5" cols="15" readonly><?= $fields[8] ?></textarea>
                </td>
                <td><a href="./getchapter/<?= $fields[0] ?>" class="btn btn btn-outline-secondary">chapter</a>
                    <br><br>
                    <a href="./addchapter/<?= $fields[0] ?>" class="btn btn btn-outline-secondary">add chapter</a>
                </td>
                <td><a href="./editmanga/<?= $fields[0] ?>" class="btn btn btn-outline-secondary">Edit</a></td>

                <td>
                    <a href="./deleteManga/<?= $fields[0] ?>" onclick="return confirm('Are you sure to remove?')" class="btn btn btn-outline-secondary">Delete</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php if(isset($_SESSION["notification_DeleteManga"])&&$_SESSION["notification_DeleteManga"]=="success"){?>
  <script>
    alert("Delete manga success");
    <?php $_SESSION["notification_DeleteManga"]="off"?>
  </script>
<?php }else if(isset($_SESSION["notification_DeleteManga"])&&$_SESSION["notification_DeleteManga"]=="fail"){?>
  <script>
    alert("Delete manga fail, delete chapter first");
    <?php $_SESSION["notification_DeleteManga"]="off"?>
  </script>
<?php }?>

<?php if(isset($_SESSION["notification_AddManga"])&&$_SESSION["notification_AddManga"]=="success"){?>
  <script>
    alert("add manga success");
    <?php $_SESSION["notification_AddManga"]="off"?>
  </script>
<?php }else if(isset($_SESSION["notification_AddManga"])&&$_SESSION["notification_AddManga"]=="fail"){?>
  <script>
    alert("add manga fail");
    <?php $_SESSION["notification_AddManga"]="off"?>
  </script>
<?php }?>
