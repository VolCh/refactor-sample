<?php
include 'DBConnector.php';
$DB = new DBConnector;
$DB->query('SELECT * FROM users LIMIT 10');
if($DB->get_num_rows()){
    while($user = $DB->fetch_row()){
        $users[] = $user;
    }
} else {
    $users = array();
}
?>
<h1>Пользователи</h1>
<?
foreach ($users as $user) {
    echo '<p>'.$user['name'].'</p>';
}
?>