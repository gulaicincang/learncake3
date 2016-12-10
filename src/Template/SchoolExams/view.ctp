<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School Exam'), ['action' => 'edit', $schoolExam->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School Exam'), ['action' => 'delete', $schoolExam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolExam->id)]) ?> </li>
        <li><?= $this->Html->link(__('List School Exams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Exam'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Students'), ['controller' => 'SchoolStudents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Student'), ['controller' => 'SchoolStudents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List School Subjects'), ['controller' => 'SchoolSubjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School Subject'), ['controller' => 'SchoolSubjects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schoolExams view large-9 medium-8 columns content">
    <h3><?= h($schoolExam->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('School Student') ?></th>
            <td><?= $schoolExam->has('school_student') ? $this->Html->link($schoolExam->school_student->name, ['controller' => 'SchoolStudents', 'action' => 'view', $schoolExam->school_student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School Subject') ?></th>
            <td><?= $schoolExam->has('school_subject') ? $this->Html->link($schoolExam->school_subject->name, ['controller' => 'SchoolSubjects', 'action' => 'view', $schoolExam->school_subject->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($schoolExam->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Score') ?></th>
            <td><?= $this->Number->format($schoolExam->score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($schoolExam->created) ?></td>
        </tr>
    </table>
</div>
