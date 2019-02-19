<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Binnacle $binnacle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Binnacle'), ['action' => 'edit', $binnacle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Binnacle'), ['action' => 'delete', $binnacle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $binnacle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Binnacles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Binnacle'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="binnacles view large-9 medium-8 columns content">
    <h3><?= h($binnacle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Novedad') ?></th>
            <td><?= h($binnacle->novedad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Clase') ?></th>
            <td><?= h($binnacle->tipo_clase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Clase') ?></th>
            <td><?= h($binnacle->nombre_clase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Metodo') ?></th>
            <td><?= h($binnacle->nombre_metodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra1') ?></th>
            <td><?= h($binnacle->columna_extra1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra2') ?></th>
            <td><?= h($binnacle->columna_extra2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra3') ?></th>
            <td><?= h($binnacle->columna_extra3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra4') ?></th>
            <td><?= h($binnacle->columna_extra4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra5') ?></th>
            <td><?= h($binnacle->columna_extra5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra6') ?></th>
            <td><?= h($binnacle->columna_extra6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra7') ?></th>
            <td><?= h($binnacle->columna_extra7) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra8') ?></th>
            <td><?= h($binnacle->columna_extra8) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra9') ?></th>
            <td><?= h($binnacle->columna_extra9) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra10') ?></th>
            <td><?= h($binnacle->columna_extra10) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatus Registro') ?></th>
            <td><?= h($binnacle->estatus_registro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo Cambio Estatus') ?></th>
            <td><?= h($binnacle->motivo_cambio_estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Responsable') ?></th>
            <td><?= h($binnacle->usuario_responsable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($binnacle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Estatus') ?></th>
            <td><?= h($binnacle->fecha_estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($binnacle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($binnacle->modified) ?></td>
        </tr>
    </table>
</div>
