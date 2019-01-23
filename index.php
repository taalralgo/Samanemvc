<?php

if(isset($_GET["url"]))
{
    //echo $_GET["url"];
    $url = explode("/", $_GET["url"]);
    //echo $url[0];
    if(isset($url[0]))
    {
        $controller_file = 'src/controller/'.$url[0].'Controller.php';
        if(file_exists($controller_file))
        {
            require_once $controller_file;
            $controller = $url[0];
            $controller_object = new $controller();
            if(isset($url[1]))
            {
                if($url[1] == "")
                {
                    if(method_exists($controller_object, "index"))
                    {
                        $controller_object->index();
                    }
                    else
                    {
                        die("The method <b>index</b> doesn't exist in the controller ".$url[0] );
                    }
                }
                else
                {
                    if(method_exists($controller_object, $url[1]))
                    {
                        $m = $url[1];
                        if(isset($url[2]))
                        {
                            $controller_object->$m($url[2]);
                        }
                        else
                        {
                            $controller_object->$m();
                        }
                    }
                    else
                    {
                        die("The method <b>".$url[1]."doesn't exist");
                    }
                                        }
                }
            }
            else
            {
                if(method_exists($controller_object, "index"))
                {
                    $controller_object->index();
                }
                else
                {
                    die("The method <b>".$url[0]."doesn't exist");
                }
            }

        }
        else
        {
            die("The controller <b>".$url[0]."Controller</b> doesn't exist" );
        }
    }
    else
    {
        require_once "src/controller/WelcomeController.php";
        new Welcome();
    }

?>