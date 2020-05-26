<div class="container">
    <br>
    <h2 style="text-align: center">User Information List</h2> <br>
    <table class="table table table-striped ">
        <tr>
            <th>ID</th>
            <th>Password</th>
            <th>User Name</th>
            <th>Avatar</th>
            <th>Gender</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        while ($fields = mysqli_fetch_array($data["User"])) {
        ?>
            <tr>
                <td><?= $fields["userID"] ?></td>
                <td><?= $fields["password"] ?></td>
                <td><?= $fields["userName"] ?></td>
                <td>
                    <textarea rows="3" cols="20" readonly><?= $fields["avatar"] ?></textarea>
                </td>
                <td>
                    <?php if ($fields["gender"] == 0) {
                        echo "Male";
                    } else {
                        echo "Female";
                    }
                    ?>
                </td>
                <td>
                    <!--<a href="edituser/<?= $fields[0] ?>" class="btn btn btn-outline-secondary">Edit</a>-->
                    <a href="deleteuser/<?= $fields[0] ?> " onclick="return confirm('Are you sure to remove?')" class="btn btn btn-outline-secondary">Delete</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
</div>