<div class="container">
    <br />
    <h2>Bienvenido(a) <?= $this->Html->link($current_user['primer_apellido'] . ' ' . $current_user['primer_nombre'], ['controller' => 'Users', 'action' => 'edit', $current_user['id']], ['title' => 'Modificar mi perfil']) ?> ! </h2>
    <div class="row">
        <div class="col col-sm-4">
            <?php if($current_user['profile_photo'] != '' && $current_user['role'] != null): ?>
                <?= $this->Html->image('/files/users/profile_photo/' . $current_user['profile_photo_dir'] . '/'. $current_user['profile_photo'], ['url' => ['controller' => 'users', 'action' => 'edit', $current_user['id']], 'class' => 'img-thumbnail img-responsive', 'title' => 'Modificar mi perfil']) ?>
            <?php endif; ?>
    	</div>
    </div>
</div>