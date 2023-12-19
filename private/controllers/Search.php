<?php

class Search extends Controller
{
    public function index()
    {
        if (!Auth::logged_in())
        {
            $this->redirect('/login');
        }
        $school=new Users();
        //查询
        if (isset($_POST['id'])){
            $data=$school->where('id',$_POST['id']);
            $this->view('student',["rows"=>$data]);
        }else {

        }
        $this->view('search');

    }
}