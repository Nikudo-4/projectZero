<div class="container">
    <div class="row">
        <div class="col-lg-8">
              <h2 class="comment-reply-title"><?php echo $title; ?></h2>
                <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
                <?php else: ?>
                    <table class="table">
                        <tr>
                            <td>id</td>
                            <td>Название</td>
                            <td>Редактировать</td>
                            <td>Удалить</td>
                        </tr>
                        <?php foreach($list as $val): ?>
                        <tr>
                            <td><?php echo $val['id'] ?></td>
                            <td><?php echo htmlspecialchars($val['name'],ENT_QUOTES); ?></td>
                            <td><a href="/admin/edit/<?php echo $val['id'] ?>" class="btn btn-primary">Редактировать</a></td>
                            <td><a href="/admin/delete/<?php echo $val['id'] ?>" class="btn btn-danger">Удалит</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php echo $pagination; ?>
                    <?php endif; ?>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</div>