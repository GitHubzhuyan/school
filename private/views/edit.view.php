<?php $this->view('includes/header');?>
<?php $this->view('includes/nav');?>
<form method="post">
        <input type="text" name="firstname" placeholder="姓" class="my-2 form-control"value="<?php echo $rows[0]->firstname?>">
        <input type="text" name="lastname" placeholder="名" class="my-2 form-control"value="<?php echo $rows[0]->lastname?>">
        <input type="email" name="email" placeholder="邮箱" class="my-2 form-control"value="<?php echo $rows[0]->email?>">
            <select name="rank" id="" class="form-control my-2">
                <option value="">--选择成员类别--</option>
                <option value="学生">学生</option>
                <option value="教师">教师</option>
                <option value="行政人员">行政人员</option>
            </select>
        <input type="text" name="password" placeholder="密码" class="my-2 form-control">
        <br>
        <button class="btn btn-danger text-white" name="b" value="2">取消</button>
        <button class="btn btn-primary float-end" name="uid" value="<?php echo $rows[0]->id?>">修改</button>
    </div>
</form>
<?php $this->view('includes/footer'); ?>
