<?php

$u = explode('/', $_SERVER['REQUEST_URI']);
$r = str_replace('.php', '', end($u));

?>
 <nav class="navbar navbar-expand-lg navbar-light shadow bg-white rounded pt-2 pb-0">
        <a class="navbar-brand font-weight-bold" href="index.php">
         <img src="images/logo.png" alt="logo Cinefatec" width="200" class="pb-2">
       </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="hamburguer-group">
            <span class="hamburguer-line"></span>
        </span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item">
                    <a class="nav-link<?= $r == "" || $r == 'index' ? ' disabled' : '' ?>" href="./"><?= __('Início', 'Home') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $r == "noticias" ? ' disabled' : '' ?>" href="noticias.php"><?= __('Notícias', 'News') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $r == "curiosidades" ? ' disabled' : '' ?>" href="curiosidades.php"><?= __('Curiosidades', 'Curiosities') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $r == "criticas" ? ' disabled' : '' ?>" href="criticas.php"><?= __('Críticas', 'Reviews') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $r == "estreias" ? ' disabled' : '' ?>" href="estreias.php"><?= __('Estreias', 'Premieres') ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?= __('Informações', 'Information') ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item font-light<?= $r == "contato" ? ' disabled' : '' ?>" href="contato.php"><?= __('Contato', 'Contact') ?></a>
                        <a class="dropdown-item font-light<?= $r == "normas" ? ' disabled' : '' ?>" href="normas.php"><?= __('Normas de Utilização', 'Terms of Use') ?></a>
                        <a class="dropdown-item font-light<?= $r == "quemsomos" ? ' disabled' : '' ?>" href="quemsomos.php"><?= __('Quem Somos', 'Who We Are') ?></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>