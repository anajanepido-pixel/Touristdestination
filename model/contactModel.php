<?php
require 'db_connection.php';

class contactModel extends Connector
{
    function __construct()
    {
        parent::__construct();
    }

    function sendSms($post)
    {
        $sql = "INSERT  INTO contact_messages (name, message, email, contact, date_sent)
                VALUES (?, ?, ?, ?, ?)";

        $query = $this->conn->prepare($sql);

        $query->bindValue(1, $post['name']);
        $query->bindValue(2, $post['mssg']);
        $query->bindValue(3, $post['email']);
        $query->bindValue(4, $post['contact']);
        $query->bindValue(5, date("y_m_d H:i:s"));

        $query->execute();

        return $this->conn->lastInsertId();
    }
}
