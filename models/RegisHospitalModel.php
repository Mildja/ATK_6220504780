<?php
class RegisHospital{
    public $RH_ID;
    public $RH_Name;
    public $RH_Date;
    public $RH_Numall;
    public $RH_Numin;

    public function __construct($RH_ID,$RH_Name,$RH_Date,$RH_Numall,$RH_Numin)
    {
        $this->RH_ID = $RH_ID;
        $this->RH_Name = $RH_Name;
        $this->RH_Date = $RH_Date;
        $this->RH_Numall = $RH_Numall;
        $this->RH_Numin = $RH_Numin;
    }

    public static function getAll()
    {
        $RegisHospitalList = [];
        require("connection_connect.php");
        $sql = "SELECT RegisHospital.RH_ID,RH_Name,RH_Date,COUNT(HomeIsolation.HomeIso_ID)AS RH_Numall
                ,COUNT(IF(HomeIsolation.Satus='เข้ารับการรักษาที่โรงพยาบาล',HomeIsolation.HomeIso_ID,null))
                AS RH_Numin

                FROM RegisHospital LEFT JOIN HomeIsolation on RegisHospital.RH_ID=HomeIsolation.RH_ID

                GROUP BY RH_ID";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $RH_ID = $row["RH_ID"];
            $RH_Name = $row["RH_Name"];
            $RH_Date = $row["RH_Date"];
            $RH_Numall = $row["RH_Numall"];
            $RH_Numin = $row["RH_Numin"];
            
            $RegisHospitalList[] = new RegisHospital($RH_ID,$RH_Name,$RH_Date,$RH_Numall,$RH_Numin);
        }
        require("connection_close.php");

        return $RegisHospitalList;
    }

    public static function get($RH_ID)
    { 
        require("connection_connect.php");
        $sql = "SELECT RegisHospital.RH_ID,RH_Name,RH_Date,COUNT(HomeIsolation.HomeIso_ID)AS RH_Numall
                ,COUNT(IF(HomeIsolation.Satus='เข้ารับการรักษาที่โรงพยาบาล',HomeIsolation.HomeIso_ID,null))
                  AS RH_Numin

                FROM RegisHospital LEFT JOIN HomeIsolation on RegisHospital.RH_ID=HomeIsolation.RH_ID
                WHERE RegisHospital.RH_ID='$RH_ID'
                GROUP BY RH_ID ";
        $result = $conn->query($sql);;
        $row = $result->fetch_assoc();
            $RH_ID = $row["RH_ID"];
            $RH_Name = $row["RH_Name"];
            $RH_Date = $row["RH_Date"];
            $RH_Numall = $row["RH_Numall"];
            $RH_Numin = $row["RH_Numin"];
        require("connection_close.php");
        return new RegisHospital($RH_ID,$RH_Name,$RH_Date,$RH_Numall,$RH_Numin);
    }

    public static function search($key)
    {
        $RegisHospitalList = [];
       
        require("connection_connect.php");
        $sql = "SELECT RegisHospital.RH_ID,RH_Name,RH_Date,COUNT(HomeIsolation.HomeIso_ID)AS RH_Numall
        ,COUNT(IF(HomeIsolation.Satus='เข้ารับการรักษาที่โรงพยาบาล',HomeIsolation.HomeIso_ID,null))
        AS RH_Numin

        FROM RegisHospital LEFT JOIN HomeIsolation on RegisHospital.RH_ID=HomeIsolation.RH_ID
        where (RegisHospital.RH_ID like'%$key%'or RH_Name like'%$key%'or RH_Date like'%$key%')
        GROUP BY RegisHospital.RH_ID";
        
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            
            $RH_ID = $row["RH_ID"];
            $RH_Name = $row["RH_Name"];
            $RH_Date = $row["RH_Date"];
            $RH_Numall = $row["RH_Numall"];
            $RH_Numin = $row["RH_Numin"];
            $RegisHospitalList[] = new RegisHospital($RH_ID,$RH_Name,$RH_Date,$RH_Numall,$RH_Numin);
           
        }
        
        require("connection_close.php");
        return $RegisHospitalList;
    }

    public static function add($RH_ID,$RH_Name,$RH_Date)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `RegisHospital`(`RH_ID`,`RH_Name`,`RH_Date`) VALUES ('$RH_ID','$RH_Name','$RH_Date')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result row";
    }

    public static function update($RH_ID,$RH_Name,$RH_Date){
        require("connection_connect.php");
        $sql="UPDATE RegisHospital SET RH_Name='$RH_Name',RH_Date='$RH_Date'WHERE RH_ID='$RH_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Update success $result rows";
    }

    public static function delete($RH_ID)
    {
        require_once("connection_connect.php");
        $sql = "DELETE from RegisHospital WHERE RH_ID='$RH_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }

}?>