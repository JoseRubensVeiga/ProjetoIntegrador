<?php include('parts/begin.inc.php'); ?>
<div class="row mt-5">
    <div class="col">
        <h1 class="display-4"><?= __('Notícias', 'News') ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card-block px-2 d-flex flex-column">
            <div class="btn-compartilhar">
                <?= __('Compartilhar', 'Share') ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18" class="icon icon--share ">
                    <path d="m 12.818311,11.294921 c 1.280064,0 2.333667,1.054406 2.333667,2.333668 0,1.279261 -1.054406,2.371411 -2.333667,2.371411 -1.279262,0 -2.333668,-1.09215 -2.333668,-2.371411 0,-0.187915 0,-0.377435 0.03774,-0.526802 L 4.8407964,9.789199 A 2.4252158,2.4252158 0 0 1 0.772537,8.020076 2.4252158,2.4252158 0 0 1 4.8383872,6.250954 L 10.48384,2.9761092 A 2.8974102,2.8974102 0 0 1 10.40915,2.4091547 C 10.40915,1.0921502 11.5013,0 12.818304,0 c 1.317008,0 2.409159,1.0921502 2.409159,2.4091547 0,1.3170047 -1.092151,2.4091553 -2.409155,2.4091553 -0.640032,0 -1.204577,-0.263401 -1.656695,-0.677776 L 5.5161598,7.453925 c 0.036941,0.187914 0.074684,0.377434 0.074684,0.564545 0,0.187111 -0.037744,0.377434 -0.075486,0.562137 l 5.7217422,3.31339 c 0.417587,-0.377434 0.979724,-0.602289 1.582012,-0.602289 z"></path>
                </svg>
            </div>
            <a href="#" role="button" class="text-hover-gray">
                <h2 class="card-title text-inherit"><?= __('Aquaman 2 ganha data de estreia', 'Aquaman 2 wins debut date') ?></h2>
            </a>
            <p tabindex="0"  class="card-text ">
                Aquaman é um filme de super - herói estadunidense de 2018, baseado no personagem homônimo da DC Comics, distribuído pela Warner Bros. Pictures, sendo o sexto filme do Universo Estendido DC. O filme é dirigido por James Wan, com um roteiro de Will Beall e David Leslie, a partir de uma história de Wan, Johns e Beall 
                [...]
            </p>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="images/Aquaman.jpg" alt="Poster do filme aquaman, com ele em primeiro plano" class="w-100">
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-6 mb-4">
        <img src="images/capitamarvel.jpg" alt="poster do filme da capitã marvel, com ela em primeiro plano" class="w-100">
    </div>
    <div class="col-lg-6">
        <div class="card-block px-2 d-flex flex-column ">
            <div class="btn-compartilhar">
                <?= __('Compartilhar', 'Share') ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18" class="icon icon--share ">
                    <path d="m 12.818311,11.294921 c 1.280064,0 2.333667,1.054406 2.333667,2.333668 0,1.279261 -1.054406,2.371411 -2.333667,2.371411 -1.279262,0 -2.333668,-1.09215 -2.333668,-2.371411 0,-0.187915 0,-0.377435 0.03774,-0.526802 L 4.8407964,9.789199 A 2.4252158,2.4252158 0 0 1 0.772537,8.020076 2.4252158,2.4252158 0 0 1 4.8383872,6.250954 L 10.48384,2.9761092 A 2.8974102,2.8974102 0 0 1 10.40915,2.4091547 C 10.40915,1.0921502 11.5013,0 12.818304,0 c 1.317008,0 2.409159,1.0921502 2.409159,2.4091547 0,1.3170047 -1.092151,2.4091553 -2.409155,2.4091553 -0.640032,0 -1.204577,-0.263401 -1.656695,-0.677776 L 5.5161598,7.453925 c 0.036941,0.187914 0.074684,0.377434 0.074684,0.564545 0,0.187111 -0.037744,0.377434 -0.075486,0.562137 l 5.7217422,3.31339 c 0.417587,-0.377434 0.979724,-0.602289 1.582012,-0.602289 z"></path>
                </svg>
            </div>
            <a href="#" role="button" class="text-hover-gray">
                <h2 class="card-title text-inherit">
                    <?= __('Capitã Marvel já é o filme mais visto do ano no Brasil', 'Captain Marvel is already the most watched film of the year 
            in Brazil') ?>
                </h2>        
            </a>
            <p tabindex="0"  class="card-text ">Capitã Marvel é um filme estadunidense de super-herói de 2019, baseado na personagem Carol Danvers da Marvel Comics, produzido pela Marvel Studios e distribuído pela Walt Disney Studios Motion Pictures, sendo o vigésimo primeiro filme do Universo Cinematográfico Marvel[...]</p>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-6">
        <div class="card-block px-2 d-flex flex-column">
            <div class="btn-compartilhar">
            <?= __('Compartilhar', 'Share') ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18" class="icon icon--share ">
                    <path d="m 12.818311,11.294921 c 1.280064,0 2.333667,1.054406 2.333667,2.333668 0,1.279261 -1.054406,2.371411 -2.333667,2.371411 -1.279262,0 -2.333668,-1.09215 -2.333668,-2.371411 0,-0.187915 0,-0.377435 0.03774,-0.526802 L 4.8407964,9.789199 A 2.4252158,2.4252158 0 0 1 0.772537,8.020076 2.4252158,2.4252158 0 0 1 4.8383872,6.250954 L 10.48384,2.9761092 A 2.8974102,2.8974102 0 0 1 10.40915,2.4091547 C 10.40915,1.0921502 11.5013,0 12.818304,0 c 1.317008,0 2.409159,1.0921502 2.409159,2.4091547 0,1.3170047 -1.092151,2.4091553 -2.409155,2.4091553 -0.640032,0 -1.204577,-0.263401 -1.656695,-0.677776 L 5.5161598,7.453925 c 0.036941,0.187914 0.074684,0.377434 0.074684,0.564545 0,0.187111 -0.037744,0.377434 -0.075486,0.562137 l 5.7217422,3.31339 c 0.417587,-0.377434 0.979724,-0.602289 1.582012,-0.602289 z"></path>
                </svg>
            </div>
            <a href="#" role="button" class="text-hover-gray">
                <h2 class="card-title text-inherit"><?= __('Dumbo foi mais caro do que Capitã Marvel', 'Dumbo was more expensive than Captain Marvel') ?></h2>
            </a>
            <p tabindex="0"  class="card-text ">
                Dumbo é um filme de aventura e fantasia estadunidense de 2019, dirigido por Tim Burton e escrito por Ehren Kruger, sendo o remake em live-action do longa-metragem animado Dumbo, de 1941, baseado no enredo escrito por Helen Aberson e ilustrado por Harold Pearl. Produzido pela Walt Disney Pictures e Tim Burton Productions e distribuído pela Walt Disney Studios Motion Pictures, é estrelado por Colin Farrell, Eva Green, Michael Keaton, Danny DeVito e Alan Arkin[...]
            </p>
        </div>
    </div>
    <div class="col-lg-6 mb-4">
            <img src="images/Dumbo.jpg" alt="Poster do filme Dumbo com ele no primeiro plano" class="w-100">
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-6 mb-4">
        <img src="images/homemaranha.jpg" alt="poster do filme do homem aranha com ele no primeiro plano" class="w-100">
    </div>
    <div class="col-lg-6">
        
            <div class="card-block px-2 d-flex flex-column">
                <div class="btn-compartilhar">
                    <?= __('Compartilhar', 'Share') ?>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="18" height="18" class="icon icon--share ">
                        <path d="m 12.818311,11.294921 c 1.280064,0 2.333667,1.054406 2.333667,2.333668 0,1.279261 -1.054406,2.371411 -2.333667,2.371411 -1.279262,0 -2.333668,-1.09215 -2.333668,-2.371411 0,-0.187915 0,-0.377435 0.03774,-0.526802 L 4.8407964,9.789199 A 2.4252158,2.4252158 0 0 1 0.772537,8.020076 2.4252158,2.4252158 0 0 1 4.8383872,6.250954 L 10.48384,2.9761092 A 2.8974102,2.8974102 0 0 1 10.40915,2.4091547 C 10.40915,1.0921502 11.5013,0 12.818304,0 c 1.317008,0 2.409159,1.0921502 2.409159,2.4091547 0,1.3170047 -1.092151,2.4091553 -2.409155,2.4091553 -0.640032,0 -1.204577,-0.263401 -1.656695,-0.677776 L 5.5161598,7.453925 c 0.036941,0.187914 0.074684,0.377434 0.074684,0.564545 0,0.187111 -0.037744,0.377434 -0.075486,0.562137 l 5.7217422,3.31339 c 0.417587,-0.377434 0.979724,-0.602289 1.582012,-0.602289 z"></path>
                    </svg>
                </div>
                <a href="#" role="button" class="text-hover-gray">
                    <h2 class="card-title text-inherit"><?= __('Homem-Aranha no Aranhaverso é melhor filme do herói em 14 anos', 'Spider-Man on Aranhaverso is best hero movie in 14 years') ?></h2>
                </a>
                <p tabindex="0"  class="card-text ">Homem Aranha no Aranhaverso é um filme de aventura de um jovem chamado Piter Parker que, em um momento, encontra outras versões de si mesmo de outros universos[...]</p>
            </div>
        </a>
    </div>
</div>
<div id="carregar-mais-noticias"></div>
<div class="row">
    <div class="col">
        <hr />
    </div>
</div>
<div class="row mb-4">
    <div class="col d-flex justify-content-center mb-4">
        <button type="button" class="btn btn-link text-dark" id="btnCarregarMaisNoticias"><?= __('Carregar mais +', 'Load more +') ?></button>
    </div>
</div>
<?php include('parts/end.inc.php'); ?>