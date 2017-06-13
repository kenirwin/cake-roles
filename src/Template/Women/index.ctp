<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Woman'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="women index large-9 medium-8 columns content">
    <h3><?= __('Women') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('viaf_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_english') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_spanish') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_portuguese') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_other') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_approx') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('death_approx') ?></th>
                <th scope="col"><?= $this->Paginator->sort('death_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('religious_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($women as $woman): ?>
            <tr>
                <td><?= $this->Number->format($woman->id) ?></td>
                <td><?= h($woman->name) ?></td>
                <td><?= h($woman->viaf_url) ?></td>
                <td><?= h($woman->name_english) ?></td>
                <td><?= h($woman->name_spanish) ?></td>
                <td><?= h($woman->name_portuguese) ?></td>
                <td><?= h($woman->name_other) ?></td>
                <td><?= $this->Number->format($woman->birth_approx) ?></td>
                <td><?= h($woman->birth_year) ?></td>
                <td><?= $this->Number->format($woman->death_approx) ?></td>
                <td><?= h($woman->death_year) ?></td>
                <td><?= h($woman->religious_order) ?></td>
                <td><?= h($woman->created) ?></td>
                <td><?= h($woman->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $woman->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $woman->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $woman->id], ['confirm' => __('Are you sure you want to delete # {0}?', $woman->id)]) ?>
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
