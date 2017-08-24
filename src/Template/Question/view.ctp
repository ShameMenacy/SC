<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Question $question
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->idQuestion]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->idQuestion], ['confirm' => __('Are you sure you want to delete # {0}?', $question->idQuestion)]) ?> </li>
        <li><?= $this->Html->link(__('List Question'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="question view large-9 medium-8 columns content">
    <h3><?= h($question->idQuestion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdQuestion') ?></th>
            <td><?= $this->Number->format($question->idQuestion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuestionTypeId') ?></th>
            <td><?= $this->Number->format($question->QuestionTypeId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CreateDate') ?></th>
            <td><?= h($question->CreateDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UpdateTime') ?></th>
            <td><?= h($question->UpdateTime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuestionFlag') ?></th>
            <td><?= $question->QuestionFlag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('QuestionDetails') ?></h4>
        <?= $this->Text->autoParagraph(h($question->QuestionDetails)); ?>
    </div>
</div>
