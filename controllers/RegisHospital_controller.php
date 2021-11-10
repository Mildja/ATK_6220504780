<?php class RegisHospitalController
{
        public function index()
        {
            $RegisHospital_list = RegisHospital::getAll();
            require_once("./views/RegisHospital/index.php");
        }

        public function New()
        {
            $RegisHospital_List = RegisHospital::getAll();
            require_once("./views/RegisHospital/New.php");
        }
        public function add()
        {
            $RH_ID = $_GET['RH_ID'];
            $RH_Name = $_GET['RH_Name'];
            $RH_Date= $_GET['RH_Date'];
            RegisHospital::add($RH_ID,$RH_Name,$RH_Date);
            RegisHospitalController::index();
        }
        public function Deletefrom()
        {  
        $RH_ID=$_GET['RH_ID'];
        $RegisHospital=RegisHospital::get($RH_ID);
        require_once('./views/RegisHospital/Deletefrom.php');
        }
        public function Delete()
        {
            $ID = $_GET['RH_ID'];
            RegisHospital::delete($ID);
            RegisHospitalController::index();
        }
        public function search()
    {   
        $key = $_GET['key']; 
        $RegisHospital_list = RegisHospital::search($key);
        require_once("./views/RegisHospital/index.php");
        
    }
    public function updateFrom()
    {   
        $RH_ID=$_GET['RH_ID'];
        $RegisHospital = RegisHospital::get($RH_ID);
        $RegisHospital_List =RegisHospital::getAll();
        require_once("./views/RegisHospital/updateFrom.php");
    }

    public function update()
    {   
        $RH_ID = $_GET['RH_ID'];
        $RH_Name = $_GET['RH_Name'];
        $RH_Date= $_GET['RH_Date'];
        RegisHospital::update($RH_ID,$RH_Name,$RH_Date);
        RegisHospitalController::index();
    }

}?>
