<?php


class Auth
{
    public static function authenticate($row)
    {
        $_SESSION['USER']=$row;
    }
    public static function logout()
    {
        if (isset($_SESSION['USER']))
        {
            unset($_SESSION['USER']);
        }
    }
    public static function logged_in()
    {
        if (isset($_SESSION['USER']))
        {
            return true;
        }
        return false;
    }
    //判断身份
    public static function logged()
    {
        if (isset($_SESSION['USER'])&&$_SESSION['USER']->rank=='管理员')
        {
            return true;
        }
        return false;
    }
}