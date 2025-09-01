<?php
class homeModel
{
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "admin_db");
        if (!$this->conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        mysqli_set_charset($this->conn, "utf8mb4");
    }

    // Return rows with NUMERIC indexes to match your existing [1],[2],[4],[6] usage
    function homeCarousel(): array
    {
        $data = [];
        $sql = "SELECT * FROM carousel_ft_db";
        if ($res = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_row($res)) {  // <- numeric indexes
                $data[] = $row;
            }
            mysqli_free_result($res);
        }
        return $data;
    }

    function homeHero(): array
    {
        $data = [];
        $sql = "SELECT * FROM hero_ft_db";
        if ($res = mysqli_query($this->conn, $sql)) {
            while ($row = mysqli_fetch_row($res)) {  // <- numeric indexes
                $data[] = $row;
            }
            mysqli_free_result($res);
        }
        return $data;
    }
}
