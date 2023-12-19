<?php

class Database
{
    private function connect()
    {
        $string=DBDRIVER.":host=".DBHOST.";port=".DBPORT.";dbname=".DBNAME;
        if (!$con=new PDO($string,DBUSER,DBPASS))
        {
        die("连接数据库失败");
        }
    return$con;
    }
    public function query($query,$data=[],$data_type="object")
    {
        $con=$this->connect();
        $stm=$con->prepare($query);
        if ($stm)
        {
            $check=$stm->execute($data);
            if ($check)
            {
                if ($data_type=="object")
                {
                    $data=$stm->fetchAll(PDO::FETCH_OBJ);
                }else
                {
                    $data=$stm->fetchAll(PDO::FETCH_ASSOC);
                }
                if (is_array($data)&&count($data)>0)
                {
                    return $data;
                }
            }
        }
        return false;
    }
}