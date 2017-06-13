<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $woman->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $woman->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Women'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="women form large-9 medium-8 columns content">
    <?= $this->Form->create($woman) ?>
    <fieldset>
        <legend><?= __('Edit Woman') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('viaf_url');
            echo $this->Form->control('name_english');
            echo $this->Form->control('name_spanish');
            echo $this->Form->control('name_portuguese');
            echo $this->Form->control('name_other');
            echo $this->Form->control('birth_approx');
            echo $this->Form->control('birth_year');
            echo $this->Form->control('death_approx');
            echo $this->Form->control('death_year');
            echo $this->Form->control('related_to');
            echo $this->Form->control('religious_order');
            echo $this->Form->control('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
