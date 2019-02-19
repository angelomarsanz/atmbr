<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Binnacle $binnacle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $binnacle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $binnacle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Binnacles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="binnacles form large-9 medium-8 columns content">
    <?= $this->Form->create($binnacle) ?>
    <fieldset>
        <legend><?= __('Edit Binnacle') ?></legend>
        <?php
            echo $this->Form->control('novedad');
            echo $this->Form->control('tipo_clase');
            echo $this->Form->control('nombre_clase');
            echo $this->Form->control('nombre_metodo');
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
            echo $this->Form->control('estatus_registro');
            echo $this->Form->control('motivo_cambio_estatus');
            echo $this->Form->control('fecha_estatus', ['empty' => true]);
            echo $this->Form->control('usuario_responsable');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
