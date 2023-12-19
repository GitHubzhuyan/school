<?php


class User extends Controller
{
    public function index()
    {
        if (!Auth::logged_in())
        {
        $this->redirect('/login');
        }
        $user=new Users();
        $data=$user->findAll();
        $this->view('user',["rows"=>$data]);
    }
}