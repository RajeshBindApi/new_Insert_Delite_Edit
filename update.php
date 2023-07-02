<?php
include('./app/init.php');
$userController = new UserController(new UserModel($db));
$id = $_GET['update_id'];
if (isset($_POST['update_student'])) {
    $userController->updateUser($_POST, $id);
}
$data = $userController->getupdateUser($id);
?>
<?php include('./thems/header.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>Data Creation in student Ensert
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">

                    <form method="post">
                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo $data['email'] ?>" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" value="<?php echo $data['phone'] ?>" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>class</label>
                            <input type="text" name="course" value="<?php echo $data['course'] ?>" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_student" class="btn btn-primary">Update Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./thems/footer.php') ?>