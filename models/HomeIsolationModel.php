<?php
class HomeIsolation{
    public $HomeIso_ID;
    public $VD_ID;
    public $RH_ID;
    public $ID_Card;
    public $ID_ATK;
    public $Initial_symptom;
    public $SatusATK;
    public $Satus;
    public $VD_Name;
    public $RH_Name;
    public $PS_name;

    public function __construct($HomeIso_ID,$VD_ID,$RH_ID,$ID_Card,$ID_ATK,$Initial_symptom,$SatusATK,$Satus,$VD_Name,$RH_Name,$PS_name)
    {
        $this->HomeIso_ID = $HomeIso_ID;
        $this->VD_ID = $VD_ID;
        $this->RH_ID = $RH_ID;
        $this->ID_Card = $ID_Card;
        $this->ID_ATK = $ID_ATK;
        $this->Initial_symptom = $Initial_symptom;
        $this->SatusATK = $SatusATK;
        $this->Satus = $Satus;
        $this->VD_Name = $VD_Name;
        $this->RH_Name = $RH_Name;
        $this->PS_name = $PS_name;
    }

    public static function getAll()
    {
        $HomeIsolationList = [];
        require("connection_connect.php");
        $sql = "SELECT HomeIso_ID, HomeIsolation.VD_ID,V.VD_Name,HomeIsolation.RH_ID,R.RH_Name,ID_Card,IFNULL(ID_ATK,'ไม่มีไอดี atk') AS ID_ATK
        ,IFNULL(Initial_symptom,'ยังไม่ได้บันทึกอาการ') as Initial_symptom,SatusATK,Satus,P.PS_name
        FROM HomeIsolation INNER JOIN (SELECT VD_ID,VD_Name FROM VolunteerDoctor)AS V
        ON HomeIsolation.VD_ID=V.VD_ID INNER  JOIN (SELECT RH_ID,RH_Name FROM RegisHospital)
        AS R ON HomeIsolation.RH_ID=R.RH_ID INNER JOIN (SELECT PS_ID,PS_name FROM Person)
        AS P ON  HomeIsolation.ID_Card = P.PS_ID ";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $HomeIso_ID = $row["HomeIso_ID"];
            $VD_ID = $row["VD_ID"];
            $RH_ID = $row["RH_ID"];
            $ID_Card = $row["ID_Card"];
            $ID_ATK = $row["ID_ATK"];
            $Initial_symptom = $row["Initial_symptom"];
            $SatusATK = $row["SatusATK"];
            $Satus = $row["Satus"];
            $VD_Name= $row["VD_Name"];
            $RH_Name= $row["RH_Name"];
            $PS_name= $row["PS_name"];
            $HomeIsolationList[] = new HomeIsolation($HomeIso_ID,$VD_ID,$RH_ID,$ID_Card,$ID_ATK,$Initial_symptom,$SatusATK,$Satus,$VD_Name,$RH_Name,$PS_name);
        }
        require("connection_close.php");

        return $HomeIsolationList;
    }

    public static function get($HomeIso_ID)
    {
        require("connection_connect.php");
        $sql = "SELECT HomeIso_ID, HomeIsolation.VD_ID,V.VD_Name,HomeIsolation.RH_ID,R.RH_Name,ID_Card,IFNULL(ID_ATK,'ไม่มีไอดี atk') AS ID_ATK
        ,IFNULL(Initial_symptom,'ยังไม่ได้บันทึกอาการ') as Initial_symptom,SatusATK,Satus,P.PS_name
        FROM HomeIsolation INNER JOIN (SELECT VD_ID,VD_Name FROM VolunteerDoctor)AS V
        ON HomeIsolation.VD_ID=V.VD_ID INNER  JOIN (SELECT RH_ID,RH_Name FROM RegisHospital)
        AS R ON HomeIsolation.RH_ID=R.RH_ID INNER JOIN (SELECT PS_ID,PS_name FROM Person)
        AS P ON  HomeIsolation.ID_Card = P.PS_ID 
        WHERE HomeIso_ID='$HomeIso_ID'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
            $HomeIso_ID = $row["HomeIso_ID"];
            $VD_ID = $row["VD_ID"];
            $RH_ID = $row["RH_ID"];
            $ID_Card = $row["ID_Card"];
            $ID_ATK = $row["ID_ATK"];
            $Initial_symptom = $row["Initial_symptom"];
            $SatusATK = $row["SatusATK"];
            $Satus = $row["Satus"];
            $VD_Name= $row["VD_Name"];
            $RH_Name= $row["RH_Name"];
            $PS_name= $row["PS_name"];
        require("connection_close.php");
        return new HomeIsolation($HomeIso_ID,$VD_ID,$RH_ID,$ID_Card,$ID_ATK,$Initial_symptom,$SatusATK,$Satus,$VD_Name,$RH_Name,$PS_name);
    }

    public static function search($key)
    {
        $HomeIsolationList = [];
      
        require("connection_connect.php");
        $sql = "SELECT HomeIso_ID, HomeIsolation.VD_ID,V.VD_Name,HomeIsolation.RH_ID,R.RH_Name,ID_Card,IFNULL(ID_ATK,'ไม่มีไอดี atk') AS ID_ATK
        ,IFNULL(Initial_symptom,'ยังไม่ได้บันทึกอาการ') as Initial_symptom,SatusATK,Satus,P.PS_name
        
        FROM HomeIsolation INNER JOIN (SELECT VD_ID,VD_Name FROM VolunteerDoctor)AS V
        ON HomeIsolation.VD_ID=V.VD_ID INNER  JOIN (SELECT RH_ID,RH_Name FROM RegisHospital) AS R ON HomeIsolation.RH_ID=R.RH_ID INNER JOIN (SELECT PS_ID,PS_name FROM Person)
        AS P ON  HomeIsolation.ID_Card = P.PS_ID 

        where (HomeIso_ID like'%$key%'or HomeIsolation.VD_ID like'%$key%'or HomeIsolation.RH_ID like'%$key%'
        or ID_Card like'%$key%'or ID_ATK like'%$key%'or Initial_symptom like'%$key%'or SatusATK like'%$key%'
        or Satus like'%$key%'or VD_Name like'%$key%'or RH_Name like'%$key%'or PS_name like'%$key%')";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $HomeIso_ID = $row["HomeIso_ID"];
            $VD_ID = $row["VD_ID"];
            $RH_ID = $row["RH_ID"];
            $ID_Card = $row["ID_Card"];
            $ID_ATK = $row["ID_ATK"];
            $Initial_symptom = $row["Initial_symptom"];
            $SatusATK = $row["SatusATK"];
            $Satus = $row["Satus"];
            $VD_Name= $row["VD_Name"];
            $RH_Name= $row["RH_Name"];
            $PS_name= $row["PS_name"];
            $HomeIsolationList[] = new HomeIsolation($HomeIso_ID,$VD_ID,$RH_ID,$ID_Card,$ID_ATK,$Initial_symptom,$SatusATK,$Satus,$VD_Name,$RH_Name,$PS_name);
        }
        
        require("connection_close.php");
        return $HomeIsolationList;
    }

    public static function add($HomeIso_ID,$VD_ID,$RH_ID,$ID_Card,$ID_ATK,$Initial_symptom,$SatusATK,$Satus)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `HomeIsolation`(`HomeIso_ID`,`VD_ID`,`RH_ID`,`ID_Card`,`ID_ATK`,`Initial_symptom`,`SatusATK`,`Satus`) VALUES ('$HomeIso_ID','$VD_ID','$RH_ID','$ID_Card','$ID_ATK','$Initial_symptom','$SatusATK','$Satus')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result row";
    }

    public static function update($HomeIso_ID,$VD_ID,$RH_ID,$ID_Card,$ID_ATK,$Initial_symptom,$SatusATK,$Satus){
        require("connection_connect.php");
        $sql="UPDATE HomeIsolation SET VD_ID='$VD_ID',RH_ID='$RH_ID', ID_Card='$ID_Card', ID_ATK='$ID_ATK', Initial_symptom='$Initial_symptom' , SatusATK='$SatusATK' , Satus='$Satus'WHERE HomeIso_ID='$HomeIso_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Update success $result rows";
    }

    public static function delete($HomeIso_ID)
    {
        require_once("connection_connect.php");
        $sql = "DELETE from HomeIsolation WHERE HomeIso_ID='$HomeIso_ID'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }

}?>