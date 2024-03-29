<?php
class UserRepository
{
    private $db_connector;

    public function __construct(DBConnector $db_connector)
    {
        $this->db_connector = $db_connector;
    }

    public function getAll($limit=10)
    {
        $this->db_connector->query("SELECT * FROM users LIMIT {$limit}");
        if($this->db_connector->get_num_rows()){
            while($user = $this->db_connector->fetch_row()){
                $users[] = new User($user);
            }
        } else {
            $users = array();
        }
        return $users;
    }
}