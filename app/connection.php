<?php
    include('config.php');
    $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);