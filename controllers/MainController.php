<?php 
class MainController extends Controller{
    
    function __construct()
    {
        parent::__construct();

        
    }
    function render() {
        $this->view->render('main/index');
    }

}
?>