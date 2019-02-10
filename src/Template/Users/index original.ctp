<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_identificacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_documento_identidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primer_nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('segundo_nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primer_apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('segundo_apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra6') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra7') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra8') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra9') ?></th>
                <th scope="col"><?= $this->Paginator->sort('columna_extra10') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estatus_registro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo_cambio_estatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_estatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_responsable') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->tipo_identificacion) ?></td>
                <td><?= h($user->nro_documento_identidad) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->primer_nombre) ?></td>
                <td><?= h($user->segundo_nombre) ?></td>
                <td><?= h($user->primer_apellido) ?></td>
                <td><?= h($user->segundo_apellido) ?></td>
                <td><?= h($user->sexo) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->telefono_celular) ?></td>
                <td><?= h($user->profile_photo) ?></td>
                <td><?= h($user->profile_photo_dir) ?></td>
                <td><?= h($user->columna_extra1) ?></td>
                <td><?= h($user->columna_extra2) ?></td>
                <td><?= h($user->columna_extra3) ?></td>
                <td><?= h($user->columna_extra4) ?></td>
                <td><?= h($user->columna_extra5) ?></td>
                <td><?= h($user->columna_extra6) ?></td>
                <td><?= h($user->columna_extra7) ?></td>
                <td><?= h($user->columna_extra8) ?></td>
                <td><?= h($user->columna_extra9) ?></td>
                <td><?= h($user->columna_extra10) ?></td>
                <td><?= h($user->Estatus_registro) ?></td>
                <td><?= h($user->motivo_cambio_estatus) ?></td>
                <td><?= h($user->fecha_estatus) ?></td>
                <td><?= h($user->usuario_responsable) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
