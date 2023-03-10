<?php 
    include('./app/init.php');
    $userController = new UserController(new UserModel($db));
    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];
        $userController->deleteUser($id);
    }
    
?>