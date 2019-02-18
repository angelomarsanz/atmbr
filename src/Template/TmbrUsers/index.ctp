<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TmbrUser[]|\Cake\Collection\CollectionInterface $tmbrUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tmbr User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tmbrUsers index large-9 medium-8 columns content">
    <h3><?= __('Tmbr Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_pass') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_nicename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_registered') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_activation_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('display_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tmbrUsers as $tmbrUser): ?>
            <tr>
                <td><?= $this->Number->format($tmbrUser->ID) ?></td>
                <td><?= h($tmbrUser->user_login) ?></td>
                <td><?= h($tmbrUser->user_pass) ?></td>
                <td><?= h($tmbrUser->user_nicename) ?></td>
                <td><?= h($tmbrUser->user_email) ?></td>
                <td><?= h($tmbrUser->user_url) ?></td>
                <td><?= h($tmbrUser->user_registered) ?></td>
                <td><?= h($tmbrUser->user_activation_key) ?></td>
                <td><?= $this->Number->format($tmbrUser->user_status) ?></td>
                <td><?= h($tmbrUser->display_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tmbrUser->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tmbrUser->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tmbrUser->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $tmbrUser->ID)]) ?>
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
