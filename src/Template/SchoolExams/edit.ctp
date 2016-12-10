<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schoolExam->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schoolExam->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List School Exams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List School Students'), ['controller' => 'SchoolStudents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Student'), ['controller' => 'SchoolStudents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Subjects'), ['controller' => 'SchoolSubjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Subject'), ['controller' => 'SchoolSubjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolExams form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolExam) ?>
    <fieldset>
        <legend><?= __('Edit School Exam') ?></legend>
        <?php
            echo $this->Form->input('school_student_id', ['options' => $schoolStudents]);
            echo $this->Form->input('school_subject_id', ['options' => $schoolSubjects]);
            echo $this->Form->input('score');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
