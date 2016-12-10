<nav class="col-md-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School Class'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Teachers'), ['controller' => 'SchoolTeachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Teacher'), ['controller' => 'SchoolTeachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Students'), ['controller' => 'SchoolStudents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Student'), ['controller' => 'SchoolStudents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolClasses index col-md-12 col-xs-12 columns content">
    <div class="box">
        <div class="box-header">
        <h3 class="box-title"><?= __('School Classes') ?></h3>
    </div>
        <div class="box-body">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_teacher_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schoolClasses as $schoolClass): ?>
            <tr>
                <td><?= $this->Number->format($schoolClass->id) ?></td>
                <td><?= h($schoolClass->code) ?></td>
                <td><?= $schoolClass->has('school_teacher') ? $this->Html->link($schoolClass->school_teacher->name, ['controller' => 'SchoolTeachers', 'action' => 'view', $schoolClass->school_teacher->id]) : '' ?></td>
                <td><?= h($schoolClass->name) ?></td>
                <td><?= h($schoolClass->created) ?></td>
                <td><?= h($schoolClass->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schoolClass->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolClass->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolClass->id)]) ?>
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
