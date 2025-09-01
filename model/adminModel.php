<?php
//import database
require_once 'db_connection.php';

//class
class adminModel extends Connector
{
    function __construct()
    {
        parent:: __construct();
    }

    function getNotSeenMsg()
    {
        //getl the carousel featured destination
        $sql = "SELECT * FROM contact_messages WHERE is_seen = '0' ORDER BY id DESC";

        $query = $this->conn->prepare($sql); //prepare the query
        $query->execute(); //run the query

        return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return
    }

    function getSeenMsg()
    {
        //getl the carousel featured destination
        $sql = "SELECT * FROM contact_messages WHERE is_seen = '1' ORDER BY id DESC";

        $query = $this->conn->prepare($sql); //prepare the query
        $query->execute(); //run the query

        return $query->fetchall(PDO::FETCH_ASSOC); //get all the data and return

    }

    function viewsmsg($msg_id)
    {
        //get hero featured destination sql
        $sql = "SELECT * FROM contact_messages WHERE id =?";

        $query = $this->conn->prepare($sql); //prepare the query
        $query->bindParam(1, $msg_id);
        $query->execute(); //run the query

        return $query->fetch(PDO::FETCH_ASSOC); //get all the data and return
    }

    function deletemsg($id)
    {
        //get hero featured destination sql
        $sql = "DELETE FROM contact_message WHERE id = ?";

        $query = $this->conn->prepare($sql); //prepare the query
        $query->bindParam(1, $id);
        $query->execute(); //run the query

        return $this->conn->lastInsertId(); //return
    }

    function get_hft_query()
    {
        $sql = "SELECT * FROM hero_ft_db";

        $query = $this->conn->prepare($sql); //prepare the query
        $query->execute(); //run the query

        return $query->fetchAll(PDO::FETCH_ASSOC); //get all the data and return
    }

    function get_cft_query()
    {
        $sql = "SELECT * FROM carousel_ft_db";

        $query = $this->conn->prepare($sql); //prepare the query
        $query->execute(); //run the query

        return $query->fetchAll(PDO::FETCH_ASSOC); //get all the data and return
    }


    function heroftBtn($post)
    {
        if (!empty($post['img'])) {
            $sql = "UPDATE hero_ft_db
						   SET hft_title = ?, hft_desc = ?, hft_img = ?
						 WHERE hft_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                $post['title'],
                $post['desc'],
                $post['img'],
                $post['id']
            ]);
        } else {
            $sql = "UPDATE hero_ft_db
						   SET hft_title = ?, hft_desc = ?
						 WHERE hft_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                $post['title'],
                $post['desc'],
                $post['id']
            ]);
        }

        return true; // update success
    }

    function updateDestination($name, $desc, $set_img, $set_more, $id)
    {
        $sql = "UPDATE carousel_ft_db
					SET cft_name = :name,
						cft_desc = :desc
						$set_img
						$set_more,
						cft_date = NOW()
					WHERE cft_id = :id";

        $query = $this->conn->prepare($sql);
        $query->bindParam(':name', $name);
        $query->bindParam(':desc', $desc);
        $query->bindParam(':id', $id);

        if ($query->execute()) {
            return true; // success
        } else {
            // Debug error
            $error = $query->errorInfo();
            echo "Update failed: " . $error[2];
            return false;
        }
    }
}
?>