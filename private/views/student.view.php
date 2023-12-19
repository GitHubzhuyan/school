<?php $this->view('includes/header');?>
<?php $this->view('includes/nav');?>
<form method="post">
<div>
    <table>
        <tr>
            <td>姓</td>
            <td>名</td>
            <td>性别</td>
            <td>学生ID</td>
            <td>邮箱</td>
            <td>操作</td>
        </tr>
        <?php if(isset($rows[0]->id))
        {foreach ($rows as $row):?>
            <tr bgColor="#ffffff">
                <td><?php echo $row->firstname; ?></td>
                <td><?php echo $row->lastname; ?></td>
                <td><?php echo $row->gender; ?></td>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->email; ?></td>
                <td>
                    <button name="up_id" value="<?php echo $row->id; ?>"onclick="updateinfo()">修改</button>
                    <button name="del_id" value="<?php echo $row->id; ?>" onclick="deleteinfo()">删除</button>
                </td>
            </tr>
        <?php endforeach;}
                            ?>
    </table>
</div>
</form>
    <script>
        function updateinfo() {
            if (confirm("确定要修改此信息吗？")) {
                window.location.href="<?=ROOT?>/edit";
            }
        }
        function deleteinfo(id) {
            if (confirm("确定要删除此信息吗？")) {
                window.location.href = "Students.php?id=" + id;
            }
        }
    </script>
<?php $this->view('includes/footer'); ?>