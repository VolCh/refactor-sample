<?php
require_once 'DBConnector.php';
require_once 'User.php';
require_once 'UserRepository.php';

$user_repository = new UserRepository(new DBConnector);
$users = $user_repository->getAll();

include 'index.php.html';