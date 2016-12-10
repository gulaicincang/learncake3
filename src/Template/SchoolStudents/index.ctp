<nav class="col-md-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School Student'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Classes'), ['controller' => 'SchoolClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Class'), ['controller' => 'SchoolClasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Exams'), ['controller' => 'SchoolExams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Exam'), ['controller' => 'SchoolExams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolStudents index col-md-12 col-xs-12 columns content">
    <div class="box">
        <div class="box-header">
        <h3 class="box-title"><?= __('School Students') ?></h3>
    </div>
        <div class="box-body">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_class_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schoolStudents as $schoolStudent): ?>
            <tr>
                <td><?= $this->Number->format($schoolStudent->id) ?></td>
                <td><?= h($schoolStudent->name) ?></td>
                <td><?= $schoolStudent->has('school_class') ? $this->Html->link($schoolStudent->school_class->name, ['controller' => 'SchoolClasses', 'action' => 'view', $schoolStudent->school_class->id]) : '' ?></td>
                <td><?= h($schoolStudent->created) ?></td>
                <td><?= h($schoolStudent->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schoolStudent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolStudent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolStudent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolStudent->id)]) ?>
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
