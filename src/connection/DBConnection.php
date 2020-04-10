<?php
namespace App;

class DBConnection
{
    protected $connection;
    protected $table ="coders";
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "wheelofdoom";

    function connect()
    {
        if(!$this->connection)
        {
            $this->connection = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        }
        return $this->connection;
    } 
    
    public function getAllCoders() :array
    {
       
        $result = mysqli_query($this->connection, 'SELECT * FROM coders');

        $arrayCoders = array();
        while ($row = mysqli_fetch_assoc())
        {
            array_push($arrayCoders, $row);
        }
        return $arrayCoders;
        
    }

    public function getDeadCoders() :array
    {
        $query = "SELECT * FROM '$this->table' WHERE status = dead";
        $result = mysqli_query($this->connection, $query);
        
        while ($row = mysqli_fetch_array($result))
        {
            $arrayDeadCoders[] = array 
            (
            "id" => $row['id'],
            "coderName" => $row['name'],
            "state"=> $row['status']
            );
        }
        return $arrayDeadCoders;
    }

    public function getAliveCoders() :array
    {
        $query = "SELECT * FROM $this->table WHERE status = alive";
        $result = mysqli_query($this->connection, $query);
        
        while ($row = mysqli_fetch_array($result))
        {
            $arrayAliveCoders = array (
            "id" => $row['id'],
            "coderName" => $row['name'],
            "state"=> $row['status']
            );
        }
        return $arrayAliveCoders;
    }

    function updateStatusById($id) :void
    {
        $this->connect();
        $query="UPDATE $this->table SET status=dead WHERE id ='$id'";
        $restult = mysqli_query($this->connection, $query);  
    }

    function updateAll() :void
    {
        $this->connect();
        $query="UPDATE $this->table SET status=alive";
        $result = mysqli_query($this->connection, $query);
    }
}