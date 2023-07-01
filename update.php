<?php 
    include('./app/init.php');
    $userController = new UserController(new UserModel($db));
    $id = $_GET['update_id'];
    if(isset($_POST['update_student']))
    {
        $userController->updateUser($_POST,$id);
    }
    $data = $userController->getupdateUser($id);
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Data Creation in student Ensert</title>
</head>
<body>
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
                                <input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email"  value="<?php echo $data['email'] ?>" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone"  value="<?php echo $data['phone'] ?>" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label>class</label>
                                <input type="text" name="course"  value="<?php echo $data['course'] ?>" class="form-control"/>
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
</body>
</html>