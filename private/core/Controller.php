<?php
/*
 * 主控制器
 */
class Controller
{
    public function view($view,$data=[])
    {
        extract($data);
        //print_r($view);
        if (file_exists("../private/views/".$view.".view.php"))
        {
            require_once "../private/views/".$view.".view.php";
        }else{
            require_once "../private/views/404.view.php";
        }
    }
    public function load_model($model)
    {
        if(file_exists("../private/models/".$model.".php"))
        {
            require_once "../private/models/".$model.".php";
            return $model=new $model();
        }
        return false;
    }
    public function redirect($link)
    {
        header("location:".ROOT."/".trim($link,"/"));
        die;
    }
}