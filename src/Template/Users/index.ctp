<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
    use Cake\Routing\Router; 
?>
<style>
@media screen
{
    .volver 
    {
        display:scroll;
        position:fixed;
        top: 15%;
        left: 50px;
        opacity: 0.5;
    }
    .cerrar 
    {
        display:scroll;
        position:fixed;
        top: 15%;
        left: 95px;
        opacity: 0.5;
    }
    .menumenos
    {
        display:scroll;
        position:fixed;
        bottom: 5%;
        right: 1%;
        opacity: 0.5;
        text-align: right;
    }
    .menumas 
    {
        display:scroll;
        position:fixed;
        bottom: 5%;
        right: 1%;
        opacity: 0.5;
        text-align: right;
    }
    .noverScreen
    {
      display:none
    }
    .ui-autocomplete 
    {
        z-index: 2000;
    }
}
@media print 
{
    .nover 
    {
      display:none
    }
    .saltopagina
    {
        display:block; 
        page-break-before:always;
    }
}
</style>
<div class="page-header">
    <br />
    <br />
    <h2>Usuarios del sistema</h2>
    <p>
        <?= $this->Html->link($this->Html->image('plus.svg', ['alt' => 'Agregar usuario', 'class' => "icon"]),
                    ['controller' => 'Users', 'action' => 'add', 'Users', 'index'],
                    ['escape' => false, 'title' => 'Agregar usuario', 'class' => 'btn btn-sm btn-light']) ?>
    </p>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" style="width: 25%;">Nombre</th>
                    <th scope="col" style="width: 25%;">Rol</th>
                    <th scope="col" style="width: 25%;">Usuario</th>
                    <th scope="col" style="width: 25%;" class="actions"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= h($user->full_name) ?></td>
                        <td><?= h($user->role) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td class="actions">
                            <?= $this->Html->link($this->Html->image('eye.svg', ['alt' => 'Ver', 'class' => "icon"]),
                                ['controller' => 'Users', 'action' => 'view', $user->id, 'Users', 'index'],
                                ['escape' => false, 'title' => 'Ver', 'class' => 'btn btn-sm btn-light']) ?>

                            <?php if ($user->estatus_registro == 'ACTIVO'): ?>
                                <?= $this->Form->postLink($this->Html->image('x.svg', ['alt' => 'Inactivar', 'class' => "icon"]),
                                    ['controller' => 'Users', 'action' => 'inactivate', $user->id, 'Users', 'index'],
                                    ['escape' => false, 'title' => 'Inactivar', 'class' => 'btn btn-sm btn-light', 'confirm' => __('Está seguro de que desea inactivar el usuario?')]) ?>
                            <?php else: ?>
                                <?= $this->Form->postLink($this->Html->image('check.svg', ['alt' => 'Activar', 'class' => "icon"]),
                                        ['controller' => 'Users', 'action' => 'activate', $user->id, 'Users', 'index'],
                                        ['escape' => false, 'title' => 'Activar', 'class' => 'btn btn-sm btn-light', 'confirm' => __('Está seguro de que desea activar el usuario?')]) ?>
                            <?php endif; ?>
                            <?= $this->Form->postLink($this->Html->image('trash.svg', ['alt' => 'Eliminar', 'class' => "icon"]),
                                        ['controller' => 'Users', 'action' => 'delete', $user->id, 'Users', 'index'],
                                        ['escape' => false, 'title' => 'Eliminar', 'class' => 'btn btn-sm btn-light', 'confirm' => __('Está seguro de que desea activar el usuario?')]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< Primero-') ?>
            <?= $this->Paginator->prev('< Anterior-') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('-Siguiente >') ?>
            <?= $this->Paginator->last('Último >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}')]) ?></p>
    </div>
</div>
<div id="menu-menos" class="menumenos nover">
	<p>
        <a href="#" id="mas" title="Más opciones" class='btn btn-info'><img src=<?= Router::url(["controller" => "img", "action" => "pluswhite.svg"]) ?> alt="Más" class="icon"></a>
	</p>
</div>
<div id="menu-mas" style="display:none;" class="menumas nover">
	<p>
        <?= $this->Html->link($this->Html->image('arrow-thick-leftwhite.svg', ['alt' => 'Volver', 'class' => "icon"]),
            ['controller' => 'Users', 'action' => 'wait'],
            ['escape' => false, 'title' => 'Volver', 'class' => 'btn btn-info']) ?>

        <?= $this->Html->link($this->Html->image('xwhite.svg', ['alt' => 'Cerrar', 'class' => "icon"]),
            ['controller' => 'Users', 'action' => 'wait'],
            ['escape' => false, 'title' => 'Cerrar', 'class' => 'btn btn-info']) ?>
	
        <a href="#" id="menos" title="Menos opciones" class='btn btn-info'><img src=<?= Router::url(["controller" => "img", "action" => "minuswhite.svg"]) ?> alt="Menos" class="icon"></a>
	</p>
</div>
<script>
    function log(id) 
    {
		$.redirect('<?php echo Router::url(["controller" => "Users", "action" => "view"]); ?>', { id : id, controller : 'Users', action : 'index' }); 
    }
    $(document).ready(function(){ 
        /* $('#user').autocomplete(
        {
            source:'<?php echo Router::url(["controller" => "Users", "action" => "findUser"]); ?>',
            minLength: 3,             
            select: function( event, ui ) {
                log(ui.item.id);
              }
        }); */
		$('#mas').on('click',function()
		{
			$('#menu-menos').hide();
			$('#menu-mas').show();
		});
		
		$('#menos').on('click',function()
		{
			$('#menu-mas').hide();
			$('#menu-menos').show();
		});
    });
</script>