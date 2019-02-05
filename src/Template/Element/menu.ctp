<?php
    use Cake\Routing\Router;
?>
<style>
    .iconoMenu
    {
        padding-left: 10px;
        color: #9494b8;
        font-size: 150%;
    }
    .logo
    {
        padding: 5px;
        margin: 5px;
        border: 0;
        background-color: #00ffcc;
     }

</style>
<div class="container-fluid fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href=<?= Router::url(["controller" => "Users", "action" => "home"]) ?>>
        <img src=<?= Router::url(["controller" => "img", "action" => "tmbr-icon.png"]) ?> width="60" height="30" alt="Tu mundo bienes raíces">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
                <a class="nav-link" href="#">Usuario</a>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Salir', ['controller' => 'Users', 'action' => 'logout'], ['class' => "nav-link", 'title' => 'Salir del sistema']) ?>
            </li>
        </ul>
    </div>
    </nav>
</div>