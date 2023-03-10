<?php
    include('user.php');?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="./css/jquery-3.6.3.js"></script>
        <title>Document</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <input type="text" id="search-bar" class="mt-3" placeholder="Search for table...."><h3><a href="add_user.php" class="btn btn-primary float-end">Add User</a></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                                <td>ID</td>
                                <td>Full Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Class</td>
                                <td>Edit/Update</td>
                                <td>Delete</td>
                            </tr>
                            <?php foreach($data as $user){?>
                            <tr id="list">
                                <td><?php echo $user['id'] ?></td>
                                <td class="td"><?php echo $user['fullname'] ?></td>
                                <td class="td"><?php echo $user['email'] ?></td>
                                <td class="td"><?php echo $user['phone'] ?></td>
                                <td class="td"><?php echo $user['class'] ?></td>
                                <td><a class="btn btn-warning td" href="update.php?update_id=<?php echo $user['id'] ?>">Edit/Update</a></td>
                                <td><a class="btn btn-danger td" href="delete.php?delete_id=<?php echo $user['id'] ?>">Delete</a></td> 
                            </tr>
                            <?php } ?>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>