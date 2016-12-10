<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School Teacher'), ['action' => 'edit', $schoolTeacher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School Teacher'), ['action' => 'delete', $schoolTeacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolTeacher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List School Teachers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Teacher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Classes'), ['controller' => 'SchoolClasses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Class'), ['controller' => 'SchoolClasses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schoolTeachers view large-9 medium-8 columns content">
    <h3><?= h($schoolTeacher->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($schoolTeacher->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schoolTeacher->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related School Classes') ?></h4>
        <?php if (!empty($schoolTeacher->school_classes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('School Teacher Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($schoolTeacher->school_classes as $schoolClasses): ?>
            <tr>
                <td><?= h($schoolClasses->id) ?></td>
                <td><?= h($schoolClasses->code) ?></td>
                <td><?= h($schoolClasses->school_teacher_id) ?></td>
                <td><?= h($schoolClasses->name) ?></td>
                <td><?= h($schoolClasses->created) ?></td>
                <td><?= h($schoolClasses->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SchoolClasses', 'action' => 'view', $schoolClasses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SchoolClasses', 'action' => 'edit', $schoolClasses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SchoolClasses', 'action' => 'delete', $schoolClasses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolClasses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
