<nav class="col-md-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School Exam'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Students'), ['controller' => 'SchoolStudents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Student'), ['controller' => 'SchoolStudents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Subjects'), ['controller' => 'SchoolSubjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Subject'), ['controller' => 'SchoolSubjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolExams index col-md-12 col-xs-12 columns content">
    <div class="box">
        <div class="box-header">
        <h3 class="box-title"><?= __('School Exams') ?></h3>
    </div>
        <div class="box-body">
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_subject_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('score') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schoolExams as $schoolExam): ?>
            <tr>
                <td><?= $this->Number->format($schoolExam->id) ?></td>
                <td><?= $schoolExam->has('school_student') ? $this->Html->link($schoolExam->school_student->name, ['controller' => 'SchoolStudents', 'action' => 'view', $schoolExam->school_student->id]) : '' ?></td>
                <td><?= $schoolExam->has('school_subject') ? $this->Html->link($schoolExam->school_subject->name, ['controller' => 'SchoolSubjects', 'action' => 'view', $schoolExam->school_subject->id]) : '' ?></td>
                <td><?= h($schoolExam->created) ?></td>
                <td><?= $this->Number->format($schoolExam->score) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $schoolExam->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schoolExam->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schoolExam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolExam->id)]) ?>
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
