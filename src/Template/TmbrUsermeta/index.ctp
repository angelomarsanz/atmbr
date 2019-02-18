<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TmbrUsermetum[]|\Cake\Collection\CollectionInterface $tmbrUsermeta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tmbr Usermetum'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tmbrUsermeta index large-9 medium-8 columns content">
    <h3><?= __('Tmbr Usermeta') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('umeta_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('meta_key') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tmbrUsermeta as $tmbrUsermetum): ?>
            <tr>
                <td><?= $this->Number->format($tmbrUsermetum->umeta_id) ?></td>
                <td><?= $tmbrUsermetum->has('user') ? $this->Html->link($tmbrUsermetum->user->id, ['controller' => 'Users', 'action' => 'view', $tmbrUsermetum->user->id]) : '' ?></td>
                <td><?= h($tmbrUsermetum->meta_key) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tmbrUsermetum->umeta_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tmbrUsermetum->umeta_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tmbrUsermetum->umeta_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmbrUsermetum->umeta_id)]) ?>
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
