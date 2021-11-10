<?php
class Person{
    
    public $PS_id;
    public $PS_name;
    public $PS_add;

    public function __construct($PS_id,$PS_name,$PS_add)
    {
        $this->PS_id = $PS_id;
        $this->PS_name = $PS_name;
        $this->PS_add = $PS_add;

    }

    public static function getAll()
    {
        $PersonList = [];
        require("connection_connect.php");
        $sql = "SELECT * from Person";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        { 
            $PS_id = $row["PS_id"];
            $PS_name = $row["PS_name"];
            $PS_add = $row["PS_add"];
            $PersonList[] = new Person($PS_id,$PS_name,$PS_add);
        }
        require("connection_close.php");
        
        return $PersonList;
    }

    public static function get($PS_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * from Person WHERE PS_id='$PS_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
            $PS_id = $row["PS_id"];
            $PS_name = $row["PS_name"];
            $PS_add = $row["PS_add"];
        require("connection_close.php");
        return new Person($PS_id,$PS_name,$PS_add);
    }

    public static function search($key)
    {
        $PersonList = [];
      
        require("connection_connect.php");
        $sql = "SELECT * from Person
        where (PS_id like'%$key%'or PS_name like'%$key%'or PS_add like'%$key%')";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            
            $PS_id = $row["PS_id"];
            $PS_name = $row["PS_name"];
            $PS_add = $row["PS_add"];
            $PersonList[] = new Person($PS_id,$PS_name,$PS_add);
        }
        
        require("connection_close.php");
        return $PersonList;
    }

    
}?>