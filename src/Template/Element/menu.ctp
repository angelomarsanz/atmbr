<?php
    use Cake\Routing\Router;
?>
<div class="container-fluid fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href=<?= Router::url(["controller" => "Users", "action" => "home"]) ?> class="navbar-brand" style="color: #085b9e">
        <img src=<?= Router::url(["controller" => "img", "action" => "tmbr-soloicon.png"]) ?> width="35" height="40" alt="Tu mundo bienes raíces">Tu Mundo Bienes Raíces
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php if (!(isset($currentView))): ?>
        <?php $currentView = ''; ?>
    <?php endif; ?>

    <?php if(isset($current_user)): ?>     
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto text-center">

                <?php if ($currentView == 'usersView' || $currentView == 'usersIndex'): ?>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" id="user" class="form-control" placeholder="Buscar usuario..." title="Escriba el primer apellido del usuario"/>
                        </div>
                    </form>
                <?php endif; ?>

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
                    <?= $this->Html->link($this->Html->image('people.svg', ['alt' => 'Usuarios', 'class' => "icon"]),
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