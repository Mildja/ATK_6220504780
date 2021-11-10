<?php
class VolunteerDoctor{
    public $VD_ID;
    public $VD_Name;
    public $VD_Date;
    public $VD_Numall;


    public function __construct($VD_ID,$VD_Name,$VD_Date,$VD_Numall)
    {
        $this->VD_ID = $VD_ID;
        $this->VD_Name = $VD_Name;
        $this->VD_Date = $VD_Date;
        $this->VD_Numall = $VD_Numall;
    }

    public static function getAll()
    {
        $VolunteerDoctorList = [];
        require("connection_connect.php");
        $sql = "SELECT VolunteerDoctor.VD_ID,VD_Name,VD_Date,COUNT(HomeIsolation.HomeIso_ID)AS VD_Numall
                FROM VolunteerDoctor LEFT JOIN HomeIsolation on VolunteerDoctor.VD_ID=HomeIsolation.VD_ID
                GROUP BY VD_ID ";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $VD_ID = $row["VD_ID"];
            $VD_Name = $row["VD_Name"];
            $VD_Date = $row["VD_Date"];
            $VD_Numall = $row["VD_Numall"];
            $VolunteerDoctorList[] = new VolunteerDoctor($VD_ID,$VD_Name,$VD_Date,$VD_Numall);
        }
        require("connection_close.php");

        return $VolunteerDoctorList;
    }

    public static function get($VD_ID)
    {
        require("connection_connect.php");
        $sql = "SELECT VolunteerDoctor.VD_ID,VD_Name,VD_Date,COUNT(HomeIsolation.HomeIso_ID)AS VD_Numall
                FROM VolunteerDoctor LEFT JOIN HomeIsolation on VolunteerDoctor.VD_ID=HomeIsolation.VD_ID
                WHERE VolunteerDoctor.VD_ID='$VD_ID'
                GROUP BY VD_ID";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
             $VD_ID = $row["VD_ID"];
             $VD_Name = $row["VD_Name"];
             $VD_Date = $row["VD_Date"];
             $VD_Numall = $row["VD_Numall"];
        require("connection_close.php");
        return new VolunteerDoctor($VD_ID,$VD_Name,$VD_Date,$VD_Numall);
    }

    public static function search($key)
    {
        $VolunteerDoctorList = [];
        require("connection_connect.php");
        $sql = "SELECT VolunteerDoctor.VD_ID,VD_Name,VD_Date,COUNT(HomeIsolation.HomeIso_ID)AS VD_Numall
                FROM VolunteerDoctor LEFT JOIN HomeIsolation on VolunteerDoctor.VD_ID=HomeIsolation.VD_ID
        where (VD_Name like'%$key%' or VD_Date like'%$key%' or VolunteerDoctor.VD_ID like'%$key%')
        GROUP BY VolunteerDoctor.VD_ID ";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $VD_ID = $row["VD_ID"];
            $VD_Name = $row["VD_Name"];
            $VD_Date = $row["VD_Date"];
            $VD_Numall = $row["VD_Numall"];
            $VolunteerDoctorList[] = new VolunteerDoctor($VD_ID,$VD_Name,$VD_Date,$VD_Numall);
        }
        require("connection_close.php");
        return $VolunteerDoctorList;
    }

    public static function add($VD_ID,$VD_Name,$VD_Date)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `VolunteerDoctor`(`VD_ID`,`VD_Name`,`VD_Date`) VALUES ('$VD_ID','$VD_Name','$VD_Date')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result row";
    }

    public static function update($VD_ID,$VD_Name,$VD_Date){
        require("connection_connect.php");
        $sql="UPDATE VolunteerDoctor SET VD_Name='$VD_Name',VD_Date='$VD_Date'WHERE VD_ID='$VD_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Update success $result rows";
    }

    public static function delete($VD_ID)
    {
        require_once("connection_connect.php");
        $sql = "DELETE from VolunteerDoctor WHERE VD_ID='$VD_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }

}?>