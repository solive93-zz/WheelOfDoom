<?php
namespace App;

class CodersRepository 
{
    protected $connection;
    protected $table ="coders";
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "wheelofdoom";

    public function connect()
    {
        if(!$this->connection)
        {
            $this->connection = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        }
    } 
    
    public function getAllCoders() 
    {
        $this->connect();         
        $query = "SELECT * FROM $this->table";
        $data = mysqli_query($this->connection, $query);
        

        $arrayCoders = array();
        while ($row = mysqli_fetch_assoc($data))
        {
            array_push($arrayCoders, $row);
        }
        return $arrayCoders;
        
    }

    public function getDeadCoders() :array
    {   
        $this->connect();
        $query = "SELECT * FROM $this->table WHERE status = 'dead'";
        $data = mysqli_query($this->connection, $query);
        
        $arrayDeadCoders = array();
        while ($row = mysqli_fetch_assoc($data))
        {
            array_push($arrayDeadCoders, $row);
        }
        return $arrayDeadCoders;
        
    }

    public function getAliveCoders() :array
    {
        $this->connect();
        
        $query = "SELECT * FROM $this->table WHERE status = 'alive'";
        $data = mysqli_query($this->connection, $query);
        
        $arrayAliveCoders = array();
        while ($row = mysqli_fetch_assoc($data))
        {
            array_push($arrayAliveCoders, $row);
        }
        return $arrayAliveCoders;
    }

    function updateStatusById(int $id) :void
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