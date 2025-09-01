<?php
 require_once 'db_connection.php';

    class homeModel extends Connector
    {
        function __construct()
        {
            parent:: __construct();
        }

        // Return rows with NUMERIC indexes to match your existing [1],[2],[4],[6] usage
        function homeCarousel()
        {
            
            $sql = "SELECT * FROM carousel_ft_db";
            $query = $this->conn->prepare($sql);
            $query->execute();

                return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
            }

        function homeHero()
        {
            $sql = "SELECT * FROM hero_ft_db";
            $query = $this->conn->prepare($sql);
            $query->execute();

                return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
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
?>