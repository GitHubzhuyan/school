<?php

class Users extends Model
{
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'gender',
        'rank',
        'password',
        'date'
    ];
    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password'];
    protected $table = 'users';

    public function validate($data)
    {
        $this->errors = [];
        //姓名校验
        if (empty($data["firstname"])) {
            $this->errors[] = "姓不能为空";
        }
        if (empty($data["lastname"])) {
            $this->errors[] = "名不能为空";
        }
        //邮箱校验
        if (empty($data["email"]) || !filter_var($data["email"],
                FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "邮箱不合法";
        }
        //检测邮箱是否存在
        if ($this->where('email', $data['email'])) {
            $this->errors[] = "邮箱已存在";
        }
        //性别校验
        $genders = ['男', '女'];
        if (empty($data["gender"]) || !in_array($data['gender'], $genders)) {
            $this->errors[] = "性别不合法";
        }
        //角色校验
        $rank = ['学生', '教师', '行政人员', '学校管理员', '超级管理员'];
        if (empty($data["rank"]) || !in_array($data['rank'], $rank)) {
            $this->errors[] = "角色不合法";
        }
        //密码校验
        if (empty($data["password"] && $data["password1"])) {
            $this->errors[] = "密码不能为空";
        } else if (strlen($data["password"]) < 8) {
            $this->errors[] = "密码不能小于8位";
        } else if ($data["password"] != $data["password1"]) {
            $this->errors[] = "两次密码不一致";
        }
        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data)
    {
        $data['user_id'] = randowm_string(60);
        return $data;
    }

    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function hash_password($data)
    {
//        $options = [
//            'cost' => 10,
//        ];
//        $data['salt']= password_hash("randomstring", PASSWORD_BCRYPT, $options);
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
//    private function randowm_string($length)
//    {
//        $array =[0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
//            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
//            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y',
//            'Z'];
//        $text='';
//        for ($x=0;$x<$length;$x++)
//        {
//            $random=rand(0,61);
//            $text .=$array[$random];
//        }
//        return $text;
//    }
//}