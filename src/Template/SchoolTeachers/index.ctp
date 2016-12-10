<nav class="col-md-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School Teacher'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Classes'), ['controller' => 'SchoolClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Class'), ['controller' => 'SchoolClasses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolTeachers index col-md-12 col-xs-12 columns content">
    <div class="box">
        <div class="box-header">
        <h3 class="box-title"><?= __('School Teachers') ?></h3>
    </div>
        <div class="box-body">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schoolTeachers as $schoolTeacher): ?>
            <tr>
                <td><?= $this->Number->format($schoolTeacher->id) ?></td>
                <td><?= h($schoolTeacher->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schoolTeacher->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolTeacher->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolTeacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolTeacher->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            </div>
    <div class="box-footer">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
    </div>
