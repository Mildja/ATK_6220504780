<?php class VolunteerDoctorController
{
        public function index()
        {
            $VolunteerDoctor_list = VolunteerDoctor::getAll();
            require_once("./views/VolunteerDoctor/index.php");
        }

        public function New()
        {
            $VolunteerDoctor_List = VolunteerDoctor::getAll();
            require_once("./views/VolunteerDoctor/New.php");
        }
        public function add()
        {
            $VD_ID = $_GET['VD_ID'];
            $VD_Name = $_GET['VD_Name'];
            $VD_Date= $_GET['VD_Date'];
            VolunteerDoctor::add($VD_ID,$VD_Name,$VD_Date);
            VolunteerDoctorController::index();
        }
        public function Deletefrom()
        {  
        $VD_ID=$_GET['VD_ID'];
        $VolunteerDoctor=VolunteerDoctor::get($VD_ID);
        require_once('./views/VolunteerDoctor/Deletefrom.php');
        }
        public function Delete()
        {
            $ID = $_GET['VD_ID'];
            VolunteerDoctor::delete($ID);
            VolunteerDoctorController::index();
        }
        public function search()
    {
        $key = $_GET['key'];
        $VolunteerDoctor_list = VolunteerDoctor::search($key);
        require_once("./views/VolunteerDoctor/index.php");
    }
    public function updateFrom()
    {
        $VD_ID=$_GET['VD_ID'];
        $VolunteerDoctor = VolunteerDoctor::get($VD_ID);
        $VolunteerDoctor_List =VolunteerDoctor::getAll();
        require_once("./views/VolunteerDoctor/updateFrom.php");
    }

    public function update()
    {
        $VD_ID = $_GET['VD_ID'];
        $VD_Name = $_GET['VD_Name'];
        $VD_Date= $_GET['VD_Date'];
        VolunteerDoctor::update($VD_ID,$VD_Name,$VD_Date);
        VolunteerDoctorController::index();
    }

}?>
