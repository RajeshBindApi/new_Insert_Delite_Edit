<?php
    include('./app/init.php');
    $userController = new UserController(new UserModel($db));
    $data = $userController->getUser();
    if(isset($_POST['save_student']))
    {
        $userController->saveUser($_POST);
    }