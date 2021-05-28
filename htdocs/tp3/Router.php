<?php


class Router
{

    function process()
    {
        $uri_ = $_SERVER["REQUEST_URI"];

        $file = file_get_contents('routes.json');
        $json = json_decode($file);

        $new = "";
        foreach ($json as $value) {
            if($uri_ == $value->{"path"}) {
                $new = $value;
            }
        }

        if($new != NULL){
            $control = $new->{"controller"};
            $array = explode("@", $control);
            $x = 'app\Controller\\' . $array[0];
            $y = new $x;
            $z = strval($array[1]);
            echo $y->$z();
        }else{
            echo "Erreur 404";
        }

    }

}