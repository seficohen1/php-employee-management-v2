<?php 
class MainController extends Controller{
    function __construct()
    {
        parent::__construct();
        echo "<br>This is the main controller";
        
    }
    function render() {
        $this->view->render('main/index');
    }

    function getEmployees() {
        $employees = $this->model->get();
        $this->view->employees = $employees;
        $this->view->render('main/index');
    }
}
?>