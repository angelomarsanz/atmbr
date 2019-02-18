<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TmbrUsermetum $tmbrUsermetum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tmbrUsermetum->umeta_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tmbrUsermetum->umeta_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tmbr Usermeta'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tmbrUsermeta form large-9 medium-8 columns content">
    <?= $this->Form->create($tmbrUsermetum) ?>
    <fieldset>
        <legend><?= __('Edit Tmbr Usermetum') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('meta_key');
            echo $this->Form->control('meta_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
