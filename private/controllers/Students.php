<?php

class Students extends Controller
{
    public function index()
    {
        if (!Auth::logged_in())
        {
            $this->redirect('/login');
        }
        $school=new Users();
        if (isset($_POST['up_id']))
        {
            $data=$school->where('id',$_POST['up_id']);
            $this->view('edit',["rows"=>$data]);
        }/*查询*/else if (isset($_POST['id']))
        {
            $data=$school->where('id',$_POST['id']);
            $this->view('student',["rows"=>$data]);
        }else if (isset($_POST['uid']))
        {
            $id=$_POST['uid'];
            unset($_POST['uid']);
            $school->update($id,$_POST);
            unset($_POST);
            $this->redirect('students');
        }else if (isset($_POST['del_id']))
            {
                $school->delete($_POST['del_id']);
                $data=$school->where('rank','学生');
                $this->view('student',["rows"=>$data]);
            }else{
                $data=$school->where('rank','学生');
                $this->view('student',["rows"=>$data]);
            }
    }
}