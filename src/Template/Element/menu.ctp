<?php
    use Cake\Routing\Router;
?>
<div class="container-fluid fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href=<?= Router::url(["controller" => "Users", "action" => "home"]) ?>>
        <img src=<?= Router::url(["controller" => "img", "action" => "tmbr-soloicon.png"]) ?> width="35" height="40" alt="Tu mundo bienes raíces">Tu Mundo Bienes Raíces
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(isset($current_user)): ?>     
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->image('home.svg', ['alt' => 'Inicio', 'class' => "icon"]),
                        ['controller' => 'Users', 'action' => 'home'],
                        ['escape' => false, 'title' => 'Inicio', 'class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->image('person.svg', ['alt' => 'Mi perfil', 'class' => "icon"]),
                        ['controller' => 'Users', 'action' => 'edit', $current_user['id']],
                        ['escape' => false, 'title' => 'Mi perfil', 'class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->image('usuarios.svg', ['alt' => 'Usuarios', 'class' => "icon"]),
                        ['controller' => 'Users', 'action' => 'index'],
                        ['escape' => false, 'title' => 'Usuarios', 'class' => 'nav-link']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->image('account-logout.svg', ['alt' => 'Salir', 'class' => "icon"]),
                        ['controller' => 'Users', 'action' => 'logout'],
                        ['escape' => false, 'title' => 'Salir', 'class' => 'nav-link']) ?>
                </li>
            </ul>
        </div>
    <?php endif; ?>
    </nav>
</div>