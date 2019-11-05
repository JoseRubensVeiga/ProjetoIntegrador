<h2 class="text-underline pt-4"><?= __('Entrevista', 'Interview') ?></h2>
<hr class="under_title" />
<p class="subtitle-sidebar"><?= __('Astro do cinema Johnny Depp paga multa milionária por falta de declaração de imposto de renda', 'Film star Johnny Depp pays a millionaire fine for lack of income tax return') ?> .</p>
<div class="py-3"></div>
<img src="images/jhonny-dep.jpg" alt="Essa é uma imagem do personagem Capitão Jack Sparrow do filme Piratas do Caribe, o personagem possui uma bandana vermelha em sua testa e alguns acessórios em seus dreads." class="img-sidebar-main">
<p class="img-content-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non vehicula ipsum. Suspendisse id maximus enim. Pellentesque ultricies ligula faucibus est posuere, sit amet dictum tellus facilisis. Suspendisse vitae egestas justo, in mattis massa. Phasellus vulputate eros non molestie blandit. Integer sed nulla a libero facilisis sollicitudin. Maecenas elementum elementum lorem, non aliqua.</p>

<div class="py-3"></div>
<h2 class="pt-4">Trailers</h2>
<div class="py-3"></div>
<div class="row justify-content-center trailers-sidebar-main">
    <div class="col-6 py-2">
        <img src="images/trailer_sidebar_01.jpg" alt="Essa é uma imagem da capa da série Swamp Thing (Monstro do Pântano)" />
        <small class="d-block"><?= __('Filme', 'Movie') ?> 1</small>
    </div>
    <div class="col-6 py-2">
        <img src="images/trailer_sidebar_02.jpg" alt="Essa é uma imagem da capa da série Good Omens. Na capa está sendo exibido os seguintes personagens: Crowley (que está com óculos de sol escuro) e o Aziraphale (que possui um cabelo branco). " />
        <small class="d-block"><?= __('Filme', 'Movie') ?> 2</small>
    </div>
    <div class="col-6 py-2">
        <img src="images/trailer_sidebar_03.jpg" alt="Essa é uma imagem da capa que está mostrando a personagem Ulana (uma mulher de meia idade que está com um chapéu, cachecou e um casaco preto)" />
        <small class="d-block"><?= __('Filme', 'Movie') ?> 3</small>
    </div>
    <div class="col-6 py-2">
        <img src="images/trailer_sidebar_01.jpg" alt="Essa é uma imagem da capa da série  Swamp Thing (Monstro do Pântano)" />
        <small class="d-block"><?= __('Filme', 'Movie') ?> 4</small>
    </div>
    <div class="col-6 py-2">
        <img src="images/trailer_sidebar_02.jpg" alt="Essa é uma imagem da capa da série Good Omens. Na capa está sendo exibido os seguintes personagens: Crowley (que está com óculos de sol escuro) e o Aziraphale (que possui um cabelo branco)." />
        <small class="d-block"><?= __('Filme', 'Movie') ?> 5</small>
    </div>
    <div class="col-6 py-2">
        <img src="images/trailer_sidebar_03.jpg" alt="Essa é uma imagem da capa que está mostrando a personagem Ulana (uma mulher de meia idade que está com um chapéu, cachecou e um casaco preto)" />
        <small class="d-block"><?= __('Filme', 'Movie') ?> 6</small>
    </div>
</div>

<div class="py-3"></div>

<a href="estreias.php" class="btn btn-gray">
<?= __('Ver Mais', 'See More') ?> +
</a>

<div class="py-3"></div>

<h2 class="text-title-sidebar"><?= __('Filmes mais esperados', 'Most Expensive Movies') ?></h2>

<img src="images/trailer_sidebar_05.jpg" alt="Imagem do poster de lançamento de Cemitério Maldito" class="img-ult-trailer-sidebar">
<p class="text-ult-trailer-sidebar"><?= __('Cemitério Maldito', 'Pet Sematary') ?></p>

<p class="text-ult-trailer-sidebar-2 mb-0">Lorem ipsum sit dolor amet vini viicsum sit dolor amet vini viicsum sit dolor amet vini viic.</p>
<p>Trailer</p>
<ul class="list-group">
    <li class="list-group-item"> <?= __('O Rei Leão', 'The King Lion') ?> </li>
    <li class="list-group-item"><?= __('Velozes & Furiosos', 'Fast And Furious') ?> 9</li>
    <li class="list-group-item"><?= __('Velozes & Furiosos', 'Fast And Furious') ?>: Hobbs & Shaw</li>
    <li class="list-group-item"><?= __('Homem-Aranha: Longe de casa', 'Spider-man: Far from home') ?></li>
    <li class="list-group-item">John Wick 3 - Parabellum</li>
    <li class="list-group-item">Hellboy</li>
</ul>

<div class="sticky-top mb-3">
    <h3 class="text-center mt-4 text-light bg-dark py-2"><?= __('Líderes de Bilheteria', 'Box Office Leaders') ?></h3>
    <table class="table table-striped table-hover table-dark text-gray mb-4">

        <thead class="thead-dark">
            <tr>
                <th><?= __('Título', 'Title') ?></th>
                <th><?= __('Público', 'Public') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= __('Os Vingadores', 'The Avangers') ?> - Ultimate</td>
                <td>1.500.000</td>
            </tr>
            <tr>
                <td><?= __('Capitã Marvel', 'Captain Marvel') ?></td>
                <td>1.000.000</td>
            </tr>
            <tr>
                <td>Bumblebee</td>
                <td>750.000</td>
            </tr>
            <tr>
                <td>Avatar</td>
                <td>700.000</td>
            </tr>
            <tr>
                <td><?= __('Os Vingadores', 'The avengers') ?></td>
                <td>600.000</td>
            </tr>
            <tr>
                <td>John Wick - <?= __('De Volta ao Jogo', 'Back to the Game') ?></td>
                <td>500.000</td>
            </tr>
            <tr>
                <td>Annabelle</td>
                <td>400.000</td>
            </tr>
            <tr>
                <td><?= __('A Freira', 'The Nun') ?></td>
                <td>300.000</td>
            </tr>
            <tr>
                <td><?= __('Os Sem Floresta', 'Over the Hedge') ?></td>
                <td>200.000</td>
            </tr>
        </tbody>
    </table>
</div>
