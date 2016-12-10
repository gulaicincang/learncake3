<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $schoolTeacher->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $schoolTeacher->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List School Teachers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List School Classes'), ['controller' => 'SchoolClasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Class'), ['controller' => 'SchoolClasses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolTeachers form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolTeacher) ?>
    <fieldset>
        <legend><?= __('Edit School Teacher') ?></legend>
        <?php
            echo $this->Form->input('name',['class'=>'form-control','div'=>'form-group']);
        ?>
    </fieldset>
    <div style="margin: 10px auto">
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary btn-sm']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
