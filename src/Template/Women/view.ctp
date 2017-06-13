<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Woman'), ['action' => 'edit', $woman->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Woman'), ['action' => 'delete', $woman->id], ['confirm' => __('Are you sure you want to delete # {0}?', $woman->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Women'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Woman'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="women view large-9 medium-8 columns content">
    <h3><?= h($woman->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($woman->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Viaf Url') ?></th>
            <td><?= h($woman->viaf_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name English') ?></th>
            <td><?= h($woman->name_english) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Spanish') ?></th>
            <td><?= h($woman->name_spanish) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Portuguese') ?></th>
            <td><?= h($woman->name_portuguese) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name Other') ?></th>
            <td><?= h($woman->name_other) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Year') ?></th>
            <td><?= h($woman->birth_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Death Year') ?></th>
            <td><?= h($woman->death_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Religious Order') ?></th>
            <td><?= h($woman->religious_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($woman->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Approx') ?></th>
            <td><?= $this->Number->format($woman->birth_approx) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Death Approx') ?></th>
            <td><?= $this->Number->format($woman->death_approx) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($woman->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($woman->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Related To') ?></h4>
        <?= $this->Text->autoParagraph(h($woman->related_to)); ?>
    </div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($woman->notes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($woman->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Woman Id') ?></th>
                <th scope="col"><?= __('Convent Id') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Start Year') ?></th>
                <th scope="col"><?= __('End Year') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($woman->roles as $roles): ?>
            <tr>
                <td><?= h($roles->id) ?></td>
                <td><?= h($roles->woman_id) ?></td>
                <td><?= h($roles->convent_id) ?></td>
                <td><?= h($roles->role) ?></td>
                <td><?= h($roles->start_year) ?></td>
                <td><?= h($roles->end_year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $roles->woman_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $roles->woman_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $roles->woman_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roles->woman_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
