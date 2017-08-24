<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\QuestionAnswer[]|\Cake\Collection\CollectionInterface $questionAnswer
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question Answer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionAnswer index large-9 medium-8 columns content">
    <h3><?= __('Question Answer') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idquestion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idanwer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isTrue') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionAnswer as $questionAnswer): ?>
            <tr>
                <td><?= $this->Number->format($questionAnswer->idquestion) ?></td>
                <td><?= $this->Number->format($questionAnswer->idanwer) ?></td>
                <td><?= h($questionAnswer->isTrue) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionAnswer->idquestion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionAnswer->idquestion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionAnswer->idquestion], ['confirm' => __('Are you sure you want to delete # {0}?', $questionAnswer->idquestion)]) ?>
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
