  <style>
    nav ul li a{
        width: 100px;
        text-align: center;
        border-left: 1px solid #eee!important;
        border-right: 1px solid #fff!important;
    }
    nav ul li a:hover{
        background-color: grey;
        color: white;!important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?=ROOT?>/assets/imgs/logo.jpg" alt="" style="width: 70px" class="border border-primary">我的学校</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=ROOT?>">主页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=ROOT?>/school">学校</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=ROOT?>/classes">班级</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=ROOT?>/user">工作人员</a>
                </li>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            学生
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?=ROOT?>/students">全部学生信息</a></li>
                            <li><a class="dropdown-item" href="<?=ROOT?>/search">查询学生信息</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?=ROOT?>/signup" >添加学生信息</a></li>
                        </ul>
                    </li>
                </ul>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="--><?//=ROOT?><!--/test">测试</a>-->
<!--                </li>-->
            </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            用户
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?=ROOT?>/profile">详细信息</a></li>
                            <li><a class="dropdown-item" href="<?=ROOT?>">表格</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?=ROOT?>/logout" >退出登录</a></li>
                        </ul>
                    </li>
                </ul>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
<!--                </li>-->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="搜索" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">搜索</button>
            </form>
        </div>
    </div>
</nav>