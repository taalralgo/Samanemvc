<?php

if(isset($_GET["url"]))
{
    //echo $_GET["url"];
    $url = explode("/", $_GET["url"]);
    //echo $url[0];
    if(isset($url[0]))
    {

    }
}
else
    {
        require_once "src/controller/WelcomeController.php";
        new Welcome();
    }
?>