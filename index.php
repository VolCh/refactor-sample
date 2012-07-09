<h1>Пользователи</h1>
<?
$DB = new DBConnector;
$DB->query(‘SELECT * FROM users LIMIT 10’);
if($DB->get_num_rows()){
    while($user = $DB->fetch_row()){
        echo ‘<p>’.$user[‘name’].’</p>’;
    }
}
?>