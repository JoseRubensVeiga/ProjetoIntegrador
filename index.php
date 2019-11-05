<?php include('parts/begin.inc.php'); ?>

<!-- SEÇÃO DE CARDS -->
<div class="cards">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
        <h2 class="display-4 text-underline pt-4"><?= __('Últimas atualizações', 'Last News') ?></h2>
        <hr class="under_title">
    </div>
    <div class="row padding-cards">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <img src="images/pikachu.png" class="card-img-top pb-3" alt="Essa uma imagem do pikachu, ele está com um boné em sua cabeça e está com uma expressão em seu rosto de abismado.">
                    <h2 class="card-title">
                        <?= __('Detetive Pikachu é o melhor filme de games?', 'Detective Pikachu is the best game movie?') ?>
                    </h2>
                    <p class="card-text">
                        <?= __(
                                'Conversamos com o elenco do filme de Pokémon, será que Ash Ketchum envelheceu? será que saiu da escola? o que será que ac...',
                                'We talk to the cast of the Pokémon movie, it will be that Ash Ketchum has aged? Did he leave school? What will hap...'
                        )?>
                    </p>
                    
                    <a class="btn btn-large btn-block btn-link" href="#" role="button"><?= __('Ver mais', 'See more') ?></a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-6">
            <div class="card">
                <div class="card-body">
                    <img src="images/ving-ultimato.jpg" class="card-img-top pb-3" alt="Essa é uma imagem da capa do filme Os Vingadores Ultimato, nessa capa, está sendo exibido os seguintes heróis do filme. Capitão América, Capitã Marvel, Homem-Formiga, Viúva Negra, Nebulosa, Máquina de Combate, Rocket e o Hulk">
                    <h2 class="card-title"><?= __('Recordes de Vingadores Ultimato', 'Avengers Records') ?></h2>
                    <p class="card-text">
                        <?= __(
                                'Batendo grandes potências dos filmes, Vingadores Ultimato 
                                bate recorde de bilheteria, menções e muito mais.<br>
                                Cada semana uma surpresa desse gigante dos cinemas, já foi assistir?',

                                'Beating great powers of the movies, Avengers
                                hits box office record, mentions and more. <br>
                                Every week a surprise of this giant of the cinemas, already went to watch?'
                        )?>
                        
                    </p>

                    <p><span class="badge badge-danger"><?= __('Alerta : essa postagem pode conter spoilers ', 'Alert: This post may contain spoilers') ?></span></p>

                    <a class="btn btn-large btn-block btn-link pt-4" href="#" role="button"><?= __('Ver mais', 'See more') ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row padding-cards">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xs-4">
            <div class="card">
                <div class="card-body">
                    <img src="images/nova-ger-ving.jpg" class="card-img-top pb-3" alt="Essa é uma imagem do filme Vingadores Guerra Infinita. Na imagem está sendo exibido os seguintes personagens: o Thor, Gamora e o Senhor das Estrelas. Os persosangens estão na nave dos Guardiões da Galáxia.">
                    <h2 class="card-title"><?= __('Nova geração dos vingadores ?', 'New generation of avengers?') ?></h2>
                    <p class="card-text">
                        <?= __('Marvel aposta em novos heróis, como será a aceitação do público? 
                        veja quem são os novos queiridinhos para os próximos filmes...', 

                        'Marvel bets on new heroes, how will the public accept?
                        see who are the new queiridinhos for the next films ...') ?>
                        </p>
                    
                    
                    <a class="btn btn-large btn-block btn-link" href="#" role="button"><?= __('Ver mais', 'See more') ?></a>
                </div>
            </div>
        </div>
        
        <div class="col-sm-12 col-md-6 col-lg-4 col-xs-4">

            <div class="card">
                <div class="card-body">
                    <img src="images/aranha3_l86WemA.jpg    " class="card-img-top pb-3" alt="Essa é uma imagem exibindo o Homem-Aranha com a sua armadura de ferro, produzida pelo Tony Stark.">
                    <h2 class="card-title"><?= __('O que esperar do novo homem aranha?', 'What to expect from the new spider man?') ?></h2>
                    <p class="card-text">
                        <?= __('Marvel aposta em novos heróis, como será a aceitação do público? 
                        veja quem são os novos queiridinhos para os próximos filmes...',

                        'Marvel bets on new heroes, how will the public accept?
                        see who are the new queiridinhos for the next films ...') ?>
                    </p>

                    <a class="btn btn-large btn-block btn-link" href="#" role="button"><?= __('Ver mais', 'See more') ?></a>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-4 col-xs-4">

            <div class="card">
                <div class="card-body">
                    <img src="images/aladin.jpg" class="card-img-top pb-3" height="260" alt="Essa é uma imagem do filme Alladin, nessa imagem está sendo exibido os seguintes personagens, Alladin, Gênio,o Macaquinho de estimação Abu e a Princesa Jasmine">
                    <h2 class="card-title"><?= __('Alladin é um filme infantil?', "Is Aladdin a children's movie?") ?></h2>
                    <p class="card-text">
                        <?= 
                            __('Marvel aposta em novos heróis, como será a aceitação do público? 
                            veja quem são os novos queiridinhos para os próximos filmes...',

                            'Marvel bets on new heroes, how will the public accept?
                            see who are the new queiridinhos for the next films ...') 
                        ?>
                    </p>
                    
                    
                    <a class="btn btn-large btn-block btn-link" href="#" role="button"><?= __('Ver mais', 'See more') ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row padding-cards">
        <div class="col-md-12 col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <img src="images/reencontro-aranha-stark.jpg" class="card-img-top pb-3" alt="Essa é uma imagem do filme Homem-Aranha: De Volta ao Lar, está sendo exibido o Homem de Ferro e o Homem-aranha sobrevoando uma cidade com diversos prédios.">
                    <h2 class="card-title">
                        <?= 
                            __('Robert Downey Jr. mostra reencontro entre Homem-Aranha e Homem de Ferro',
                            'Robert Downey Jr. shows reunion between Spider-Man and Iron Man') 
                        ?>
                    </h2>
                    <p class="card-text">
                        <?= 
                            __('Mesmo sendo proibido de falar sobre o desfecho do futuro dos heróis da 
                            marvel, Robert Downey Jr. solta um spoiller precioso, veja nossa estrevista ...',

                            'Although it is forbidden to talk about the outcome of the future of the heroes of the
                            marvel, Robert Downey Jr. releases a precious spoiler, see our debut ...') 
                        ?>
                    </p>

                    <p><span class="badge badge-danger">
                        <?= 
                            __('Alerta : essa postagem pode conter spoillers',
                            'Warning: This post may contain spoilers') 
                        ?></span></p>

                    <a class="btn btn-large btn-block btn-link" href="#" role="button"><?= __('Ver mais', 'See more') ?></a>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-lg-6">
            <div class="card mb-2">
                <div class="card-body ">
                    <h3 class="card-title">
                        <?= 
                            __('Homem-Aranha: Longe de Casa pode arrecadar entre US$ 90-120 milhões na estreia',
                            'Spider-Man: Far From Home Could Raise $ 90-120 Million On First') 
                        ?> </h3>
                    <p class="card-text">
                        <?= 
                            __('Marvel aposta em novos heróis, como será a aceitação do público? 
                        veja quem são os novos queiridinhos para os próximos filmes...',

                            'Marvel bets on new heroes, how will the public accept?
                            see who are the new queiridinhos for the next films ...') 
                        ?></p>
                    
                    <p><span class="badge badge-danger">
                        <?= 
                            __('Alerta: essa postagem pode conter spoilers',
                            'Warning: This post may contain spoilers') 
                        ?></span></p>
                    <a class="btn btn-large btn-block btn-link" href="#" role="button">Ver mais</a>
                </div>
            </div>

            <div class="card my-3">
                <div class="card-body">
                    <h3 class="card-title">
                        <?= 
                            __('Homem-Aranha: Longe de Casa pode arrecadar entre US$90-120 milhões na estreia',
                            'Spider-Man: Far From Home Could Raise US$90-120 Million On First') 
                        ?> </h3>
                    <p class="card-text">
                        <?= 
                            __('Marvel aposta em novos heróis, como será a aceitação do público? 
                        veja quem são os novos queiridinhos para os próximos filmes...',

                            'Marvel bets on new heroes, how will the public accept?
                            see who are the new queiridinhos for the next films ...') 
                        ?></p>
                    
                    <p><span class="badge badge-danger">
                        <?= 
                            __('Alerta : essa postagem pode conter spoillers',
                            'Warning: This post may contain spoilers') 
                        ?></span></p>
                    <a class="btn btn-large btn-block btn-link" href="#" role="button"><?= __('Ver mais', 'See more') ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIM SEÇÃO DE CARDS -->


<div class="row p-2">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
        <a href="estreias.php"><h2 class="display-4 text-underline py-4"><ins>
            <?= 
                __('Novidades',
                'News') 
            ?>
        </ins></h2></a>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-4">
        <div class="card mb-2">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xs-4">
                    <img src="images/annabelle3.jpg" class="card-img" alt="Essa é uma imagem da capa do filme Anabelle 3. Está capa exibe uma porta de um quarto em um ambiente escuro que está semi-aberta, é possível identificar uma claridade que está vindo de dentro do cômodo.">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= 
                            __('Annabelle 3 (2019)',
                            'Annabelle 3 (2019)') 
                        ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural.</p>
                    <p class="card-text"><small class="text-muted"><?= __('Última atualização 3 minutos atrás', 'Last updated 3 mins ago') ?></small></p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-4">
        <div class="card mb-2">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xs-4">
                    <img src="images/coringa.jpg" class="card-img" alt="Essa é uma imagem da capa do filme Coringa. Na capa está sendo exibido somente o rosto do palhaço maníaco, olhando para cima.">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= 
                            __('Coringa (2019)',
                            'Joker (2019)') 
                        ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural.</p>
                    <p class="card-text"><small class="text-muted"><?= __('Última atualização 3 minutos atrás', 'Last updated 3 mins ago') ?></small></p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-4">
        <div class="card mb-2">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xs-4">
                    <img src="images/vf.jpg" class="card-img" alt="Essa é uma imagem da capa do Filme Velozes e Furiosos 9. A capa exibe do lado esquerdo, uma praia com alguns coqueiros. Do lado direito existe um monumento com arquitetura antiga com uma torre que possui um relógio em sua ponta. No meio da capa existe uma rua, nessa parte da imagem está o The Rock sentado sobre uma moto de cor preta e o Jason Statham que está sentado em cima do capo de um carro esportivo na cor azul.">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= 
                            __('Velozes e furiosos 9(2019)',
                            'Fast and Furious 9 (2019)') 
                        ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural.</p>
                    <p class="card-text"><small class="text-muted"><?= __('Última atualização 3 minutos atrás', 'Last updated 3 mins ago') ?></small></p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-4">
        <div class="card mb-2">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xs-4">
                    <img src="images/projetogremini.jpg" class="card-img" alt="Essa é uma imagem da capa do Filme Projeto Gemini.Na capa está sendo exibido o rosto do personagem principal Henry Brogan, representado pelo ator Will Smith. O rosto do personagem demonstra preocupação.">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= 
                            __('Projeto Gremini (2019)',
                            'Project Gremini (2019)') 
                        ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural.</p>
                    <p class="card-text"><small class="text-muted"><?= __('Última atualização 3 minutos atrás', 'Last updated 3 mins ago') ?></small></p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-4">
        <div class="card mb-2">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xs-4">
                    <img src="images/ving-ultimato-2.jpg" class="card-img" alt="Essa é uma imagem da capa do filme Os Vingadores Ultimato, nessa capa, está sendo exibido os seguintes heróis do filme. Capitão América, Capitã Marvel, Homem-Formiga, Viúva Negra, Nebulosa,Okoye, Hulk, Rocket e o Thor.">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= 
                            __('Vingadores Últimato (2019)',
                            'Avengers End Game (2019)') 
                        ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural.</p>
                    <p class="card-text"><small class="text-muted"><?= __('Última atualização 3 minutos atrás', 'Last updated 3 mins ago') ?></small></p>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-4">
        <div class="card mb-2">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xs-4">
                    <img src="images/aladin.jpg" class="card-img" alt="Essa é uma imagem do filme Alladin, nessa imagem está sendo exibido os seguintes personagens: Alladin, Gênio,o Macaquinho de estimação Abu e a Princesa Jasmine">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?= 
                            __('Alladin (2019)',
                            'Alladin (2019)') 
                        ?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural.</p>
                        <p class="card-text"><small class="text-muted"><?= __('Última atualização 3 minutos atrás', 'Last updated 3 mins ago') ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- SEÇÃO MEDIA -->
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
        <a href="noticias.php"><h2 class="display-4 text-underline py-4"><ins>
            <?= 
                __('Notícias',
                'Tidings') 
            ?></ins></h2></a>
    </div>

    <div class="my-2 col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <div class="border p-2">

        <div class="media-body col-md-10">
                <h5 class="mt-0">
                    <?= 
                        __('Homens de Preto Internacional: Tessa Thompson revela fala que se recusou a dizer no filme',
                        'Men in Black International: Tessa Thompson reveals speech he declined to say in the film') 
                    ?></h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>
    </div>

    <div class="my-2 col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <div class="border p-2">

        <div class="media-body col-md-10">
                <h5 class="mt-0">
                    <?= 
                        __('Símbolo de Star Trek é visto durante expedição em Marte',
                        'Star Trek symbol seen during expedition on Mars') 
                    ?></h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>
    </div>

    <div class="my-2 col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <div class="border p-2">

        <div class="media-body col-md-10">
                <h5 class="mt-0">
                    <?= 
                        __('Looney Tunes: Pernalonga ganha novo desenho com muitas explosões',
                        'Looney Tunes: Bugsy gets new design with many explosions') 
                    ?></h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>
    </div>

    <div class="my-2 col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <div class="border p-2">

        <div class="media-body col-md-10">
                <h5 class="mt-0">
                    <?= 
                        __('X-Men - Fênix Negra: Ator revela que Skrulls seriam os vilões do filme',
                        "X-Men - Black Phoenix: Actor reveals that Skrulls would be the movie's villains") 
                    ?></h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>
    </div>

    <div class="my-2 col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <div class="border p-2">

        <div class="media-body col-md-10">
                <h5 class="mt-0">
                    <?= 
                        __('Vingadores: Elenco celebra o aniversário de Chris Evans em grande estilo',
                        "Avengers: Cast celebrates Chris Evans' birthday in style") 
                    ?></h5>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
        </div>
    </div>


</div>

<!-- FIM SEÇÃO MEDIA --> 


<?php include('parts/end.inc.php'); ?>