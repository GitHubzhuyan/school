<?php

class Login extends Controller
{
    public function index()
    {
        $errors=[];
        if (count($_POST)>0)
        {
            if (isset($_POST['a'])&&$_POST['a']==1){
                $this->redirect('signup');
            }
            $user=new Users();
            if ($row=$user->where('email',$_POST['email']))
            {
                $row=$row[0];
                if (password_verify($_POST['password'],$row->password))
                {
                    Auth::authenticate($row);
                    $this->redirect('/home');
                }
                else{
                    print_r($row->password);
                    var_dump(password_verify('12345678','$2y$10$whRA1qencufD5Xcm0DPF8.kjtBKDgDg/gdnfz0wJsif'));
                    print_r($_POST['password']);
                }
                $errors['email']='邮箱或密码错误';
            }
        }
        if (isset($_SESSION['USER']))
        {
            $this->redirect('students',['errors'=>$errors]);
        }else
        $this->view('login',['errors'=>$errors]);
    }
}