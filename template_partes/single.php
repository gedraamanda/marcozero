<?php
$abertura = $_GET['abre'];
?>

<div class="marco-single">
    <?php if(isset($abertura) && $abertura === 'foto') { ?>
        <header style="--cat-color: #1E69FA;" class="py-5 header-foto">
            <div class="container h-100 position-relative">
                <div class="row h-100 ">
                    <div class="col-10 mx-auto h-100">
                        <div class="imagem mx-5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/single-foto.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="texto ms-5">
                    <h1 class="m-0 text-uppercase mb-3">Desnutricao ja mata mais pessoas idosas do que criancas em Pernambuco</h1>

                    <p class="m-0 linha-fina linhaFinaPd">“É muito ruim olhar para os quatro cantos e não ver o que comer”</p>

                    <div class="detalhe d-flex aling-items-center mt-2">
                        <a href="#" class="assina text-uppercase">Por adriana amâncio</a>
                        <span class="mx-3">/</span>
                        <span class="data">09/06/2023</span>
                    </div>

                    <div class="tags d-flex mt-4">
                        <a href="#" class="btn text-uppercase me-2">energia</a>
                        <a href="#" class="btn text-uppercase">agroecologia</a>
                    </div>
                </div>
            </div>
        </header>
    <?php } elseif(isset($abertura) && $abertura === 'horizontal') { ?>
        <header style="--cat-color: #7BDDDD;" class="py-5">
            <div class="container">
                <div class="row row-cols-2">
                    <div class="texto px-5 align-self-end">
                        <h1 class="tituloGrande m-0 text-uppercase mb-3">trf 5 decide se biologa negra serareintegrada ao servico publico</h1>

                        <p class="m-0 linha-fina linhaFinaPd">a dificuldade de parir em uma cidade do interior de Pernambuco</p>

                        <div class="detalhe d-flex aling-items-center mt-2">
                            <a href="#" class="assina text-uppercase">marcozero conteúdo</a>
                            <span class="mx-3">/</span>
                            <span class="data">09/06/2023</span>
                        </div>

                        <div class="tags d-flex mt-5">
                            <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                            <a href="#" class="btn text-uppercase me-2">energia</a>
                            <a href="#" class="btn text-uppercase">agroecologia</a>
                        </div>
                    </div>

                    <div class="imagem ps-5 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/home3.png" alt="" class="">
                    </div>
                </div>
            </div>
        </header>
    <?php } else { ?>
        <header style="--cat-color: #F3B2CA;" class="py-5">
            <div class="container">
                <div class="row row-cols-2">
                    <div class="texto px-5 align-self-end">
                        <h1 class="tituloGrande m-0 text-uppercase mb-3">hortas comunitArias e quintais produtivos</h1>

                        <p class="m-0 linha-fina linhaFinaPd">Projeto cria hortas e quintais produtivos em terrenos baldios do Grande Recife</p>

                        <div class="detalhe d-flex aling-items-center mt-2">
                            <a href="#" class="assina text-uppercase">marcozero conteúdo</a>
                            <span class="mx-3">/</span>
                            <span class="data">09/06/2023</span>
                        </div>

                        <div class="tags d-flex mt-5">
                            <a href="#" class="btn text-uppercase me-2">socioambiental</a>
                            <a href="#" class="btn text-uppercase me-2">energia</a>
                            <a href="#" class="btn text-uppercase">agroecologia</a>
                        </div>
                    </div>

                    <div class="imagem ps-5 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/single1.png" alt="" class="">
                    </div>
                </div>
            </div>
        </header>
    <?php } ?>


    <div class="marco-single__conteudo mt-5">
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="texto ms-5">
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
                                            <span class="text-uppercase">Foto © Arnaldo Sete.Projeto Colabora</span>
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

                        <p>“Nesses territórios onde estamos atuando o perfil majoritariamente encontrado é de mulheres. Mulheres mais velhas, maduras e algumas já idosas. Muitas delas são mulheres pretas, periféricas e em situação de vulnerabilidade social. Pessoas que já passaram pelo mercado de trabalho, mas que perderam o emprego e não conseguiram mais voltar ou pessoas que nunca nem estiveram no mercado de trabalho. Essas condições faz com que essas mulheres procurem espaços de acolhimento para conseguir tocar suas vidas e se envolvam em ações como essa, que proporcionam uma independência para elas produzirem o próprio alimento e de suas famílias”, declarou Simone Arimatéia.</p>

                        <p>A agricultora Dianira Lima, moradora da Vila Independência, no bairro Vasco da Gama, zona norte do Recife, é uma das beneficiárias do projeto e integrante da horta comunitária “Resistir é preciso”.</p>

                        <div class="citacao ms-auto my-5">
                            <p class="m-0">“Essa semana, por sorte, veio um senhor e deu fuba e uns tres pacotes de macarrao”</p>
                        </div>

                        <figure class="wp-block-image my-5">
                            <picture>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/content1.png" alt="" class="w-100">
                            </picture>

                            <figcaption class="legenda-credito mx-5">
                               <p class="m-0">Comida só dura até o meio do mês na casa de dona Zilma.</p>
                                <span class="text-uppercase">Foto © Arnaldo Sete.Projeto Colabora</span>
                            </figcaption>

                        </figure>

                        <p>“Quando recebi o convite para participar da horta comunitária urbana foi um grande desafio, mas também uma oportunidade de adquirir muito conhecimento. E está valendo muito a pena porque lidar com a terra, aprender a plantar, a colher, cuidar e preparar a horta é de grande importância e nos proporciona a colheita da alimentação orgânica e saudável”, declarou Dianira.</p>

                        <p>Marleide Monteiro, moradora do bairro de Passarinho, no Recife, também integra o projeto e afirma que, graças à iniciativa, é uma agricultora em formação: “Eu me sinto, sim, uma agricultora porque mesmo em um espaço pequeno, um quintal, através das minhas mãos e do aprendizado com outras mulheres, eu também criei uma horta na minha comunidade e isso é maravilhoso”.</p>

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

                <div class="col-5 sidebar">
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

                    <div class="mais-recentes ms-auto">
                        <span class="mais-titulo m-0 text-uppercase">AS MAIS RECENTES</span>

                        <div class="d-flex flex-column mt-3">
                            <div class="mais-recentes__post d-flex flex-column mb-5">
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/side1.png" alt="">
                                </a>

                                <a href="#" class="titulo">Menos moralismo e mais cuidado com as pessoas é o foco da política de drogas do governo Lula</a>

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

                                <a href="#" class="titulo">Menos moralismo e mais cuidado com as pessoas é o foco da política de drogas do governo Lula</a>

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

                                <a href="#" class="titulo">Menos moralismo e mais cuidado com as pessoas é o foco da política de drogas do governo Lula</a>

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

                </div>
            </div>
        </div>
    </div>

    <div class="relacionadas mt-5 py-4">
        <div class="container">
            <div class="mx-5">
                <h3 class="m-0 text-uppercase">publicações relacionadas</h3>

                <div class="row row-cols-3 mt-3 int">
                    <div class="relacionadas__post">
                        <div class="d-flex flex-column">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/rel1.png" alt="" class="w-100">
                            </a>

                            <a href="#" class="titulo mt-2">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

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

                            <a href="#" class="titulo mt-2">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

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

                            <a href="#" class="titulo mt-2">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

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

                            <a href="#" class="titulo mt-2">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

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

                            <a href="#" class="titulo mt-2">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

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

                            <a href="#" class="titulo mt-2">Eleição do Conselho de Moradores de Brasília Teimosa vira caso de polícia e vai parar na Justiça</a>

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
