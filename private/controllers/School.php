<?php


class School extends Controller
{
    public function index()
    {
        if (!Auth::logged_in())
        {
            $this->redirect('/login');
        }
        $school=new Schools();
        $data=$school->findAll();
        $this->view('school',["rows"=>$data]);
    }

}