<footer class="bg-dark jv-footer">
    <div class="text-white ">
    <div class="row">
        <div class="col-md-4 text-left pt-4 pl-5">
            <h4>CINEFATEC</h4>
            <p>São Roque, SP</p>
            <P><?= __('Rua dos Crisântemos, 15 - Vila Santa Rosália - Centro', 'Chrysanthemums Street, 15 - Santa Rosalia Village - Center') ?></p>
            <p><?= __('Telefone','Phone') ?>: (11) 98263-5429</p>
        </div>
        <div class="col-md-4 text-center p-4">
            <h4>Lorem Ipsum</h4>
            <p>Lorem ipsum dolor sit amet consectetur, </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nam laudantium nisi necessitatibus inventore deserunt fugiat placeat incidunt nihil fuga, eaque veniam consequatur facere provident sequi nesciunt praesentium error architecto.</p>
        </div>
        <div class="col-md-4 px-5 pt-4">
            <form>
                
                <h4><?= __('Receba nossas notícias no e-mail', 'Receive our news in email') ?></h4>
                <div class="form-group">
                    <label for="input-footer-nome"><?= __('Nome', 'Name') ?></label>
                    <input type="text" class="form-control" name="input-footer-nome" id="input-footer-nome" >
                </div>
                <div class="form-group">
                    <label for="input-footer-email"><?= __('E-mail', 'Email') ?></label>
                    <input type="text" class="form-control" name="input-footer-email" id="input-footer-email" >
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="enviar-footer" id="enviar-footer" value="<?= __('Enviar', 'Submit') ?>">
                </div>
            </form>
        </div>
    </div>
    </div>
</footer>