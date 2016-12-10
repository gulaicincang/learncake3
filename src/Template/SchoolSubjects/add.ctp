<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List School Subjects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List School Exams'), ['controller' => 'SchoolExams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Exam'), ['controller' => 'SchoolExams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolSubjects form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolSubject) ?>
    <fieldset>
        <legend><?= __('Add School Subject') ?></legend>
        <?php
            echo $this->Form->input('name',['class'=>'form-control','div'=>'form-group']);
        ?>
    </fieldset>
    <div style="margin: 10px auto">
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary btn-sm']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
