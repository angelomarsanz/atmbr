<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TmbrUsermetum $tmbrUsermetum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tmbr Usermetum'), ['action' => 'edit', $tmbrUsermetum->umeta_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tmbr Usermetum'), ['action' => 'delete', $tmbrUsermetum->umeta_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmbrUsermetum->umeta_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tmbr Usermeta'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tmbr Usermetum'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tmbrUsermeta view large-9 medium-8 columns content">
    <h3><?= h($tmbrUsermetum->umeta_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $tmbrUsermetum->has('user') ? $this->Html->link($tmbrUsermetum->user->id, ['controller' => 'Users', 'action' => 'view', $tmbrUsermetum->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meta Key') ?></th>
            <td><?= h($tmbrUsermetum->meta_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Umeta Id') ?></th>
            <td><?= $this->Number->format($tmbrUsermetum->umeta_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Meta Value') ?></h4>
        <?= $this->Text->autoParagraph(h($tmbrUsermetum->meta_value)); ?>
    </div>
</div>
