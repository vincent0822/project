<form action="" method="get">
    <input type="text" value="<?php echo $keyword ?>" name="keyword">
    <input type="submit" value="搜索">
</form>

<p><a href="item/manage">新建</a></p>

<table>
    <tr>
        <th>ID</th>
        <th>内容</th>
        <th>操作</th>
    </tr>
    <?php foreach ($items as $item): ?>
        <tr>
            <td><?php echo $item->getId() ?></td>
            <td>
                <a href="/item/detail/<?php echo $item->getId() ?>" title="查看详情">
                    <?php echo $item->getname() ?>
                </a>
            </td>
            <td>
                <a href="/item/manage/<?php echo $item->getId() ?>">编辑</a>
                <a href="/item/delete/<?php echo $item->getId() ?>">删除</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
