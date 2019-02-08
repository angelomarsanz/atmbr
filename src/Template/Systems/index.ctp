<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\System[]|\Cake\Collection\CollectionInterface $systems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New System'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="systems index large-9 medium-8 columns content">
    <h3><?= __('Systems') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_identificacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_documento_identificacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_empresa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion_fiscal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_fijo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ambiente') ?></th>
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
            <?php foreach ($systems as $system): ?>
            <tr>
                <td><?= $this->Number->format($system->id) ?></td>
                <td><?= h($system->tipo_identificacion) ?></td>
                <td><?= h($system->nro_documento_identificacion) ?></td>
                <td><?= h($system->nombre_empresa) ?></td>
                <td><?= h($system->direccion_fiscal) ?></td>
                <td><?= h($system->telefono_fijo) ?></td>
                <td><?= h($system->telefono_celular) ?></td>
                <td><?= h($system->email) ?></td>
                <td><?= h($system->profile_photo) ?></td>
                <td><?= h($system->profile_photo_dir) ?></td>
                <td><?= h($system->ambiente) ?></td>
                <td><?= h($system->columna_extra1) ?></td>
                <td><?= h($system->columna_extra2) ?></td>
                <td><?= h($system->columna_extra3) ?></td>
                <td><?= h($system->columna_extra4) ?></td>
                <td><?= h($system->columna_extra5) ?></td>
                <td><?= h($system->columna_extra6) ?></td>
                <td><?= h($system->columna_extra7) ?></td>
                <td><?= h($system->columna_extra8) ?></td>
                <td><?= h($system->columna_extra9) ?></td>
                <td><?= h($system->columna_extra10) ?></td>
                <td><?= h($system->Estatus_registro) ?></td>
                <td><?= h($system->motivo_cambio_estatus) ?></td>
                <td><?= h($system->fecha_estatus) ?></td>
                <td><?= h($system->usuario_responsable) ?></td>
                <td><?= h($system->created) ?></td>
                <td><?= h($system->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $system->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $system->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $system->id], ['confirm' => __('Are you sure you want to delete # {0}?', $system->id)]) ?>
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
