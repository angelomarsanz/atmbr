<div class="row">
    <div class="col-md-12">
    	<div class="page-header text-center">
            <h4>Recuperar usuario y clave</h4>
			<p>Por favor escriba su correo electrónico y seleccione su rol. Se le enviará un correo con su usuario y clave</p>
        </div>
	</div>
</div>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <?= $this->Form->create($user, ['type' => 'file']) ?>
            <fieldset>
				<?php 
                    echo $this->Form->control('email', ['label' => 'Correo electrónico*', 'class' => 'form-group form-control']);
					echo $this->Form->control('role', ['label' => 'Rol*', 'class' => 'form-group form-control', 'options' => 
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
        <?= $this->Form->button(__('Enviar correo'), ['id' => 'enviar-correo', 'class' =>'btn btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="col-md-4">
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