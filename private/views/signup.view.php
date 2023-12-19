<?php $this->view('includes/header');?>
<?php
//print_r($_POST);
//print_r($errors);
?>
<form method="post">
    <div class="mx-auto shadow rounded" style="margin-top: 100px; width: 100%;
max-width: 310px">
        <h2 class="text-center">学校管理系统</h2>
        <img src="../public/assets/imgs/logo.jpg" alt="" style="width: 100px"
             class="d-block mx-auto">
        <h3 class="text-center ">添加成员</h3>
        <?php //print_r($_SESSION);
        if (count($errors)>0){
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>错误!</strong><br>
            <?php
            foreach ($errors as $errors)
            {
                echo "<br>$errors";
            }
                ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php }?>
        <br>
        <input type="text" name="firstname" placeholder="姓" class="my-2 form-control"value="<?=get_var('firstname')?>">
        <input type="text" name="lastname" placeholder="名" class="my-2 form-control"value="<?=get_var('lastname')?>">
        <input type="email" name="email" placeholder="邮箱" class="my-2 form-control"value="<?=get_var('email')?>">
        <select name="gender" id="" class="form-control my-2">
            <option <?=get_select('gender','')?> value="">--选择性别--</option>
            <option <?=get_select('gender','男')?> value="男">男</option>
            <option <?=get_select('gender','女')?> value="女">女</option>
        </select>
        <?php if (isset($_SESSION['USER'])&&$_SESSION['USER']->rank=='学生'){?>
            <input type="hidden" name="rank" value="学生">
        <?php }else{?>
        <select name="rank" id="" class="form-control my-2">
            <option <?=get_select('rank','')?> value="">--选择成员类别--</option>
            <option <?=get_select('rank','学生')?> value="学生">学生</option>
            <option <?=get_select('rank','教师')?> value="教师">教师</option>
            <option <?=get_select('rank','行政人员')?> value="行政人员">行政人员</option>
            <option <?=get_select('rank','学校管理员')?> value="学校管理员">学校管理员</option>
            <option <?=get_select('rank','超级管理员')?> value="超级管理员">超级管理员</option>
        </select>
    <?php }?>
        <input type="text" name="password" placeholder="密码" class="my-2 form-control" value="<?=get_var('password')?>">
        <input type="text" name="password1" placeholder="重复密码" class="my-2 form-control"value="<?=get_var('password1')?>">
        <br>
        <button class="btn btn-danger text-white" name="b" value="2">取消</button>
        <button class="btn btn-primary float-end">添加成员</button>
    </div>
</form>
<?php $this->view('includes/footer'); ?>