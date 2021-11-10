<?php class PersonController
{
        public function index()
        {
            $Person_list = Person::getAll();
            require_once("./views/Person/index.php");
        }

        public function search()
    {
        $key = $_GET['key'];
        $Person_list = Person::search($key);
        require_once("./views/Person/index.php");
    }
}?>
