<?php

class User extends BaseModel
{
    protected $tableName = 'users';
    public function check_user($username)
    {
        $sql = "SELECT * FROM users WHERE name='$username'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        if (count($user) > 0) {
            return $user[0];
        }
        return false;
    }
}
