<?php

    function myAutoLoad($class){
        include($class.".php");
    }
    spl_autoload_register("myAutoLoad");

    define("INCLUDE_PATH","http://localhost/mvc/");
    // define("dsn","mysql:dbname=projeto01;host=localhost");
    // define("user","root");
    // define("password","");

    // $mypdo = new PDO(dsn,user,password);
?>
