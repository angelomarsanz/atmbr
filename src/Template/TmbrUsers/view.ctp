<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TmbrUser $tmbrUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tmbr User'), ['action' => 'edit', $tmbrUser->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tmbr User'), ['action' => 'delete', $tmbrUser->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $tmbrUser->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Tmbr Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tmbr User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tmbrUsers view large-9 medium-8 columns content">
    <h3><?= h($tmbrUser->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Login') ?></th>
            <td><?= h($tmbrUser->user_login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Pass') ?></th>
            <td><?= h($tmbrUser->user_pass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Nicename') ?></th>
            <td><?= h($tmbrUser->user_nicename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Email') ?></th>
            <td><?= h($tmbrUser->user_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Url') ?></th>
            <td><?= h($tmbrUser->user_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Activation Key') ?></th>
            <td><?= h($tmbrUser->user_activation_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Display Name') ?></th>
            <td><?= h($tmbrUser->display_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($tmbrUser->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Status') ?></th>
            <td><?= $this->Number->format($tmbrUser->user_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Registered') ?></th>
            <td><?= h($tmbrUser->user_registered) ?></td>
        </tr>
    </table>
</div>
