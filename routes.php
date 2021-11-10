<?php
$controllers = array(
    'pages' => ['Home', 'error'], 'RegisHospital' => ['index', 'New', 'add', 'search', 'updateFrom', 'update', 'deletefrom', 'Delete'], 'VolunteerDoctor' => ['index', 'New', 'add', 'search', 'updateFrom', 'update', 'deletefrom', 'Delete'], 'HomeIsolation' => ['index', 'New', 'add', 'search', 'updateFrom', 'update', 'deletefrom', 'Delete'], 'Person' => ['index', 'New', 'add', 'search', 'updateFrom', 'update', 'deletefrom', 'Delete']
); //list controller


function call($controller, $action)
{
    require_once("controllers/" . $controller . "_controller.php");
    switch ($controller) {
        case "pages":
            $controller = new PagesController();
            break;
        case "RegisHospital":
            require_once("./models/RegisHospitalModel.php");
            $controller = new RegisHospitalController();
            break;
        case "VolunteerDoctor":
            require_once("./models/VolunteerDoctorModel.php");
            $controller = new VolunteerDoctorController();
            break;
        case "HomeIsolation":
            require_once("./models/HomeIsolationModel.php");
            require_once("./models/VolunteerDoctorModel.php");
            require_once("./models/RegisHospitalModel.php");
            require_once("./models/PersonModel.php");
            require_once("./models/AtkTestResultModel.php");

            $controller = new HomeIsolationController();
            break;
        case "Person":
            require_once("./models/PersonModel.php");
            $controller = new PersonController();
    }

    $controller->{$action}();
}

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
