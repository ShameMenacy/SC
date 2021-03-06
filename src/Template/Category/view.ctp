<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Category $category
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->idCategory]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->idCategory], ['confirm' => __('Are you sure you want to delete # {0}?', $category->idCategory)]) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="category view large-9 medium-8 columns content">
    <h3><?= h($category->idCategory) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CategoryTitle') ?></th>
            <td><?= h($category->CategoryTitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCategory') ?></th>
            <td><?= $this->Number->format($category->idCategory) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CategoryFlag') ?></th>
            <td><?= $category->CategoryFlag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('CategoryDescription') ?></h4>
        <?= $this->Text->autoParagraph(h($category->CategoryDescription)); ?>
    </div>
</div>
