<?php class HomeIsolationController
{
    public function index()
    {
        $HomeIsolation_list = HomeIsolation::getAll();
        require_once("./views/HomeIsolation/index.php");
    }

    public function New()
    {
        $HomeIsolation_List = HomeIsolation::getAll();
        $VolunteerDoctor_List = VolunteerDoctor::getAll();
        $RegisHospital_List = RegisHospital::getAll();
        $Person_List = Person::getAll();
        $AtkTestResult_List = AtkTestResult::getAll();
        require_once("./views/HomeIsolation/New.php");
    }
    public function add()
    {
        $HomeIso_ID = $_GET['HomeIso_ID'];
        $VD_ID = $_GET['VD_ID'];
        $RH_ID = $_GET['RH_ID'];
        $ID_Card = $_GET['ID_Card'];
        $ID_ATK = $_GET['ID_ATK'];
        $Initial_symptom = $_GET['Initial_symptom'];
        $SatusATK = $_GET['SatusATK'];
        $Satus = $_GET['Satus'];
        HomeIsolation::add($HomeIso_ID, $VD_ID, $RH_ID, $ID_Card, $ID_ATK, $Initial_symptom, $SatusATK, $Satus);
        HomeIsolationController::index();
    }
    public function Deletefrom()
    {
        $HomeIso_ID = $_GET['HomeIso_ID'];
        $HomeIsolation = HomeIsolation::get($HomeIso_ID);
        require_once('./views/HomeIsolation/Deletefrom.php');
    }
    public function Delete()
    {
        $HomeIso_ID = $_GET['HomeIso_ID'];
        HomeIsolation::delete($HomeIso_ID);
        HomeIsolationController::index();
    }
    public function search()
    {
        $key = $_GET['key'];
        $HomeIsolation_list = HomeIsolation::search($key);
        require_once("./views/HomeIsolation/index.php");
    }
    public function updateFrom()
    {
        $HomeIso_ID = $_GET['HomeIso_ID'];
        $HomeIsolation = HomeIsolation::get($HomeIso_ID);
        $HomeIsolation_List = HomeIsolation::getAll();
        $VolunteerDoctor_List = VolunteerDoctor::getAll();
        $RegisHospital_List = RegisHospital::getAll();
        $Person_List = Person::getAll();
        $AtkTestResult_List = AtkTestResult::getAll();
        require_once("./views/HomeIsolation/updateFrom.php");
    }

    public function update()
    {

        $HomeIso_ID = $_GET['HomeIso_ID'];
        $VD_ID = $_GET['VD_ID'];
        $RH_ID = $_GET['RH_ID'];
        $ID_Card = $_GET['ID_Card'];
        $ID_ATK = $_GET['ID_ATK'];
        $Initial_symptom = $_GET['Initial_symptom'];
        $SatusATK = $_GET['SatusATK'];
        $Satus = $_GET['Satus'];
        HomeIsolation::update($HomeIso_ID, $VD_ID, $RH_ID, $ID_Card, $ID_ATK, $Initial_symptom, $SatusATK, $Satus);
        HomeIsolationController::index();
    }
}
