<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\System $system
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit System'), ['action' => 'edit', $system->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete System'), ['action' => 'delete', $system->id], ['confirm' => __('Are you sure you want to delete # {0}?', $system->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="systems view large-9 medium-8 columns content">
    <h3><?= h($system->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Identificacion') ?></th>
            <td><?= h($system->tipo_identificacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Documento Identificacion') ?></th>
            <td><?= h($system->nro_documento_identificacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Empresa') ?></th>
            <td><?= h($system->nombre_empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion Fiscal') ?></th>
            <td><?= h($system->direccion_fiscal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Fijo') ?></th>
            <td><?= h($system->telefono_fijo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Celular') ?></th>
            <td><?= h($system->telefono_celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($system->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Photo') ?></th>
            <td><?= h($system->profile_photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Photo Dir') ?></th>
            <td><?= h($system->profile_photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ambiente') ?></th>
            <td><?= h($system->ambiente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra1') ?></th>
            <td><?= h($system->columna_extra1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra2') ?></th>
            <td><?= h($system->columna_extra2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra3') ?></th>
            <td><?= h($system->columna_extra3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra4') ?></th>
            <td><?= h($system->columna_extra4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra5') ?></th>
            <td><?= h($system->columna_extra5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra6') ?></th>
            <td><?= h($system->columna_extra6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra7') ?></th>
            <td><?= h($system->columna_extra7) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra8') ?></th>
            <td><?= h($system->columna_extra8) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra9') ?></th>
            <td><?= h($system->columna_extra9) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra10') ?></th>
            <td><?= h($system->columna_extra10) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatus Registro') ?></th>
            <td><?= h($system->Estatus_registro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo Cambio Estatus') ?></th>
            <td><?= h($system->motivo_cambio_estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Responsable') ?></th>
            <td><?= h($system->usuario_responsable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($system->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Estatus') ?></th>
            <td><?= h($system->fecha_estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($system->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($system->modified) ?></td>
        </tr>
    </table>
</div>
