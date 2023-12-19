<?php $this->view('includes/header');?>
<form method="post">
<div class="p-4 mx-auto shadow rounded" style="margin-top: 100px; width: 100%;
max-width: 310px">
    <h2 class="text-center">学校管理系统</h2>
    <h3 class="text-center ">登录</h3>
    <?php
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
    <img src="../public/assets/imgs/logo.jpg" alt="" style="width: 100px"
    class="d-block mx-auto">
    <input type="email" name="email" value="<?=get_var('email')?>" placeholder="邮箱" class="form-control">
    <input type="password" name="password" value="<?=get_var('password')?>"placeholder="密码" class="form-control">
<button class="btn btn-primary">登录</button>
    <button class="btn btn-primary float-end" name="a" value="1">注册</button>
</div>
</form>
<?php $this->view('includes/footer'); ?>