<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\System $system
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Systems'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="systems form large-9 medium-8 columns content">
    <?= $this->Form->create($system) ?>
    <fieldset>
        <legend><?= __('Add System') ?></legend>
        <?php
            echo $this->Form->control('tipo_identificacion');
            echo $this->Form->control('nro_documento_identificacion');
            echo $this->Form->control('nombre_empresa');
            echo $this->Form->control('direccion_fiscal');
            echo $this->Form->control('telefono_fijo');
            echo $this->Form->control('telefono_celular');
            echo $this->Form->control('email');
            echo $this->Form->control('profile_photo');
            echo $this->Form->control('profile_photo_dir');
            echo $this->Form->control('ambiente');
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
