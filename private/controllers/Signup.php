<?php

class Signup extends Controller
{
    public function index()
    {
        $errors=[];
//        print_r($_POST);
        if (count($_POST)>0)
        {
            if ($_POST['b']==2){
                if ($_SESSION['USER']->rank)
                {
                    $this->redirect('home');
                }else
                $this->redirect('login');
            }
            $user=new Users();
            if ($user->validate($_POST))
            {
//                $arr=[];
//                $arr['firstname']=$_POST['firstname'];
//                $arr['lastname']=$_POST['lastname'];
//                $arr['gender']=$_POST['gender'];
//                $arr['rank']=$_POST['rank'];
//                $arr['email']=$_POST['email'];
//                $arr['password']=$_POST['password'];
//                $arr['salt']=[''];
                $_POST['date']=date('Y-m-d');
                print_r($_POST);
                $user->insert($_POST);
                if($_SESSION['USER']->rank=='学生')
                {
                    $this->redirect('home');
                }
                $this->redirect('login');
            }else{
                $errors=$user->errors;
            }
        }
        $this->view('signup',['errors'=>$errors]);
    }
}