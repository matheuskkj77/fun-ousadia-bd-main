<?php
include "conexaoBD.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funeraria Ousadia</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://io.betalabs.net/build/css/canopus/canopus-02635147ff.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet"
        href="https://assets.betalabs.net/production/mensalidadeplanofunerario/styles/stores/1/style.css?47c6ff403330d7259b874e73378a7040">
    <link rel="icon" sizes="16x16" type="image/png"
        href="logos/logo1.png">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta name="google-site-verification" content="ezTnfxOAOeXB6FaEOsqR0fcf63u74YI3CQX8biM0w7I" />


    <style>
        @media (min-width: 769px) {

            footer.footer,
            section.oque-falam {
                margin: 0;
            }

            section.oque-falam {
                margin-bottom: -130px;
            }

            .faq .acc__title {
                cursor: pointer;
            }

            section#duvidas {
                position: relative;
                margin-top: -160px;
                padding: 160px 0 60px;
            }

            section#duvidas::after {
                content: "";
                position: absolute;
                background-image: url(https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/img-questao.png);
                background-repeat: no-repeat;
                width: 1787px;
                height: 1487px;
                top: -450px;
                left: 45%;
            }
        }

        .btn-assinar.disabled a {
            pointer-events: none;
        }

        .btn-assinar.disabled {
            opacity: .4;
        }
    </style>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '278221543743274');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=278221543743274&ev=PageView
&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution="install_email" page_id="113296590441079">
    </div>
</head>

<body>


    <div id="idplanjazigo" data="5"></div>




<!-- MENU -->
     
    <header class="header desk">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="">
                    <img src="/logos/funerariaWide__1_-removebg-preview.png"
                        alt="logo" >
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/#porque-precisa">POR QUE VOC?? PRECISA?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#beneficios">BENEF??CIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#planos">PLANOS</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" id="listar" href="table.php" target="_blank">LISTAR </a>
                    </li>
                </ul>
                <div class="contato">
                    <p>Atendimento</p>
                    <a href="tel:0800 000 000">
                        <h5>0800 000 0000</h5>
                    </a>
                </div>

                <div class="user-cart">
                    <a href="" class="whats"><img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/whatsapp.svg"
                            alt="Whatsapp" title="Whatsapp"></a>
                
                    <a href="payment.php " class="user"><img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/cart.svg"
                            alt="Carrinho" title="Carrinho"></a>
                </div>
            </nav>
        </div>
    </header>


    <header class="header-mobile mobile">
        <nav role="navigation">
            <div class="logo-loja">
                <a href="/">
                    <img src="https://raw.githubusercontent.com/Ksanim0/fun-ousadia-bd/main/logos/funerariaWide__1_-removebg-preview.png"
                        alt="logo">
                </a>
            </div>
            <div class="admin-header">
                <div>
                    <a href="" class="whats"><img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/whatsapp.svg"></a>
                </div>

                <div class="cart">
                    <a href="/payment.php"><img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/cart.svg"></a>
                </div>
            </div>
            <div id="menuToggle">
                <input class="menu-mobile" type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu" class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="#porque-precisa">POR QUE VOC?? PRECISA?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#beneficios">BENEF??CIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#planos">PLANOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#duvidas">D??VIDAS</a>
                    </li>
               <!--      <li class="nav-item">
                        <a class="nav-link" href="#depoimentos">DEPOIMENTOS</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="table.php" target="_blank">LISTAR</a>
                    </li>
                    <div class="contato-menu">
                        <p>Atendimento</p>
                        <a href="tel:0800 000 000">
                            <h5>0800 000 000</h5>
                        </a>
                    </div>
                    <div class="redes-sociais-home">
                        <a class="face" href="https://shutupandtakemymoney.com/wp-content/uploads/2020/05/cutting-mark-zuckerberg-hair-meme.jpg" target="_blank"><img
                                src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/face-white.svg"></a>
                        <a href="https://www.instagram.com/reel/CdEIbl2jg-P/?igshid=YmMyMTA2M2Y=" target="_blank"><img
                                src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/insta-white.svg"></a>
                        <a href="https://youtu.be/dQw4w9WgXcQ?t=2" target="_blank"><img
                                src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/youtube-white.svg"></a>
                    </div>
                </ul>
            </div>
        </nav>
    </header>

<!-- MENU -->






    <section class="banner-principal">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="home-redes-conteudo">
                        <div class="redes-sociais-pag-home">
                            <a class="face" href="https://shutupandtakemymoney.com/wp-content/uploads/2020/05/cutting-mark-zuckerberg-hair-meme.jpg" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/face.svg"
                                    alt="Facebook" title="Facebook"></a>
                            <a href="https://www.instagram.com/reel/CdEIbl2jg-P/?igshid=YmMyMTA2M2Y=" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/insta.svg"
                                    alt="Instagram" title="Instagram"></a>
                            <a href="https://youtu.be/dQw4w9WgXcQ?t=2" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/youtube.svg"
                                    alt="Youtube" title="Youtube"></a>
                        </div>
                        <div class="text-home">
                            <h2 data-aos="fade">A <span>1??</span> Plataforma de assinatura de assist??ncia funer??ria
                                100% digital</h2>
                            <p class="desk" data-aos="fade">Na Funeraria Ousadia, o pre??o ?? justo: voc?? paga uma assinatura
                                mensal e tem sua fam??lia assistida por menos de 1 cafezinho por dia.</p>

                            <div class="btn-home desk">
                                <a href="#porque-precisa">Por que voc?? precisa?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="img-home">
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/21/phpMAArB31595353037.png">
                    </div>
                </div>
                <div class="text-home mobile">
                    <p data-aos="fade">Na Funeraria Ousadia, o pre??o ?? justo: voc?? paga uma assinatura mensal e tem sua
                        fam??lia assistida por menos de 1 cafezinho por dia.</p>
                    <div class="btn-home">
                        <a href="#porque-precisa">Por que voc?? precisa?</a>
                    </div>
                </div>      
            </div>
        </div>
    </section>
    <section class="home-conteudo"
        style="background-image:url(https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bg-principal.png)">
        <div class="infos-servicos anime">

            <div class="imagem">
                <img
                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/24/phpPoPgiK1605195789.png">
            </div>
            <div class="info-assistencias">
                <div class="container">
                    <div class="acc">
                        <div class="acc__card">
                            <div class="acc__title">Atendimento funer??rio completo <img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/seta-dow.svg">
                            </div>
                            <div class="acc__panel">
                                Com uma longa hist??ria confi??vel, temos a estatura e capacidade de apoiar com
                                atendimento nacional 24 horas por dia, prestando toda a assist??ncia necess??ria para o
                                funeral, cuidamos de todos os detalhes, os familiares e amigos podem se confortar nessa
                                hora t??o delicada.
                            </div>
                        </div>
                        <div class="acc__card">
                            <div class="acc__title">Ampla rede de descontos <img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/seta-dow.svg">
                            </div>
                            <div class="acc__panel">
                                Nosso clube de vantagens tem centenas de parceiros, lojas f??sicas e online, com
                                descontos especiais em todo o pa??s. Tenha acesso a descontos exclusivos em medicamentos,
                                fast food, cinemas, grandes redes do varejo e escolas por todo o pa??s.
                            </div>
                        </div>
                        <div class="acc__card">
                            <div class="acc__title">Assist??ncias residencial e auto <img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/seta-dow.svg">
                            </div>
                            <div class="acc__panel">
                                Assist??ncias el??trica e hidr??ulica em seu domic??lio e servi??o e guincho e chaveiro para
                                seu ve??culo para garantir conforto e tranquilidade em situa????es emergenciais ou de
                                conveni??ncia com a praticidade 24 horas por dia, 7 dias por semana, 365 dias por ano em
                                todo o pa??s.
                            </div>
                        </div>
                    </div>
                </div>
            </div>







        </div>
        <section class="banner-conteudo2" id="porque-precisa">
            <div class="container anime">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="precisa">
                            <h2 data-aos="fade">Por que voc?? precisa?</h2>
                            <h5 data-aos="fade">Cuidado, amparo e assist??ncia</h5>
                            <p data-aos="fade">A perda de um ente querido ?? um momento em que estamos fragilizados para
                                resolver os problemas e tomar as decis??es necess??rias. Contar com uma equipe preparada
                                para atender sua fam??lia e organizar o funeral faz toda diferen??a. Ter acesso aos
                                benef??cios e assist??ncias n??o tem pre??o, assista e saiba mais:</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="img-precisa">
                            <iframe width="425" height="344" src="https://www.youtube.com/embed/MQsz4o8_ifM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="veja ">
            <div class="container anime">
                <h2>Veja como ?? simples</h2>
                <div class="slider-veja">
                    <div class="veja-info">
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/29/phpb2HDAU1595471446.png">
                        <p data-aos="fade">Contrate o que melhor se adequa a sua fam??lia</p>
                    </div>
                    <div class="veja-info">
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/29/phpsvNWmm1595471453.png">
                        <p data-aos="fade">Pague um pouquinho para cuidar de quem voc?? ama</p>
                    </div>
                    <div class="veja-info">
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/29/php76532R1595471391.png">
                        <p data-aos="fade">Contrate tudo digitalmente, sem burocracias</p>
                    </div>
                    <div class="veja-info">
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/29/phpFWLQsf1595471120.png">
                        <p data-aos="fade">Utilize benef??cios e assist??ncias no seu dia a dia</p>
                    </div>
                    <div class="veja-info">
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/29/phpg9BeA51595471042.png">
                        <p data-aos="fade">Assist??ncia funeral
                            completa </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="conheca bo" id="beneficios"
            style="background-image:url(https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bg-2.png)">
            <div class="container anime">
                <h2>Conhe??a os benef??cios</h2>
                <div class="row">
                    <div class="col-12 col-md-6 desk">
                        <div class="funeral">
                            <span>1</span>
                            <img
                                src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/31/phpv3FS671595475069.png">
                            <div class="funeral-texto">
                                <h3>Funeral</h3>
                                <p>Assist??ncia e servi??o funer??rio completos
                                    para voc?? e sua fam??lia</p>
                            </div>
                        </div>
                        <div class="clube">
                            <span>2</span>
                            <img
                                src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/34/php0WHklK1595475069.png">
                            <div class="funeral-texto">
                                <h3>Clube de descontos</h3>
                                <p>Medicamentos, alimenta????o, lazer, produtos
                                    e servi??os, educa????o</p>
                            </div>
                        </div>
                        <div class="assistencia">
                            <span>3</span>
                            <img
                                src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/37/phpJRHNzm1595475070.png">
                            <div class="funeral-texto">
                                <h3>Assist??ncias</h3>
                                <p>Residencial: Chaveiro, bombeiro hidr??ulico e eletricista;
                                    Auto: Guincho 24 horas e chaveiro auto.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mobile">
                        <div class="slider-beneficios">
                            <div class="funeral">
                                <span>1</span>
                                <img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/31/phpv3FS671595475069.png">
                                <div class="funeral-texto">
                                    <h3>Funeral</h3>
                                    <p>Assist??ncia e servi??o funer??rio completos
                                        para voc?? e sua fam??lia</p>
                                </div>
                            </div>
                            <div class="clube">
                                <span>2</span>
                                <img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/34/php0WHklK1595475069.png">
                                <div class="funeral-texto">
                                    <h3>Clube de descontos</h3>
                                    <p>Medicamentos, alimenta????o, lazer, produtos
                                        e servi??os, educa????o</p>
                                </div>
                            </div>
                            <div class="assistencia">
                                <span>3</span>
                                <img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/37/phpJRHNzm1595475070.png">
                                <div class="funeral-texto">
                                    <h3>Assist??ncias</h3>
                                    <p>Residencial: Chaveiro, bombeiro hidr??ulico e eletricista;
                                        Auto: Guincho 24 horas e chaveiro auto.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="img-conheca">
                            <img
                                src="https://assets.betalabs.net/production/mensalidadeplanofunerario/extra_fields/40/phpLwpPDl1595476876.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="plano bo"
            style="background-image:url(https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bg-3.png)">
            <div class="container anime" id="planos">
              
        <section class="faq " id="duvidas">
            <div class="container anime">
                <div class="row" id="reverse">
                    <div class="col-12 col-md-6 duvida-conteudo">
                        <h2>D??vidas?!</h2>
                        <h1>Clique abaixo???</h1>
                        <div class="perguntas">
                            <div class="acc">
                                <div class="acc__card">
                                    <div class="acc__title">Quais as principais vantagens de contratar a Funeraria Ousadia?
                                        <img
                                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/seta-dow.svg">
                                    </div>
                                    <div class="acc__panel">
                                        Com uma <b>assinatura mensal</b> como em um seguro, voc?? contrata de onde
                                        estiver totalmente digital e sem papeladas com asteriscos. Temos <b>abrang??ncia
                                            nacional</b> e 24 horas por dia, garantimos toda a assist??ncia necess??ria
                                        para o funeral, sem a necessidade do familiar ligar e acionar cada servi??o,
                                        lidar com toda papelada e libera????es, n??s cuidamos de todos os detalhes, e assim
                                        familiares e amigos podem se confortar nessa hora t??o delicada.
                                        <p>Voc?? tamb??m ter?? <b>benef??cios em vida</b>, poder?? usufruir de ??timos
                                            descontos mais de 22.000 farm??cias por todo Brasil em medicamentos, grandes
                                            redes de varejo, cinemas, lojas on-line, fast-food, escolas, entre muitos!
                                        </p>
                                        <p>As vantagens s??o muitas e n??o param, alguns de nossos planos possuem
                                            <b>assist??ncias residencial</b> com bombeiro hidr??ulicos e eletricistas para
                                            lhe socorrer naquela emerg??ncia inesperada, com atendimento nacional 24
                                            horas por dia.
                                        </p>
                                        <p>Imagine seu carro com uma pane el??trica, nos enviaremos um guincho para dar o
                                            socorre necess??rio com a <b>assist??ncia auto</b>, simples assim, a Cuidar
                                            Assis te acompanha em todos os detalhes.
                                        </p>
                                        <p><br></p>
                                    </div>
                                </div>
                                <div class="acc__card">
                                    <div class="acc__title">A Funeraria Ousadia ?? confi??vel? <img
                                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/seta-dow.svg">
                                    </div>
                                    <div class="acc__panel">
                                        Um plano funer??rio ?? uma promessa de se fazer servi??os funer??rios no futuro. Com
                                        uma longa e confi??vel hist??ria a Funeraria Ousadia tem a estatura e experi??ncia para
                                        <b>garantir a execu????o</b> dos Planos Funeraria Ousadia, voc?? n??o ter?? mais que
                                        pagar pelo servi??o funer??rio no plano.
                                        <p>Tamb??m garantimos a presta????o de servi??os funer??rios com distin????o, ajudando
                                            fam??lias em um dos mais dif??ceis momentos em suas vidas com experi??ncia,
                                            profissionalismo, compaix??o e respeito intransigentes.
                                        </p>
                                        <p><b>A Funeraria Ousadia ?? uma startup de planos funer??rios</b> e pensamos
                                            diferente, temos como miss??o evoluir com a tecnologia algo que nunca antes
                                            explorado com profissionalismo: o plano funer??rio.
                                        </p>
                                        <p>Gostou? Aqui na Funeraria Ousadia, voc?? escolhe que ?? melhor pra voc?? e sua
                                            fam??lia. Para fechar seu Plano, ?? s?? <b>acessar nossos site</b>, escolher
                                            seu plano, preencher seus dados, e ?? s?? pagar com seu cart??o de cr??dito,
                                            <b>parcelas mensais, sem comprometer seu limite,</b> simples assim!
                                        </p>
                                        <p>
                                            Assim, ?? s?? curtir a vida tranquila, usufruir de nossos descontos e
                                            assist??ncias e se precisar conte conosco 24 horas por dia em todo esse
                                            pa??s.&nbsp;&nbsp;</p>
                                        <p>E a??, vamos! <b>Escolha seu plano e veja como ?? f??cil ter um plano funer??rio
                                                100% digital!
                                            </b></p>
                                    </div>
                                </div>
                                <div class="acc__card">
                                    <div class="acc__title">Como funciona o Plano Funer??rio Funeraria Ousadia? <img
                                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/seta-dow.svg">
                                    </div>
                                    <div class="acc__panel">
                                        <b>Um plano 100% on-line, que voc?? contrata on-line, paga por meio de assinatura
                                            em seu cart??o de cr??dito.
                                        </b>
                                        <p>Inclui e exclu?? benefici??rios quando quiser, em uma ??rea <b>exclusiva
                                            </b>para voc??.
                                        </p>
                                        <p>Utilizar em seu dia a dia de <b>descontos exclusivos</b> atrav??s de nosso
                                            aplicativo.
                                        </p>
                                        <p>Se beneficia de <b>assist??ncias residencial</b> para eletricista e bombeiro
                                            hidr??ulico.
                                        </p>
                                        <p>Na emerg??ncia com seu ve??culo acione nossa <b>assist??ncia auto</b> com
                                            guincho e chaveiro;
                                        </p>
                                        <p>E quando houver a perda de um ente querido, <b>conte com nossa central 0800
                                                944 1120</b>, 24 horas por dia com atendimento nacional iremos conduzir
                                            com profissionais qualificados todo o atendimento.
                                        </p>
                                        <p>Gostou? Aqui na Funeraria Ousadia, voc?? escolhe que ?? melhor pra voc?? e sua
                                            fam??lia. Para fechar seu Plano, ?? s?? acessar nossos site, <b>escolher seu
                                                plano,</b> preencher seus dados, pague com seu cart??o de cr??dito, a
                                            parcela ser?? cobrada direto no seu cart??o de cr??dito, sem comprometer o seu
                                            limite.&nbsp;&nbsp;</p>
                                        <p>Assim, ?? s?? curtir a vida tranquila, usufruir de nossos descontos e
                                            assist??ncias e se precisar conte conosco 24 horas por dia em todo esse pa??s.
                                        </p>
                                        <p>E a??, vamos! Escolha seu plano e veja como ?? f??cil ter um plano funer??rio
                                            100% digital!
                                        </p>
                                    </div>
                                </div>
                                <div class="acc__card">
                                    <div class="acc__title">Como funciona o Seguro Jazigo / Crema????o? <img
                                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/seta-dow.svg">
                                    </div>
                                    <div class="acc__panel">
                                        Percebemos que muitos clientes tinham o plano funer??rio e no cemit??rio ou no
                                        cremat??rio se deparavam com a necessidade de ter que arcar com os custos alheios
                                        ao plano funer??rio, ou seja, pagar o cemit??rio ou cremat??rio, e n??o estavam
                                        preparados.
                                        <p>Sendo assim, lan??amos o <b>Seguro Jazigo / Crema????o</b>, onde o titular, seu
                                            c??njuge e filhos, podem se assegurar de n??o haver custos quando for
                                            necess??rio a aquisi????o de um jazigo ou crema????o.
                                        </p>
                                        <p>Todos os planos s??o garantidos por nossa seguradora parceira para cobrir as
                                            despesas at?? o valor de R$ 10.000,00 para jazigo ou at?? R$ 5.000,00 para
                                            crema????o, em todo Brasil.
                                        </p>
                                        <p><b>Basta nos acionar e pagamos tudo!</b> Sem burocracias, simples assim, o
                                            seguro Jazigo / Crema????o ?? garantido por segurado por n??s contratada.
                                        </p>
                                        <p>Titular e c??njuge com at?? 70 anos, filhos at?? 21 anos ou 24 se estiverem
                                            cursando a faculdade.
                                        </p>
                                        <p><b>E a??, vamos! Escolha seu plano e veja como ?? f??cil ter um seguro jazigo
                                                100% digital!
                                            </b></p>
                                        <p><br></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-duvidas">
                            <a href="/contato">Possui mais d??vidas?</a>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mobile">
                        <img class="mobile"
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/mobile-img.png">
                    </div>



                </div>
            </div>
        </section>

    </section>
    <div class="modal modal-plano" id="myModal4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="logo-modal">
                        <img src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/logo.svg"
                            alt="logo">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="texto-modal-plano id-planorecorrente">
                        <h1 id="plan4">Voc?? est?? assinando o plano <span data-id="15" data-plan="4">Cuidar B??sico <img
                                    class="img-plus-modal"
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/plus.svg"></span>
                        </h1>
                    </div>
                    <div class="video-plano">
                        <iframe id="playvideo" src="https://www.youtube.com/embed/jTGGttY2Gjk?autoplay=0&amp"></iframe>
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/videoplano.png">
                    </div>
                    <div class="jazigo text-center">
                        <h2>Adicione o Seguro Jazigo por apenas <span>R$ 29,90</span>?</h2>
                        <div class="Jaziadicionar">
                            <div class="sim">
                                <div class="img-circulo"><img class="img-sim"
                                        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bullet.png">
                                </div>
                                <a href="javascript:;" class="btn-sim" jazigo="16">Sim</a>

                            </div>
                            <div class="nao">
                                <div class="img-circulo"><img class="img-nao"
                                        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bullet.png">
                                </div>
                                <a class="btn-nao" href="javascript:;">N??o</a>
                            </div>
                        </div>
                    </div>

                    <div class="aceite-termo">
                        <!--<input type="checkbox" id=""/> -->Aceito os <a href="/termos" target="_blank">termos de
                            contrato</a> e <a href="/politica-privacidade" target="_blank">pol??tica de privacidade.</a>
                    </div>
                    <!--<div class="btn-assinar1">
                    <a>Continuar</a>
                </div>-->
                    <div class="btn-assinar disabled">
                        <a href="javascript:;" class="btn-continuar" idplano="4">Continuar</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-plano" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="logo-modal">
                        <img src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/logo.svg"
                            alt="logo">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="texto-modal-plano id-planorecorrente">
                        <h1 id="plan3">Voc?? est?? assinando o plano <span data-id="14" data-plan="3">Cuidar + <img
                                    class="img-plus-modal"
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/plus.svg"></span>
                        </h1>
                    </div>
                    <div class="video-plano">
                        <iframe id="playvideo" src="https://www.youtube.com/embed/jTGGttY2Gjk?autoplay=0&amp"></iframe>
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/videoplano.png">
                    </div>
                    <div class="jazigo text-center">
                        <h2>Adicione o Seguro Jazigo por apenas <span>R$ 29,90</span>?</h2>
                        <div class="Jaziadicionar">
                            <div class="sim">
                                <div class="img-circulo"><img class="img-sim"
                                        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bullet.png">
                                </div>
                                <a href="javascript:;" class="btn-sim" jazigo="16">Sim</a>

                            </div>
                            <div class="nao">
                                <div class="img-circulo"><img class="img-nao"
                                        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bullet.png">
                                </div>
                                <a class="btn-nao" href="javascript:;">N??o</a>
                            </div>
                        </div>
                    </div>

                    <div class="aceite-termo">
                        <!--<input type="checkbox" id=""/> -->Aceito os <a href="/termos" target="_blank">termos de
                            contrato</a> e <a href="/politica-privacidade" target="_blank">pol??tica de privacidade.</a>
                    </div>
                    <!--<div class="btn-assinar1">
                    <a>Continuar</a>
                </div>-->
                    <div class="btn-assinar disabled">
                        <a href="javascript:;" class="btn-continuar" idplano="3">Continuar</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-plano" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="logo-modal">
                        <img src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/logo.svg"
                            alt="logo">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="texto-modal-plano id-planorecorrente">
                        <h1 id="plan2">Voc?? est?? assinando o plano <span data-id="11" data-plan="2">Cuidar Premium <img
                                    class="img-plus-modal"
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/plus.svg"></span>
                        </h1>
                    </div>
                    <div class="video-plano">
                        <iframe id="playvideo" src="https://www.youtube.com/embed/jTGGttY2Gjk?autoplay=0&amp"></iframe>
                        <img
                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/videoplano.png">
                    </div>
                    <div class="jazigo text-center">
                        <h2>Adicione o Seguro Jazigo por apenas <span>R$ 29,90</span>?</h2>
                        <div class="Jaziadicionar">
                            <div class="sim">
                                <div class="img-circulo"><img class="img-sim"
                                        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bullet.png">
                                </div>
                                <a href="javascript:;" class="btn-sim" jazigo="16">Sim</a>

                            </div>
                            <div class="nao">
                                <div class="img-circulo"><img class="img-nao"
                                        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bullet.png">
                                </div>
                                <a class="btn-nao" href="javascript:;">N??o</a>
                            </div>
                        </div>
                    </div>

                    <div class="aceite-termo">
                        <!--<input type="checkbox" id=""/> -->Aceito os <a href="/termos" target="_blank">termos de
                            contrato</a> e <a href="/politica-privacidade" target="_blank">pol??tica de privacidade.</a>
                    </div>
                    <!--<div class="btn-assinar1">
                    <a>Continuar</a>
                </div>-->
                    <div class="btn-assinar disabled">
                        <a href="javascript:;" class="btn-continuar" idplano="2">Continuar</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer class="footer"
        style="background-image:url(https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/bg-footer.png)">
        <div class="footer-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sd-6 col-md-2">
                        <div class="minha-conta">
                            <h3>Minha conta</h3>
                            <ul>
                                <li><a class="nao-logado" canopus-open-identification-modal
                                    href="">Funcion??rio</a><a 
                                    <br>
                                <li><a class="nao-logado" canopus-open-identification-modal
                                        href="javascript:;">Informa????es da Conta</a><a class="logado"
                                        <br>
                                <li><a class="nao-logado" canopus-open-identification-modal href="javascript:;">Meus
                                        pedidos</a>
                                     
                    
                                <li><a href="/#duvidas">FAQ</a></li>
                                <li><a href="/politica-privacidade">Pol??tica de privacidade</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sd-6 col-md-2">
                        <div class="contato">
                            <h3>Atendimento</h3>
                            <ul>
                                <li><a href="/contato">Fale conosco</a></li>
                                <li><a target="_blank" href="">sac@FunerariaOusadia.com</a></li>
                                <li><a href="tel:0800 000 000">0800 0000 000</a></li>
                                <li><a target="_blank" href=""
                                        class="whats"><img
                                            src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/whatsapp-mobile.svg"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sd-6 col-md-3">
                        <div class="endereco">
                            <h3>Escrit??rio central</h3>
                            <ul>
                                <li><a>Rua das pedras, Bloco B - Sala 123, Crateus/CE, CEP:
                                        12.345-678</a></li>
                                <li><a>CNPJ: 00.000.000/0001-23</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sd-12 col-md-1 mobile">
                        <div class="redes-sociais">
                            <a class="face" href="https://www.facebook.com/cuidarassist/" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/face-white.svg"></a>
                            <a href="https://www.instagram.com/reel/CdEIbl2jg-P/?igshid=YmMyMTA2M2Y=" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/insta-white.svg"></a>
                            <a href="https://www.youtube.com/channel/UCmHlrHrAOGGUFWxqUFibKCQ" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/youtube-white.svg"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sd-12 col-md-2">
                        <div class="pagamento">
                            <img
                                src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/pag.svg">
                        </div>
                    </div>
                    <div class="col-12 col-sd-12 col-md-1">
                        <div class="seguranca">
                                     </div>
                        <!--<br>-->
                        <!--<a href="https://betalabs.com.br/plataforma-e-commerce/" rel="nofollow" alt="Betalabs Plataforma E-commerce"><img src="https://assets.betalabs.net/production/mensalidadeplanofunerario/images/stores/1/betalabs-plataforma-ecommerce-dark-white.png" alt="Betalabs Plataforma E-commerce" title="Betalabs Plataforma E-commerce" style="margin-bottom: 30px;"/></a>-->
                        <br>
                    </div>
                    <div class="col-12 col-sd-12 col-md-2 desk">
                        <div class="redes-sociais">
                            <a class="face" href="https://www.facebook.com/cuidarassist/" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/face-white.svg"></a>
                            <a href="https://www.instagram.com/reel/CdEIbl2jg-P/?igshid=YmMyMTA2M2Y=" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/insta-white.svg"></a>
                            <a href="https://www.youtube.com/channel/UCmHlrHrAOGGUFWxqUFibKCQ" target="_blank"><img
                                    src="https://assets.betalabs.net/production/mensalidadeplanofunerario/fonts/stores/1/youtube-white.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            </div> 
    </footer>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://io.betalabs.net/build/js/canopus/canopus-cee32835e2.js"></script>
    <script
        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/scripts/stores/1/checkout-preview.js?69bcc5301387f4720ba13480541e3ff6"></script>
    <script
        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/scripts/stores/1/theme.js?02f3093a05b9857f1d4a6af9464c5b37"></script>
    <script
        src="https://assets.betalabs.net/production/mensalidadeplanofunerario/scripts/stores/1/script.js?0ceab8f3418d000a9403e67d7d2fc4ba"></script>
</body>

</html>

<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PJVGF8W');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJVGF8W" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>
<script>
    $('#slider-oquefalam').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '60px'
                }
            }
        ]
    }); 
</script>
<script>


    $(function () {
        $('.acc__title').on('click', function (j) {

            var dropDown = $(this).closest('.acc__card').find('.acc__panel');
            $(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.acc').find('.acc__title.active').removeClass('active');
                $(this).addClass('active');
            }

            dropDown.stop(true, false).slideToggle();
            j.preventDefault();
        });
    });

    $('.slider-veja').slick({
        dots: false,
        infinite: false,
        speed: 300,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.slider-plano').slick({
        dots: false,
        infinite: false,
        speed: 300,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: false,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            }
           
        ]
    });

    $('.slider-comentarios').slick({
        dots: true,
        infinite: false,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            }
         
        ]
    });

    $('.slider-beneficios').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        arrows: false,
        adaptiveHeight: true
    });


    $('.video-plano img').on('click', function () {
        $(this).css('display', 'none');
        $('.video-plano iframe').css('display', 'block');
        $("iframe#playvideo").attr("src", $("iframe#playvideo").attr("src").replace("autoplay=0", "autoplay=1"));
    })


    $('.btn-sim').on('click', function () {
        $(this).addClass('active')
        $('.btn-nao').removeClass('active')
        $('.img-sim').css('display', 'block')
        $('.img-nao').css('display', 'none')
        $('.sim').addClass('active')
        $('.nao').removeClass('active')

        $('.btn-assinar').removeClass('disabled')

        $(this).parent().parent().parent().parent().find('.btn-continuar').attr('jazigo', $(this).attr('jazigo'));
    })

    $('.btn-nao').on('click', function () {
        $(this).addClass('active')
        $('.btn-sim').removeClass('active')
        $('.img-sim').css('display', 'none')
        $('.img-nao').css('display', 'block')
        $('.sim').removeClass('active')
        $('.nao').addClass('active')

        $('.btn-assinar').removeClass('disabled')

        $(this).parent().parent().parent().parent().find('.btn-continuar').attr('jazigo', '');
    })

    $('.btn-assinar-plano a').on('click', function () {
        var plus = $('.id-planorecorrente h1#plan3').find('span').attr('data-plan');
        console.log('plus', plus)
        if (plus == 3) {
            $('.img-plus-modal').css('display', 'block');
        }
    });


    //$('.btn-continuar').on('click', salvarModeloDeRecorrencia);



    $('.modal-plano').on('hidden.bs.modal', function (e) {
        $('.Jaziadicionar .active').removeClass('active');
        $('.img-sim').css('display', 'none');
        $('.img-nao').css('display', 'none');
        $('.btn-continuar').addClass('disabled');
    });

    CanopusEventCenter.addListener('ServerDataLoader.Loaded', function (data) {

        var itensnocarrinhoo = data.cart.content;
        var arrayitens = [];
        for (var i = 0; i < itensnocarrinhoo.length; i++) {
            arrayitens.push({ id: itensnocarrinhoo[i].id, type: itensnocarrinhoo[i].type });
        }
        console.log(arrayitens, 'aaaaaaaa')

        var temprodutos;

        if (arrayitens.length > 0) {
            temprodutos = true;
        } else {
            temprodutos = false;
        }

        var comjazigo = false;
        var idplanoass;
        var idjazigoass;

        $('.btn-continuar').on('click', function () {
            idplanoass = $(this).attr('idplano');
            idjazigoass = $(this).attr('jazigo');

            console.log(idplanoass)

            if ($(this).attr('jazigo')) {
                console.log('jazigo preenchido')
                comjazigo = true;
            } else {
                comjazigo = false;
            }

            if (temprodutos) {
                console.log('tem itens')
                removeItem(arrayitens.shift(), arrayitens);
            } else {
                console.log('n??o tem itens');

                if (comjazigo) assinarPlanoComJazigo(idplanoass, idjazigoass);
                else assinarPlanoSemJazigo(idplanoass);
            }
        });

        function assinarPlanoComJazigo(idplano, idjazigo) {
            console.log('assinando plano com jazigo', idplano, idjazigo)

            $.ajax({
                'url': ' /checkout/cart/item/add/' + idjazigo,
                'method': 'GET',
                success: function () {
                    console.log('adicionou produto');

                    $.ajax({
                        'url': ' /checkout/cart/plan/add/' + idplano,
                        'method': 'GET',
                        success: function () {
                            console.log('adicionou plano');
                            $.post(
                                '/checkout/cart/properties',
                                {
                                    extra_fields: [
                                        { slug: 'contratou_seguro_jazigo', value: 'sim' }
                                    ]
                                }
                            ).done(function (data) {
                                setTimeout(function () {
                                    window.location.href = '/checkout/payment';
                                }, 500)
                            });
                        }
                    });
                }
            });
        }

        function assinarPlanoSemJazigo(idplano) {
            console.log('assinando plano sem jazigo', idplano)

            $.ajax({
                'url': ' /checkout/cart/plan/add/' + idplano,
                'method': 'GET',
                success: function () {
                    console.log('adicionou plano');
                    window.location.href = "/checkout/payment";
                }
            });
        }

        function removeItem(item, itemsToRemove) {
            $.ajax({
                'url': ' /checkout/cart/' + item.type + '/remove/' + item.id,
                'method': 'GET',
                success: function () {
                    if (itemsToRemove.length > 0) {
                        removeItem(itemsToRemove.shift(), itemsToRemove);
                        console.log(itemsToRemove)
                    } else {
                        console.log(itemsToRemove);
                        console.log('deletou tudo');

                        if (comjazigo) assinarPlanoComJazigo(idplanoass, idjazigoass);
                        else assinarPlanoSemJazigo(idplanoass);
                    }
                }
            });
        }



    });






    function salvarModeloDeRecorrencia() {
        var planoRecorr = $('.modal.show .id-planorecorrente h1').find('span').attr('data-plan');
        if (planoRecorr) {
            console.log("Recorr", planoRecorr)
            $.post(
                '/checkout/cart/properties',
                {
                    recurrent_as: planoRecorr,

                }
            ).done(function (data) {
                setTimeout(function () {

                    window.location.href = "/checkout/payment";

                }, 1000)
            });


        }
    }


    /*
    CanopusEventCenter.addListener('ServerDataLoader.Loaded', function(data) {
    
        
        
        $('.btn-assinar-plano a').on('click', function(){
            var itemPlano = $('.modal.show .id-planorecorrente h1').find('span').attr('data-id');
            
            if(data.cart.content.length > 0) {
                           
                var idsParaRemover = data.cart.content.map(function(item){
                    return item.id;
                });
                
                var fnRemoverItemDoCarrinho = function(id){
                    console.log('Removendo o Item'+id);
                    
                    $.ajax({
                        'url': '/checkout/cart/item/remove/' + id,
                        'method': 'GET',
                        'success': function() {
                           console.log('removido com sucesso Item'+id);
                           if(idsParaRemover.length > 0){
                               var novoIdParaRemover = idsParaRemover.shift();
                               
                               fnRemoverItemDoCarrinho(novoIdParaRemover);
                               
                           } else {
                               console.log('N??o existe outros itens a serem removidos')
                                
                           }
                        }
                    });
                }
                
                var primeiroIdASerRemovido = idsParaRemover.shift();
                
                
                fnRemoverItemDoCarrinho(primeiroIdASerRemovido);
                
                
                
            
            }
        });
    });
    */



    var $target = $('.anime'),
        animationClass = 'anime-start';

    function animeScroll() {
        var documentTop = $(document).scrollTop();
        offset = $(window).height() * 3 / 4;

        $target.each(function () {
            var itemTop = $(this).offset().top;
            if (documentTop > itemTop - offset) {
                $(this).addClass(animationClass);
            } else {
                $(this).removeClass(animationClass);
            }
        })
    }

    animeScroll();

    $(document).scroll(function () {
        animeScroll();
    })


    $(' a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset - 100
        }, 500);
    });


    $(function () {
        var contador = 0;

        $('#chk').click(function () {

            if (contador === 0) {

                $('.btn-assinar').removeClass("fak");
                $('.btn-assinar1').addClass("fak");
                contador = 1;
            }
            else if (contador === 1) {
                $('.btn-assinar1').removeClass("fak");
                $('.btn-assinar').addClass("fak"); //apenas para teste
                contador = 0;
            }
        });
    });


</script>
<script>


    /*var myFunc05 = function() {
      var home = setInterval(function() {
        if(window.location.pathname == '/'){
            clearInterval(home);
            $('.header').css("background","none");
            $('.header').css("position","absolute");
            $('.header-mobile').css("background","none");
        }else{
            $('.header').css("position","relative");
            $('.header-mobile').css("position","relative");
        }
        
      }, 300)
    }
    myFunc05()*/

    $(function () {
        $('.toggle-menu').click(function () {
            $('.exo-menu').toggleClass('display');

        });

    });

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }

    $(function () {
        var contador = 0;

        $('.menu-mobile').click(function () {

            if (contador === 0) {

                $('#menuToggle').addClass('ativo');
                contador = 1;
            }
            else if (contador === 1) {
                $('#menuToggle').removeClass('ativo'); //apenas para teste
                contador = 0;
            }
        });
    });


    $(document).ready(function () {
        $(".tem-sub").hover(function () {
            $('.sub-menu').css("display", "block");
        }, function () {
            $('.sub-menu').css("display", "none");

        });
    });

    CanopusEventCenter.addListener('Checkout.Preview.Building', function (e) { e.preventDefault() })

  /*     $('nav a').click(function(e){
       e.preventDefault();
       var id = $(this).attr('href'),
           menuHeight = $('nav').innerHeight(),
           targetOffset = $(id).offset().top;
       $('html, body').animate({
         scrollTop: targetOffset - menuHeight
       }, 900);
     }) */


</script>
<script>
    /* var myFunc05 = function() {
         var home = setInterval(function() {
             if(window.location.pathname == '/'){
                 clearInterval(home);
                 
                 $('.header-mobile').css("background","none");
                  $('.header-mobile').css("height","0");
             }else{
                 $('.header').css("position","relative");
                 $('.header').css("background-color","#000");
                 $('.header-mobile').css("position","relative");
             }
         
         }, 300)
     }
     myFunc05()*/


    $('.tem-sub').on('click', function () {
        $('.sub-menu', this).toggle();
    });
</script>

</html>
