<?php

    namespace Controllers;
    class HomeController
    {
        private $view;

        public function __construct(){
            $this->view = new \Views\View("home");
        }

        public function execute(){
            $this->view->render();
        }
    }
    

?>