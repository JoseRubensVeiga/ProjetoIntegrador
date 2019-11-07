<?php include('parts/begin.inc.php'); ?>

<div class="row">
    <div class="col">
        <h1 class="text-center pt-5"><?= __('Normas De Utilização', 'Rules of Use') ?></h1>
    </div>
</div>
<div class="row px-5 pt-5 pb-5">
    <div class="col">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="tituloUm">
                    <div class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="font-weight-bold text-uppercase"><?= __('Bem-vindo ao CineFatec', 'Welcome to CINEFATEC') ?></span>
                        </button>
                    </div>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="tituloUm" data-parent="#accordion">
                    <div class="card-body">
                        <?= __('CINEFATEC é destinado a divulgação do mundo cinematográfico, com suas curiosidades, críticas, avaliações e afins.','CINEFATEC is intended for the dissemination of the film world, with its curiosities, reviews, ratings and the like.') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tituloDois">
                    <div class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="font-weight-bold text-uppercase"><?= __('Política de Privacidade', 'Privacy Policy') ?></span>
                        </button>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="tituloDois" data-parent="#accordion">
                    <div class="card-body">
                        <?= __('Esta Política de Privacidade destina-se a ajudar você a entender quais informações coletamos, por que as coletamos e como você pode atualizar, gerenciar, exportar e excluir essas informações.','This Privacy Policy is intended to help you understand what information we collect, why we collect it, and how you can update, manage, export, and delete this information.') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tituloTres">
                    <div class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span class="font-weight-bold text-uppercase"><?= __('Direitos Autorais', 'Copyright') ?></span>
                        </button>
                    </div>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="tituloTres" data-parent="#accordion">
                    <div class="card-body">
                      <?= __('Direito autoral ou direito de autor é um conjunto de prerrogativas conferidas por lei à pessoa física ou jurídica criadora da obra intelectual, para que ela possa usufruir de quaisquer benefícios morais e patrimoniais resultantes da exploração de suas criações.','Copyright is a set of prerogatives granted by law to the natural or legal person who creates the intellectual work, so that they may enjoy any moral and patrimonial benefits resulting from the exploitation of their creations.') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tituloQuadro">
                    <div class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            <span class="font-weight-bold text-uppercase"><?= __('Responsabilidade por nossos serviços', 'Responsibility for our services') ?></span>
                        </button>
                    </div>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="tituloQuadro" data-parent="#accordion">
                    <div class="card-body">
                     <?= __('Direito de propriedade. Direito de propriedade é o direito que indivíduos ou organizações têm de controlar o acesso a recursos ou ativos de que são titulares. O proprietário tem, sobre sua propriedade, o direito de uso, gozo e disposição.','Property right. Property rights are the right of individuals or organizations to control access to resources or assets they own. The owner has the right to use, enjoyment and disposal over his property.') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tituloCinco">
                    <div class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <span class="font-weight-bold text-uppercase"><?= __('Direitos de propriedade', 'Property rights') ?></span>
                        </button>
                    </div>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="tituloCinco" data-parent="#accordion">
                    <div class="card-body">
                       <?= __('Art. 452-A. O contrato de trabalho intermitente será celebrado por escrito e registrado na CTPS, ainda que previsto acordo coletivo de trabalho ou convenção coletiva.','Art. 452-A. The intermittent employment contract shall be entered into in writing and registered with CTPS, even if provided for in a collective bargaining agreement or collective agreement.
') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tituloSeis">
                    <div class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <span class="font-weight-bold text-uppercase"><?= __('Vigência e rescição', 'Vigency and termination') ?></span>
                        </button>
                    </div>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="tituloSeis" data-parent="#accordion">
                    <div class="card-body">
                        <?= __('A rescisão de contrato ocorre quando o paciente ou os responsáveis pelo plano de saúde resolvem desfazer o  acordo assinado. Para rescindir o contrato por atraso, é preciso que o consumidor seja notificado por escrito até o 50º dia. É possível o plano rescindir também em caso de fraude cometida ou tentada pelo consumidor, conforme explica a Res. 142 da ANS.','Contract termination occurs when the patient or health planner decides to undo the signed agreement. To terminate the contract for delay, the consumer must be notified in writing by the 50th day. It is also possible for the plan to be terminated in the event of fraud committed or attempted by the consumer, as explained in ANS Res.') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tituloSete">
                    <div class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <span class="font-weight-bold text-uppercase"><?= __('Disposições gerais', 'General provisions') ?></span>
                        </button>
                    </div>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="tituloSete" data-parent="#accordion">
                    <div class="card-body">
                    <?= __('Das Disposições Gerais. Art. 1° O presente código estabelece normas de proteção e defesa do consumidor, de ordem pública e interesse social, nos termos dos arts. 5°, inciso XXXII, 170, inciso V, da Constituição Federal e art. 48 de suas Disposições Transitórias.','General Provisions. Art. 1 This code establishes norms of protection and protection of the consumer, of public order and social interest, in the terms of the arts. 5, item XXXII, 170, item V, of the Federal Constitution and art. 48 of its Transitional Provisions.') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tituloOito">
                    <div class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            <span class="font-weight-bold text-uppercase"><?= __('Direito de imagens', 'Right of images') ?></span>
                        </button>
                    </div>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="tituloOito" data-parent="#accordion">
                        <?= __('O direito de imagem, consagrado e protegido pela Constituição Federal da República de 1988 e pelo Código Civil Nacional de 2002 como um direito de personalidade autônomo, se trata da projeção da personalidade física da pessoa, incluindo os traços fisionômicos, o corpo, atitudes, gestos, sorrisos, indumentárias, etc.','The right to image, enshrined and protected by the Federal Constitution of the Republic of 1988 and the National Civil Code of 2002 as an autonomous personality right, is the projection of the persons physical personality, including the physiognomic features, body, attitudes, gestures. , smiles, clothes, etc.') ?>
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tituloNove">
                    <div class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            <span class="font-weight-bold text-uppercase"><?= __('Consequências e atualizações', 'Consequences and uptdates') ?></span>
                        </button>
                    </div>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="tituloNove" data-parent="#accordion">
                    <div class="card-body">
                  <?= __('Atualizar sistemas não significa apenas seguir instruções de uma companhia de softwares; na verdade, é também uma prevenção para manter seus dados seguros de ataques perigosos, como ransomware.','Upgrading systems doesnt just mean following instructions from a software company; In fact, it is also a prevention to keep your data safe from dangerous attacks like ransomware.') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('parts/end.inc.php'); ?>