<?php $this->view('includes/header');?>
<?php $this->view('includes/nav');?>
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs');?>
<div class="row justify-content-center">
    <?php
    foreach ($rows as $row):
    ?>
    <div class="col-12  col-md-6 col-xl-4">
        <div class="card">
            <img src="<?=ROOT?>/assets/imgs/default_head_icon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$row->firstname?><?=$row->lastname?></h5>
                <p class="card-text"><?=$row->rank?></p>
                <a href="#" class="btn btn-primary">个人信息</a>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
</div>
<?php $this->view('includes/footer'); ?>
