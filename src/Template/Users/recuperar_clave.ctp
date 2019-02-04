<div class="row">
    <div class="col-md-6">
    	<div class="page-header">
			<h4>Por favor escriba su correo electrónico y seleccione su rol. Se le enviará un correo con su usuario y nueva clave</h4>
        </div>
	</div>
</div>
<div class="row">
    <div class="col-md-4">
            <?= $this->Form->create($user, ['type' => 'file']) ?>
            <fieldset>
				<?php 
                    echo $this->Form->control('email', ['label' => 'Correo electrónico: *']);
					echo $this->Form->control('role', ['label' => 'Rol: *', 'options' => 
                            [null => '',
                            'Administrador(a) de la empresa' => 'Administrador(a) de la empresa',
                            'Administrador(a) del sistema' => 'Administrador(a) del sistema',
                            'Auditor(a)' => 'Auditor(a)',
                            'Captador(a)' => 'Captador(a)',
                            'Desarrollador del sistema' => 'Desarrollador del sistema',
                            'Promotor(a)' => 'Promotor(a)',
                            'Supervisor(a)' => 'Supervisor(a)',
                            'Titular del sistema' => 'Titular del sistema'                    
							]]);
                ?>
            </fieldset>
        <?= $this->Form->button(__('Enviar correo'), ['id' => 'enviar-correo', 'class' =>'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
<script>
    $(document).ready(function() 
    {
        $('#save-user').click(function(e) 
        {
            $('#email').val($.trim($('#email').val().toLowerCase()));
        });
    });
</script>