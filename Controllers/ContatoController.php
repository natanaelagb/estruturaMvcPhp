<?php
    
    namespace Controllers;
    class ContatoController
    {
        private $view;

        public function __construct()
        {
            $this->view = new \Views\View("contato");
        }
        public function execute()
        {
            $this->view->render();
        }
    }
    
?>