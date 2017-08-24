<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\QuestionAnswer $questionAnswer
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question Answer'), ['action' => 'edit', $questionAnswer->idquestion]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question Answer'), ['action' => 'delete', $questionAnswer->idquestion], ['confirm' => __('Are you sure you want to delete # {0}?', $questionAnswer->idquestion)]) ?> </li>
        <li><?= $this->Html->link(__('List Question Answer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question Answer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionAnswer view large-9 medium-8 columns content">
    <h3><?= h($questionAnswer->idquestion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Idquestion') ?></th>
            <td><?= $this->Number->format($questionAnswer->idquestion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idanwer') ?></th>
            <td><?= $this->Number->format($questionAnswer->idanwer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IsTrue') ?></th>
            <td><?= $questionAnswer->isTrue ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
