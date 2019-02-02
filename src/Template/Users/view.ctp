<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Identificacion') ?></th>
            <td><?= h($user->tipo_identificacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Documento Identidad') ?></th>
            <td><?= h($user->nro_documento_identidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primer Nombre') ?></th>
            <td><?= h($user->primer_nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segundo Nombre') ?></th>
            <td><?= h($user->segundo_nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primer Apellido') ?></th>
            <td><?= h($user->primer_apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segundo Apellido') ?></th>
            <td><?= h($user->segundo_apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($user->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Celular') ?></th>
            <td><?= h($user->telefono_celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Photo') ?></th>
            <td><?= h($user->profile_photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Photo Dir') ?></th>
            <td><?= h($user->profile_photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra1') ?></th>
            <td><?= h($user->columna_extra1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra2') ?></th>
            <td><?= h($user->columna_extra2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra3') ?></th>
            <td><?= h($user->columna_extra3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra4') ?></th>
            <td><?= h($user->columna_extra4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra5') ?></th>
            <td><?= h($user->columna_extra5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra6') ?></th>
            <td><?= h($user->columna_extra6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra7') ?></th>
            <td><?= h($user->columna_extra7) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra8') ?></th>
            <td><?= h($user->columna_extra8) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra9') ?></th>
            <td><?= h($user->columna_extra9) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Columna Extra10') ?></th>
            <td><?= h($user->columna_extra10) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatus Registro') ?></th>
            <td><?= h($user->Estatus_registro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo Cambio Estatus') ?></th>
            <td><?= h($user->motivo_cambio_estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Responsable') ?></th>
            <td><?= h($user->usuario_responsable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Estatus') ?></th>
            <td><?= h($user->fecha_estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
