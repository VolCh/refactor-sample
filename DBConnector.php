<?php
class DBConnector
{
    private $users;

    public function query($query)
    {
        for ($i=1; $i<=4; $i++) {
            $this->users[] = array('name' => 'Username' . $i);
        }
    }

    public function get_num_rows()
    {
        return count($this->users);
    }

    public function fetch_row()
    {
        $each = each($this->users);
        return $each['value'];
    }
}