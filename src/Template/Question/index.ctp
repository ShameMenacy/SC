<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $question
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="question index large-9 medium-8 columns content">
    <h3><?= __('Question') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idQuestion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QuestionTypeId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CreateDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('UpdateTime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QuestionFlag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($question as $question): ?>
            <tr>
                <td><?= $this->Number->format($question->idQuestion) ?></td>
                <td><?= $this->Number->format($question->QuestionTypeId) ?></td>
                <td><?= h($question->CreateDate) ?></td>
                <td><?= h($question->UpdateTime) ?></td>
                <td><?= h($question->QuestionFlag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $question->idQuestion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->idQuestion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->idQuestion], ['confirm' => __('Are you sure you want to delete # {0}?', $question->idQuestion)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
