<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $category
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="category index large-9 medium-8 columns content">
    <h3><?= __('Category') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idCategory') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CategoryTitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CategoryFlag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($category as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->idCategory) ?></td>
                <td><?= h($category->CategoryTitle) ?></td>
                <td><?= h($category->CategoryFlag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $category->idCategory]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->idCategory]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->idCategory], ['confirm' => __('Are you sure you want to delete # {0}?', $category->idCategory)]) ?>
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
