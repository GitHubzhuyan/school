<?php
/*
 * home 控制器
 *
 */
class Home extends Controller
{
    public function index()
    {
/*      $user = $this->load_model('Users');
        $data = $user->where('firstname','jon');
        $db=new Database();
        $arr=[];
            $arr["firstname"] ="121";
            $arr["lastname"] = "2";
            $arr["date"] ="2023-06-22";
            $arr["user_id"] = "1001";
            $arr["gender"] = "女";
            $arr["school_id"] = "1004";
            $arr["rank"] = "学生";
        $user->delete();
        $user->update(3,$arr);
        $user->insert();*/if (!Auth::logged_in())
    {
        $this->redirect('/login');
    }
        $user=new Users();
        $data=$user->findAll();
        $this->view('home',["rows"=>$data]);
    }

}