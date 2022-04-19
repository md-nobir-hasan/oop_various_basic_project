<?php

class Crud_opp
{
    private $db_name = "crud_opp";
    private $host_name = "localhost";
    private $user_name = "root";
    private $password = "";
    // public $data;
    private $conn;
    public $num;

    // user_info

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->db_name);
        if ($this->conn) {
            // echo "connection successfull";
        } else {
            echo "connection err";
        }
    }

    public function insert()
    {
        if (isset($_POST['btn_save'])) {
            $user_name = $_POST['user_name'];
            $age = $_POST['age'];
            $sql = "INSERT INTO user_info (`name`,`age`) VALUES('{$user_name}',{$age})";
            $query = mysqli_query($this->conn, $sql);
            if ($query) {
                echo "<script> alert('Successfully Inserted'); </script>";
            } else {
                echo "<script> alert(' Inserted fail'); </script>";
            }
        }
    }

    public function read($sqlis)
    {
        $query = mysqli_query($this->conn, $sqlis);
        if ($query) {
            $this->num = mysqli_num_rows($query);
            $num_result = $query->num_rows;
            if ($num_result > 1) {
                while ($rows = $query->fetch_assoc()) {
                    $data[] = $rows;
                }
                return $data;
            } else {
                $rows = $query->fetch_assoc();
                // echo "<script> alert(' Can't database read'); </script>";
                return $rows;
            }
        }
    }

    public function update($sql)
    {

        $query = mysqli_query($this->conn, $sql);
        if ($query) {
            echo "<script> alert('Successfully Updated'); </script>";

            header("location: index.php");
        } else {
            echo "<script> alert(' Updated fail'); </script>";
            header("location: update.php");
            return false;
        }
    }

    public function delete($sql)
    {

        $query = mysqli_query($this->conn, $sql);
        if ($query) {
            echo "<script> alert('Successfully deleted'); </script>";
            
            header("location: index.php");
        } else {
            echo "<script> alert(' delete faill'); </script>";
            return false;
        }
    }
}
