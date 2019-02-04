<?= $this->Html->css('login') ?>

<div class="container">
	<div class="jumbotron">
    	<h1>Bienvenidos a la aplicación Tu Mundo Bienes Raíces...</h1>
    	<p>Por favor escriba su usuario y contraseña</p>
	</div>
	<div class="row" style="margin-top:20px">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	        <?= $this->Flash->render('auth') ?>
			<?= $this->Form->create() ?>
				<fieldset>
					<hr class="colorgraph">
					<div class="form-group">
	                    <?= $this->Form->control('username', ['class' => 'form-control input-lg', 'placeholder' => 'Usuario', 'label' => false, 'required']) ?>
					</div>
					<div class="form-group">
	                    <?= $this->Form->control('password', ['class' => 'form-control input-lg', 'placeholder' => 'Contraseña', 'label' => false, 'required']) ?>
					</div>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
	                        <?= $this->Form->button('Acceder', ['id' => 'to-access', 'class' => 'btn btn-lg btn-success btn-block']) ?>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6">
							<?= $this->Html->link('Olvidé mi clave', ['controller' => 'Users', 'action' => 'recuperarClave'], ['class' => 'btn btn-lg btn-primary btn-block']) ?>
						</div>
					</div>
				</fieldset>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>