<?php
    class Application
    {
        public function execute()
        {
            $url = isset($_GET['url']) ? explode("/",$_GET['url'])[0] : "home";
            $url = ucfirst($url);
            $url.= "Controller";
            if(file_exists("Controllers/".$url.".php"))
            {
                $classname = "Controllers\\".$url;
                $controller = new $classname;
                $controller->execute();
            }
            else
            {
                die("Essa página não existe!");
            }
        
        }
    }

?>