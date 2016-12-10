<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schoolClass->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schoolClass->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List School Classes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List School Teachers'), ['controller' => 'SchoolTeachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Teacher'), ['controller' => 'SchoolTeachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Students'), ['controller' => 'SchoolStudents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Student'), ['controller' => 'SchoolStudents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolClasses form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolClass) ?>
    <fieldset>
        <legend><?= __('Edit School Class') ?></legend>
        <?php
            echo $this->Form->input('code',['class'=>'form-control','div'=>'form-group']);
            echo $this->Form->input('school_teacher_id', ['options' => $schoolTeachers,'class'=>'form-control','div'=>'form-group']);
            echo $this->Form->input('name',['class'=>'form-control','div'=>'form-group']);
            echo $this->Form->input('deleted',['class'=>'form-control','div'=>'form-group']);
        ?>
    </fieldset>
    <div style="margin: 10px auto">
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary btn-sm']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
