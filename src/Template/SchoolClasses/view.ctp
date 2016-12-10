<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School Class'), ['action' => 'edit', $schoolClass->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School Class'), ['action' => 'delete', $schoolClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolClass->id)]) ?> </li>
        <li><?= $this->Html->link(__('List School Classes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Class'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Students'), ['controller' => 'SchoolStudents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Student'), ['controller' => 'SchoolStudents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schoolClasses view large-9 medium-8 columns content">
    <h3><?= h($schoolClass->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($schoolClass->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($schoolClass->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schoolClass->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Teacher Id') ?></th>
            <td><?= $this->Number->format($schoolClass->school_teacher_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($schoolClass->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($schoolClass->deleted) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related School Students') ?></h4>
        <?php if (!empty($schoolClass->school_students)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('School Class Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($schoolClass->school_students as $schoolStudents): ?>
            <tr>
                <td><?= h($schoolStudents->id) ?></td>
                <td><?= h($schoolStudents->name) ?></td>
                <td><?= h($schoolStudents->school_class_id) ?></td>
                <td><?= h($schoolStudents->created) ?></td>
                <td><?= h($schoolStudents->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SchoolStudents', 'action' => 'view', $schoolStudents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SchoolStudents', 'action' => 'edit', $schoolStudents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SchoolStudents', 'action' => 'delete', $schoolStudents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolStudents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
