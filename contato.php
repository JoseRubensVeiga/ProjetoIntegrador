<?php include('parts/begin.inc.php'); ?>

<div class="text-center mt-4">
    <h1 tabindex="0"><?= __('Contato', 'Contact') ?></h1>


    <div class="mt-4">
        <p tabindex="0"><?= __('E-mail', 'Email') ?>: contato@cinefatec.com.br</p>
        <p tabindex="0"><?= __('Rua dos Crisântemos, 15 - Vila Santa Rosália - Centro', 'Chrysanthemums Street, 15 - Santa Rosália Village - Center') ?></p>
        <p tabindex="0">São Roque - SP</p>
        <p tabindex="0"><?= __('Telefone', 'Fone') ?>: (11) 4321-1230</p>
    </div>
</div>
<form class="w-75 mx-auto mt-4 mb-4">
    <div class="form-group">
        <label tabindex="0"><?= __('Nome', 'Name') ?>: </label>
        <input type="text" class="form-control" id="nome" aria-describedby="nome">
    </div>
    <div class="form-group">
        <label tabindex="0"><?= __('E-mail', 'Email') ?>: </label>
        <input type="email" class="form-control" id="email" aria-describedby="email">
    </div>
    <div class="form-group">
        <label tabindex="0"><?= __('Mensagem', 'Message') ?>: </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button tabindex="0" type="button" class="btn btn-primary"><?= __('Enviar', 'Send') ?></button>
</form>










<?php include('parts/end.inc.php'); ?>
