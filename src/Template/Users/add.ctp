<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('tipo_identificacion');
            echo $this->Form->control('nro_documento_identidad');
            echo $this->Form->control('role');
            echo $this->Form->control('primer_nombre');
            echo $this->Form->control('segundo_nombre');
            echo $this->Form->control('primer_apellido');
            echo $this->Form->control('segundo_apellido');
            echo $this->Form->control('sexo');
            echo $this->Form->control('email');
            echo $this->Form->control('telefono_celular');
            echo $this->Form->control('profile_photo');
            echo $this->Form->control('profile_photo_dir');
            echo $this->Form->control('columna_extra1');
            echo $this->Form->control('columna_extra2');
            echo $this->Form->control('columna_extra3');
            echo $this->Form->control('columna_extra4');
            echo $this->Form->control('columna_extra5');
            echo $this->Form->control('columna_extra6');
            echo $this->Form->control('columna_extra7');
            echo $this->Form->control('columna_extra8');
            echo $this->Form->control('columna_extra9');
            echo $this->Form->control('columna_extra10');
            echo $this->Form->control('Estatus_registro');
            echo $this->Form->control('motivo_cambio_estatus');
            echo $this->Form->control('fecha_estatus', ['empty' => true]);
            echo $this->Form->control('usuario_responsable');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
