<nav class="col-md-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School Subject'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Exams'), ['controller' => 'SchoolExams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Exam'), ['controller' => 'SchoolExams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolSubjects index col-md-12 col-xs-12 columns content">
    <div class="box">
        <div class="box-header">
        <h3 class="box-title"><?= __('School Subjects') ?></h3>
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
            <?php foreach ($schoolSubjects as $schoolSubject): ?>
            <tr>
                <td><?= $this->Number->format($schoolSubject->id) ?></td>
                <td><?= h($schoolSubject->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schoolSubject->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolSubject->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolSubject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolSubject->id)]) ?>
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
