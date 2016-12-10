<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School Student'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Classes'), ['controller' => 'SchoolClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Class'), ['controller' => 'SchoolClasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Exams'), ['controller' => 'SchoolExams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Exam'), ['controller' => 'SchoolExams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolStudents index large-9 medium-8 columns content">
    <h3><?= __('School Students') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
