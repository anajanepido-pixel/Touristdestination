<?php
// Import database
require_once 'db_connection.php';

// Class
class authModel extends Connector
{
    function __construct()
    {
        parent::__construct();
    }
    #------ login credential
    function getUsername($username)
    {
        $sql = "SELECT `username`, `password` FROM `admin_users` WHERE `username` = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $username);
        $stmt->execute();

        return $stmt->fetchall(PDO::FETCH_ASSOC); // returns ['username' => ..., 'password' => ...] or false
    }
}
