<?php
include('./app/init.php');
$userController = new UserController(new UserModel($db));
$data = $userController->getUser();
if (isset($_POST['save_student'])) {
    $userController->saveUser($_POST);
}
?>
<?php include('./thems/header.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h2>Search Student</h2>
                    <input type="text" id="search-bar" class="form-control rounded w-25" placeholder="Search in table....">
                    <h3><a href="add_user.php" class="btn btn-primary float-end">Add Student</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Full Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Course</td>
                                <td>Edit/Update</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody id="list">
                            <?php foreach ($data as $user) { ?>
                                <tr>
                                    <td><?php echo $user['id'] ?></td>
                                    <td class="td"><?php echo $user['name'] ?></td>
                                    <td class="td"><?php echo $user['email'] ?></td>
                                    <td class="td"><?php echo $user['phone'] ?></td>
                                    <td class="td"><?php echo $user['course'] ?></td>
                                    <td><a class="btn btn-warning td" href="update.php?update_id=<?php echo $user['id'] ?>">Edit/Update</a></td>
                                    <td><a class="btn btn-danger td" href="delete.php?delete_id=<?php echo $user['id'] ?>">Delete</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./thems/footer.php') ?>