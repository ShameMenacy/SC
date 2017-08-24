<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Answer $answer
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Answer'), ['action' => 'edit', $answer->idAnswer]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Answer'), ['action' => 'delete', $answer->idAnswer], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->idAnswer)]) ?> </li>
        <li><?= $this->Html->link(__('List Answer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answer view large-9 medium-8 columns content">
    <h3><?= h($answer->idAnswer) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdAnswer') ?></th>
            <td><?= $this->Number->format($answer->idAnswer) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('AnswerDetails') ?></h4>
        <?= $this->Text->autoParagraph(h($answer->AnswerDetails)); ?>
    </div>
</div>
