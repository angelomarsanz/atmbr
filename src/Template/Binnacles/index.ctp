<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Binnacle[]|\Cake\Collection\CollectionInterface $binnacles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Binnacle'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="binnacles index large-9 medium-8 columns content">
    <h3><?= __('Binnacles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('novedad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_clase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_clase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_metodo') ?></th>
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
                <th scope="col"><?= $this->Paginator->sort('estatus_registro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motivo_cambio_estatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_estatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_responsable') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($binnacles as $binnacle): ?>
            <tr>
                <td><?= $this->Number->format($binnacle->id) ?></td>
                <td><?= h($binnacle->novedad) ?></td>
                <td><?= h($binnacle->tipo_clase) ?></td>
                <td><?= h($binnacle->nombre_clase) ?></td>
                <td><?= h($binnacle->nombre_metodo) ?></td>
                <td><?= h($binnacle->columna_extra1) ?></td>
                <td><?= h($binnacle->columna_extra2) ?></td>
                <td><?= h($binnacle->columna_extra3) ?></td>
                <td><?= h($binnacle->columna_extra4) ?></td>
                <td><?= h($binnacle->columna_extra5) ?></td>
                <td><?= h($binnacle->columna_extra6) ?></td>
                <td><?= h($binnacle->columna_extra7) ?></td>
                <td><?= h($binnacle->columna_extra8) ?></td>
                <td><?= h($binnacle->columna_extra9) ?></td>
                <td><?= h($binnacle->columna_extra10) ?></td>
                <td><?= h($binnacle->estatus_registro) ?></td>
                <td><?= h($binnacle->motivo_cambio_estatus) ?></td>
                <td><?= h($binnacle->fecha_estatus) ?></td>
                <td><?= h($binnacle->usuario_responsable) ?></td>
                <td><?= h($binnacle->created) ?></td>
                <td><?= h($binnacle->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $binnacle->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $binnacle->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $binnacle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $binnacle->id)]) ?>
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
