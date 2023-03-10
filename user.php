<?php
    include('./app/init.php');
    $userController = new UserController(new UserModel($db));
    $data = $userController->getUser();
    if(isset($_POST['save_student']))
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $class = $_POST['class'];

        $userController->saveUser($_POST);
    }