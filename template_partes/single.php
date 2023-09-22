<?php
$abertura = $_GET['abre'];
?>

<div class="marco-single">
    <?php if(isset($abertura) && $abertura === 'foto') { ?>
        <header style="--cat-color: #1E69FA;" class=" pb-4 pb-md-5 py-md-5 header-foto">
            <div class="container h-100 position-relative">
                <div class="row h-100 ">
                    <div class="col-12 col-md-10 mx-auto h-100">
                        <div class="imagem mx-md-5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/single-foto.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="texto ms-md-5">
                    <h1 class="m-0 text-uppercase mb-3">Desnutricao ja mata mais pessoas idosas do que criancas em Pernambuco</h1>

                    <p class="m-0 linha-fina linhaFinaPd">“É muito ruim olhar para os quatro cantos e não ver o que comer”</p>

                    <div class="detalhe d-flex aling-items-center mt-2">
                        <a href="#" class="assina text-uppercase">Por adriana amâncio</a>
                        <span class="mx-3">/</span>
                        <span class="data">09/06/2023</span>
                    </div>

                    <div class="tags d-flex mt-4 flex-wrap">
                        <a href="#" class="btn text-uppercase me-2">energia</a>
                        <a href="#" class="btn text-uppercase">agroecologia</a>
                    </div>
                </div>
            </div>
        </header>
    <?php } elseif(isset($abertura) && $abertura === 'horizontal') { ?>
        <header style="--cat-color: #7BDDDD;" class="py-4 py-md-5">
            <div class="container">
                <div class="row row-cols-md-2">
                    <div class="texto px-md-5 align-self-end order-2 order-md-1">
                        <h1 class="tituloGrande m-0 text-uppercase mb-2 mb-md-3 ajuste">trf 5 decide se biologa negra serareintegrada ao servico publico</h1>

                        <p class="m-0 linha-fina linhaFinaPd">a dificuldade de parir em uma cidade do interior de Pernambuco</p>

                        <div class="detalhe d-flex aling-items-center mt-2">
                            <a href="#" class="assina text-uppercase">marcozero conteúdo</a>
                            <span class="mx-3">/</span>
                            <span class="data">09/06/2023</span>
                        </div>

                        <div class="tags d-flex mt-3 mt-md-5 flex-wrap">
                            <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                            <a href="#" class="btn text-uppercase me-2">energia</a>
                            <a href="#" class="btn text-uppercase">agroecologia</a>
                        </div>
                    </div>

                    <div class="imagem ps-md-5 text-center order-1 order-md-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/home3.png" alt="" class="">
                    </div>
                </div>
            </div>
        </header>
    <?php } elseif(isset($abertura) && $abertura === 'texto') { ?>
        <header style="--cat-color: #EBEB01;" class="header-texto">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 mx-auto">
                        <div class="texto text-center">
                            <h1 class="tituloGrande m-0 text-uppercase mb-3 mx-auto">trf 5 decide se biologa negra serareintegrada ao servico publico</h1>

                            <p class="m-0 linha-fina linhaFinaPd mx-auto">a dificuldade de parir em uma cidade do interior de Pernambuco</p>

                            <div class="detalhe d-flex aling-items-center mt-2 justify-content-center">
                                <a href="#" class="assina text-uppercase">marcozero conteúdo</a>
                                <span class="mx-3">/</span>
                                <span class="data">09/06/2023</span>
                            </div>

                            <div class="tags d-flex mt-5 justify-content-center flex-wrap">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                                <a href="#" class="btn text-uppercase">agroecologia</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
    <?php } elseif(isset($abertura) && $abertura === 'video') { ?>
        <div class="marco-videos">
            <header style="--bg-color: #FF5E30;">
                <div class="container">
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div class="wrapper mx-auto">
                                <div class="youtube" data-embed="dw7MUg59_E8">
                                    <div class="play-button"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6 mx-auto">
                            <div class="texto d-flex flex-column text-center">
                                <h1 class="m-0 text-uppercase mb-2 titulo w-100">Medo de chuva: a saude mental de quem sobreviveu à tragédia
                                    de 2022 em Pernambuco</h1>

                                <div class="detalhe d-flex aling-items-center mt-2 justify-content-center">
                                    <a href="#" class="assina text-uppercase">redação</a>
                                    <span class="mx-3">/</span>
                                    <span class="data">09/06/2023</span>
                                </div>

                                <div class="tags d-flex mt-4 justify-content-center">
                                    <a href="#" class="btn text-uppercase me-2">direitos humanos</a>
                                    <a href="#" class="btn text-uppercase">maternidade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    <?php } else { ?>
        <header style="--cat-color: #F3B2CA;" class="py-4 py-md-5">
            <div class="container">
                <div class="row row-cols-md-2">
                    <div class="texto px-md-5 align-self-end order-2 order-md-1">
                        <h1 class="tituloGrande m-0 text-uppercase mb-3 ajuste">hortas comunitArias e quintais produtivos</h1>

                        <p class="m-0 linha-fina linhaFinaPd">Projeto cria hortas e quintais produtivos em terrenos baldios do Grande Recife</p>

                        <div class="detalhe d-flex aling-items-center mt-2">
                            <a href="#" class="assina text-uppercase">marcozero conteúdo</a>
                            <span class="mx-3">/</span>
                            <span class="data">09/06/2023</span>
                        </div>

                        <div class="tags d-flex mt-3 mt-md-5 flex-wrap">
                            <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                            <a href="#" class="btn text-uppercase me-2">energia</a>
                            <a href="#" class="btn text-uppercase">agroecologia</a>
                        </div>
                    </div>

                    <div class="imagem ps-md-5 text-center order-1 order-md-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/single1.png" alt="" class="">
                    </div>
                </div>
            </div>
        </header>
    <?php } ?>


    <div class="marco-single__conteudo mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="texto ms-md-5">
	                    <?php if ( isset( $abertura ) && $abertura === 'podcast' ) { ?>
                            <div class="d-flex single-podcast align-items-center mb-4">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="" class="">

                                <p class="m-0 mx-5">Podcast de análise e opinião sobre os fatos mais importantes da semana pela equipe de Marco Zero Conteúdo, coletivo de jornalismo independente e investigativo do Recife</p>
                            </div>
                        <?php } ?>

                        <p>O Centro de Desenvolvimento Agroecológico Sabiá, em parceria com a Casa Mulher do Nordeste e a organização não governamental Fase, realizou o Seminário Agricultura Urbana – Produzindo Comida de Verdade e Gerando Qualidade de Vida.
                            <a href="">O encontro</a> reuniu mais de 50 agricultoras da Região Metropolitana do Recife para promover uma troca de experiências e celebrar a finalização do projeto de fomento à produção alimentar em hortas comunitárias e quintais produtivos em 15 comunidades.</p>

                        <p>Com o objetivo de incentivar as famílias a produzirem seus próprios alimentos em terrenos antes inutilizados e, assim, criar
                            <a href="">hortas comunitárias</a> que possam fortalecer uma economia criativa e o acesso a alimentos de qualidade, o projeto atendeu 280 pessoas em 15 comunidades da Região Metropolitana do Recife.</p>

                        <p>A iniciativa de fomento à agricultura comunitária teve início em julho de 2022 e é fruto da emenda parlamentar do deputado federal Túlio Gadelha (Rede), aprovada por meio do Termo de Fomento do Ministério da Agricultura, Pecuária e Abastecimento. O projeto também tem apoio da organização Misereor.</p>

                        <div class="marco-galeria position-relative my-5">
                            <div class="slider-control-galeria d-flex" aria-label="Carousel Navigation" tabindex="0">
                                <a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

                                <a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
                            </div>

                            <div class="mx-5">
                                <div class="galeria-sl">
                                    <div class="sl">
                                        <div class="text-center">
                                            <picture>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home2.png" alt="" class="mw-100">
                                            </picture>
                                        </div>


                                        <figcaption class="legenda-credito mx-5 mt-2">
                                            <p class="m-0">Comida só dura até o meio do mês na casa de dona Zilma.</p>
                                            <span>Foto © Arnaldo Sete.Projeto Colabora</span>
                                        </figcaption>
                                    </div>

                                    <div class="sl">
                                        <div class="text-center">
                                            <picture>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home3.png" alt="" class="mw-100">
                                            </picture>
                                        </div>
                                    </div>

                                    <div class="sl">
                                        <div class="text-center">
                                            <picture>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/ent1.png" alt="" class="mw-100">
                                            </picture>
                                        </div>

                                        <figcaption class="legenda-credito mx-5 mt-2">
                                            <p class="m-0">Pastor Henrique Vieira</p>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>De acordo com a assessora técnica do Centro Sabiá, Simone Arimatéia, o projeto possibilitou a criação de espaços agricultáveis dentro da cidade. “Locais que eram de confinamento de lixo ou áreas de aterro ganharam vida e começaram a produzir alimentos. Em um ano de projeto a ação implantou diversas hortas comunitárias e realizou o acompanhamento em lugares onde não se pensou que era possível produzir comida com qualidade”, disse a assessora.</p>

                        <h3>MULHERES SÃO PROTAGONISTAS</h3>

                        <p>Chama a atenção a forte presença feminina no encontro da agricultura urbana responsável pela criação das hortas comunitárias e quintais produtivos. A iniciativa do Centro Sabiá é composta por uma maioria de mulheres, que representam mais de 80% dos beneficiários do projeto, sendo 36% de mulheres negras.</p>

                        <div class="grid-imagens my-5">
                            <div class="d-flex">
                                <div class="coluna-1">
                                    <div class="d-flex flex-column">
                                        <div class="mb-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/home3.png" alt="" class="mw-100">
                                        </div>

                                        <div>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ent2.png" alt="" class="mw-100">
                                        </div>
                                    </div>
                                </div>

                                <div class="coluna-2">
                                    <div class="d-flex flex-column">
                                        <div class="mb-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="" class="mw-100">
                                        </div>

                                        <div>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ent1.png" alt="" class="mw-100">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="legenda-credito mt-2">
                                <p class="m-0">Bombeiros resgataram corpo de um homem de 45 anos às 13:30min.</p>
                                <span>Foto © acervo pessoal</span>
                            </div>
                        </div>

                        <div class="grid-imagens my-5">
                            <div class="d-flex">
                                <div class="coluna-1">
                                    <div class="d-flex flex-column">
                                        <div class="mb-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ent1.png" alt="" class="mw-100">
                                        </div>

                                    </div>
                                </div>

                                <div class="coluna-2">
                                    <div class="d-flex flex-column">
                                        <div class="mb-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="" class="mw-100">
                                        </div>

                                        <div class="mb-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/home3.png" alt="" class="mw-100">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="legenda-credito mt-2">
                                <p class="m-0">Bombeiros resgataram corpo de um homem de 45 anos às 13:30min.</p>
                                <span>Foto © acervo pessoal</span>
                            </div>
                        </div>

                        <div class="grid-imagens my-5">
                            <div class="d-flex">
                                <div class="coluna-1">
                                    <div class="d-flex flex-column">
                                        <div class="mb-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/ent1.png" alt="" class="mw-100">
                                        </div>

                                    </div>
                                </div>

                                <div class="coluna-2">
                                    <div class="d-flex flex-column">

                                        <div class="mb-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/home3.png" alt="" class="mw-100">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="legenda-credito mt-2">
                                <p class="m-0">Bombeiros resgataram corpo de um homem de 45 anos às 13:30min.</p>
                                <span>Foto © acervo pessoal</span>
                            </div>
                        </div>

                        <p>“Nesses territórios onde estamos atuando o perfil majoritariamente encontrado é de mulheres. Mulheres mais velhas, maduras e algumas já idosas. Muitas delas são mulheres pretas, periféricas e em situação de vulnerabilidade social. Pessoas que já passaram pelo mercado de trabalho, mas que perderam o emprego e não conseguiram mais voltar ou pessoas que nunca nem estiveram no mercado de trabalho. Essas condições faz com que essas mulheres procurem espaços de acolhimento para conseguir tocar suas vidas e se envolvam em ações como essa, que proporcionam uma independência para elas produzirem o próprio alimento e de suas famílias”, declarou Simone Arimatéia.</p>

                        <p>A agricultora Dianira Lima, moradora da Vila Independência, no bairro Vasco da Gama, zona norte do Recife, é uma das beneficiárias do projeto e integrante da horta comunitária “Resistir é preciso”.</p>

                        <div class="citacao ms-auto my-5">
                            <p class="m-0">“Essa semana, por sorte, veio um senhor e deu fuba e uns tres pacotes de macarrao”</p>
                        </div>

                        <figure class="wp-block-image my-5">
                            <picture>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/content1.png" alt="" class="w-100">
                            </picture>

                            <figcaption class="legenda-credito mx-md-5">
                               <p class="m-0">Comida só dura até o meio do mês na casa de dona Zilma.</p>
                                <span>Foto © Arnaldo Sete.Projeto Colabora</span>
                            </figcaption>

                        </figure>

                        <p>“Quando recebi o convite para participar da horta comunitária urbana foi um grande desafio, mas também uma oportunidade de adquirir muito conhecimento. E está valendo muito a pena porque lidar com a terra, aprender a plantar, a colher, cuidar e preparar a horta é de grande importância e nos proporciona a colheita da alimentação orgânica e saudável”, declarou Dianira.</p>

                        <p>Marleide Monteiro, moradora do bairro de Passarinho, no Recife, também integra o projeto e afirma que, graças à iniciativa, é uma agricultora em formação: “Eu me sinto, sim, uma agricultora porque mesmo em um espaço pequeno, um quintal, através das minhas mãos e do aprendizado com outras mulheres, eu também criei uma horta na minha comunidade e isso é maravilhoso”.</p>


                        <div class="lista mx-5 px-5 py-4 my-5" style="--cat-color: #EBEB01;">
                            <span class="titulo text-uppercase mb-3 d-block">tres cuidados para quem aposta</span>

                            <div class="lista__item">
                                <p class="m-0"><span>1. </span>É preciso saber que existe essa gangorra, entre perder e ganhar e é preciso saber lidar com isso.</p>
                            </div>

                            <div class="lista__item">
                                <p class="m-0"><span>2. </span>Manter uma coerência durante esse processo: quanto você vai gastar no jogo? Esse dinheiro fará diferença?</p>
                            </div>

                            <div class="lista__item">
                                <p class="m-0"><span>3. </span>Ter em mente o momento de parar. “A hora de parar é quando você viu que perdeu, que você só tinha aquele dinheiro extra, que se você for apostar mais uma vez pode acabar se comprometendo, acho que essa é a hora.”</p>
                            </div>
                        </div>

                        <div class="informacao mx-5 px-5 py-4 my-5" style="--cat-color: #7BDDDD;">
                            <span class="titulo text-uppercase mb-3 d-block">box informações complementares</span>

                            <p>Box de informação complementar Os moradores que fazem apostas nos aplicativos entendem ser grave o escândalo de manipulação nos jogos de futebol, mas veem naturalidade no problema. Nos últimos meses, investigações mostraram que jogadores receberam quantias em dinheiro para ganhar cartão amarelo e vermelho durante as partidas, além de outras irregularidades.</p>
                            <p>As suspeitas sempre existiram em campeonatos de divisões inferiores, mas chegaram a elite do futebol brasileiro.</p>
                            <p>Para Matheus, do Grajaú, não foi uma surpresa. “Sempre teve um jogador que recebia um pouco menos, principalmente em campeonatos de pequena expressão”, avalia.</p>
                            <p>Para ele, torneios como a Série C do Campeonato Brasileiro, em que os jogadores têm salários menores, são um prato cheio para esses agenciadores. “Numa aposta ele pode quadruplicar o valor do salário.” No caso de Lucas, de Diadema, ele critica a atitude dos jogadores e diz que a ética deveria falar mais alto. “Por eu levar o esporte muito a sério, eu não aceitaria esse tipo de acordo”, diz Lucas.</p>
                        </div>

                        <h3>ENTENDA O CASO</h3>

                        <p>Para entender porque, diferente do que tem ocorrido no fim da vida, na primeira infância a desnutrição já não <strong><+></strong> é uma ameaça tão presente, é preciso olhar para a história recente do Brasil. A nutricionista e doutoranda em Saúde Pública.</p>

                        <div class="box-explicacao mx-5 px-4 py-3 my-3" style="--cat-color: #1E69FA;">
                            <span class="titulo"><+></span>

                            <div class="int mx-auto">
                                <p>Os moradores que fazem apostas nos aplicativos entendem ser grave o escândalo de manipulação nos jogos de futebol, mas veem naturalidade no problema. Nos últimos meses, investigações mostraram que jogadores receberam quantias em dinheiro para ganhar cartão amarelo e vermelho durante as partidas, além de outras irregularidades.s</p>
                            </div>
                        </div>

                        <p>Para entender porque, diferente do que tem ocorrido no fim da vida, na primeira infância a desnutrição já não é uma ameaça tão presente, é preciso olhar para a história recente do Brasil. A nutricionista e doutoranda em Saúde Pública.</p>

                        <div class="infos mx-5 px-5 py-4 my-5">
                            <span class="titulo text-uppercase mb-2 d-block">resposta da secretaria de segurança</span>

                            <p>Os moradores que fazem apostas nos aplicativos entendem ser grave o escândalo de manipulação nos jogos de futebol, mas veem naturalidade no problema. Nos últimos meses, investigações mostraram que jogadores receberam quantias em dinheiro para ganhar cartão amarelo e vermelho durante as partidas, além de outras irregularidades.</p>
                        </div>

                        <div class="apoio my-5 pt-2">
                            <p>Esta reportagem foi produzida com apoio do <a href="">Report for the World</a>, uma iniciativa do
                                <a href="">The GroundTruth Project</a>.</p>
                        </div>

	                    <?php if ( isset( $abertura ) && $abertura === 'podcast' ) { ?>
                            <div class="end-podcast mb-5 pb-5">
                                <div class="siga text-center mx-auto">
                                    <span class="siga-titulo m-0">SIGA E OUÇA NO SEU APLICATIVO PREFERIDO</span>

                                    <div class="d-flex agreg justify-content-between mt-3">
                                        <div class="spot d-flex flex-column">
                                            <a href=""><i></i></a>

                                            <a href="" class="titulo mt-auto">Spotify</a>
                                        </div>

                                        <div class="google d-flex flex-column">
                                            <a href=""><i></i></a>

                                            <a href="" class="titulo mt-auto">Google Cast</a>
                                        </div>

                                        <div class="you d-flex flex-column">
                                            <a href=""><i></i></a>

                                            <a href="" class="titulo mt-auto">Youtube</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="outros mt-5 position-relative">
                                    <span class="siga-titulo m-0 text-uppercase d-block text-center">ouça outros episódios do podcast arrumadinho</span>

                                    <div class="slider-control-pod d-flex" aria-label="Carousel Navigation" tabindex="0">
                                        <a class="prev" data-controls="prev" aria-controls="customize" tabindex="-1"></a>

                                        <a class="next ms-auto" data-controls="next" aria-controls="customize" tabindex="-1"></a>
                                    </div>

                                    <div class="pod-outros-sl mt-3">
                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                        </a>

                                        <a href="" class="item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="tags d-flex mt-4 align-items-center">
                            <span class="me-2">TAGS</span>
                            <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                            <a href="#" class="btn text-uppercase me-2">energia</a>
                            <a href="#" class="btn text-uppercase">reportagem</a>
                        </div>

                        <div class="social d-flex align-items-center mt-4">
                            <a href="" class="facebook"></a>
                            <a href="" class="instagram"></a>
                            <a href="" class="twitter"></a>
                            <a href="" class="youtube-m"></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 sidebar">
                    <div class="d-flex flex-column ms-5" style="width: max-content;">
                        <div class="d-flex">
                            <div class="social d-flex align-items-center">
                                <a href="" class="facebook"></a>
                                <a href="" class="instagram"></a>
                                <a href="" class="twitter"></a>
                                <a href="" class="youtube-m"></a>
                            </div>

                            <a href="#" class="apoie less ms-auto">APOIE</a>
                        </div>

                        <div class="mt-3">
                            <a href="" class="apoie less bg-blue text-light">ASSINE NOSSA NEWSLETTER</a>
                        </div>
                    </div>

	                <?php if ( isset( $abertura ) && $abertura === 'podcast' ) { ?>
                        <div class="mais-pod ms-auto me-5">
                            <span class="mais-titulo m-0 text-uppercase">outros podcasts</span>

                            <div class="d-flex flex-column mt-3">
                                <div class="mais-pod__post d-flex flex-column">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                    </a>

                                    <div class="d-flex mt-2">
                                        <a href="">
                                            <i></i>
                                        </a>

                                        <a href="#" class="titulo">E na rua que se enfrenta o Bolsonarismo</a>
                                    </div>
                                </div>

                                <div class="mais-pod__post d-flex flex-column">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod2.png" alt="">
                                    </a>

                                    <div class="d-flex mt-2">
                                        <a href="">
                                            <i></i>
                                        </a>

                                        <a href="#" class="titulo">E na rua que se enfrenta o Bolsonarismo</a>
                                    </div>

                                </div>

                                <div class="mais-pod__post d-flex flex-column">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/pod1.png" alt="">
                                    </a>


                                    <div class="d-flex mt-2">
                                        <a href="">
                                            <i></i>
                                        </a>

                                        <a href="#" class="titulo">E na rua que se enfrenta o Bolsonarismo</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="mais-recentes ms-auto">
                            <span class="mais-titulo m-0 text-uppercase">AS MAIS RECENTES</span>

                            <div class="d-flex flex-column mt-3">
                                <div class="mais-recentes__post d-flex flex-column mb-5">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/side1.png" alt="">
                                    </a>

                                    <a href="#" class="titulo mt-2">Menos moralismo e mais cuidado com as pessoas é o foco da política de drogas do governo Lula</a>

                                    <div class="detalhe d-flex aling-items-center mt-2">
                                        <a href="#" class="assina text-uppercase">marcozero conteúdo</a>
                                        <span class="data ms-3">09/06/2023</span>
                                    </div>

                                    <div class="tags d-flex mt-3">
                                        <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                        <a href="#" class="btn text-uppercase me-2">energia</a>
                                    </div>
                                </div>

                                <div class="mais-recentes__post d-flex flex-column mb-5">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/side2.png" alt="">
                                    </a>

                                    <a href="#" class="titulo mt-2">Menos moralismo e mais cuidado com as pessoas é o foco da política de drogas do governo Lula</a>

                                    <div class="detalhe d-flex aling-items-center mt-2">
                                        <a href="#" class="assina text-uppercase">marcozero conteúdo</a>
                                        <span class="data ms-3">09/06/2023</span>
                                    </div>

                                    <div class="tags d-flex mt-3">
                                        <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                        <a href="#" class="btn text-uppercase me-2">energia</a>
                                    </div>
                                </div>

                                <div class="mais-recentes__post d-flex flex-column mb-4">
                                    <a href="">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/side3.png" alt="">
                                    </a>

                                    <a href="#" class="titulo mt-2">Menos moralismo e mais cuidado com as pessoas é o foco da política de drogas do governo Lula</a>

                                    <div class="detalhe d-flex aling-items-center mt-2">
                                        <a href="#" class="assina text-uppercase">marcozero conteúdo</a>
                                        <span class="data ms-3">09/06/2023</span>
                                    </div>

                                    <div class="tags d-flex mt-3">
                                        <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                        <a href="#" class="btn text-uppercase me-2">energia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
	                <?php } ?>



                </div>
            </div>
        </div>
    </div>

    <div class="relacionadas py-4">
        <div class="container">
            <div class="mx-5">
                <h3 class="m-0 text-uppercase">publicações relacionadas</h3>

                <div class="row row-cols-3 mt-3 int">
                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel1.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>

                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel2.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>

                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel3.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="relacionadas sugestao mt-5 py-4">
        <div class="container">
            <div class="mx-5">
                <h3 class="m-0 text-uppercase">sugestão do editor</h3>

                <div class="row row-cols-3 mt-3 int">
                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel1.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>

                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel2.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>

                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel3.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-3">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

                            <div class="tags d-flex mt-4">
                                <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                                <a href="#" class="btn text-uppercase me-2">energia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
