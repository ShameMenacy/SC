<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Question'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="question form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
            echo $this->Form->control('QuestionTypeId');
            echo $this->Form->control('QuestionDetails');
            echo $this->Form->control('CreateDate');
            echo $this->Form->control('UpdateTime');
            echo $this->Form->control('QuestionFlag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
