<?php


class Schools extends Model
{
    protected $allowedColumns=[
        'school',
        'date'
    ];
    protected $beforeInsert=[
        'make_user_id',
        'make_school_id'
    ];
    protected $table='schools';
    public function validate($data)
    {
        $this->errors=[];
        //学校名校验
        if (empty($data["school"]))
        {
            $this->errors[]="学校名不能为空";
        }
        if (count($this->errors)==0)
        {
            return true;
        }
        return false;
    }
    public function make_user_id($data){
        $data['user_id'] = randowm_string(60);
        return $data;
    }
    public function make_school_id($data){
        if (isset($_SESSION['USER']->school_id))
        {
            $data['school_id'] = randowm_string(60);
        }
        return $data;
    }
}