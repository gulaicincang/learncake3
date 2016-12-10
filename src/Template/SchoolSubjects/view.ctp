<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School Subject'), ['action' => 'edit', $schoolSubject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School Subject'), ['action' => 'delete', $schoolSubject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolSubject->id)]) ?> </li>
        <li><?= $this->Html->link(__('List School Subjects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Subject'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Exams'), ['controller' => 'SchoolExams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Exam'), ['controller' => 'SchoolExams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schoolSubjects view large-9 medium-8 columns content">
    <h3><?= h($schoolSubject->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($schoolSubject->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schoolSubject->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related School Exams') ?></h4>
        <?php if (!empty($schoolSubject->school_exams)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('School Student Id') ?></th>
                <th scope="col"><?= __('School Subject Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Score') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($schoolSubject->school_exams as $schoolExams): ?>
            <tr>
                <td><?= h($schoolExams->id) ?></td>
                <td><?= h($schoolExams->school_student_id) ?></td>
                <td><?= h($schoolExams->school_subject_id) ?></td>
                <td><?= h($schoolExams->created) ?></td>
                <td><?= h($schoolExams->score) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SchoolExams', 'action' => 'view', $schoolExams->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SchoolExams', 'action' => 'edit', $schoolExams->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SchoolExams', 'action' => 'delete', $schoolExams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolExams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
