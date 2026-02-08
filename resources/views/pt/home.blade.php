@extends('layouts.app')

@section('title', 'HOME - Support Solo Sondagens')
@section('meta_keywords', 'SUPPORT SOLO SONDAGENS, Estrutura e experiência para atender os clientes mais exigentes, NOSSOS SERVIÇOS, ISSAC NEWTON, Confira nosso processo de trabalho, Contate-nos')
@section('meta_description', '')

@push('styles')
<link rel="stylesheet" href="{{ asset('index.css') }}" media="screen">
@endpush

@section('content')
<section class="u-clearfix u-video u-section-1" id="block-2">
    <div class="u-background-video u-expanded u-video-contain">
        <div class="embed-responsive embed-responsive-1">
            <video class="embed-responsive-item" data-autoplay="1" loop="" muted="1" autoplay="autoplay" playsinline="">
                <source src="https://site.supportsondagens.com.br/wp-content/uploads/2023/09/VIdeo-01.mp4" type="video/mp4">
                <p>Your browser does not support HTML5 video.</p>
            </video>
        </div>
    </div>
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-body-alt-color u-title u-text-1">SUPPORT SOLO S​OND​AGEN​S</h1>
        <h2 class="u-align-center u-text u-text-default u-text-palette-1-base u-text-2">Estrutura e experiência para atender os clientes mais exigentes</h2>
    </div>
</section>

<section class="u-align-center u-clearfix u-container-align-center u-white u-section-2" id="sec-ff7b">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-palette-1-base u-text-1">NOSSOS SERVIÇOS</h1>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                        <img class="u-expanded-width u-image u-image-contain u-image-1" src="{{ asset('images/pngtree-heavy-duty-drilling-rig-machine-png-image_175540831.webp') }}" data-image-width="540" data-image-height="360" title="Sondagem Rotopercussiva">
                        <h4 class="u-text u-text-palette-1-base u-text-2">SONDAGEM ROTOPERCUSSIVA</h4>
                        <a href="{{ route('services.drilling.rotopercussive', ['locale' => 'pt']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-1" title="Sondagem Rotopercussivas">mais</a>
                    </div>
                </div>
                <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-2">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                        <img class="u-expanded-width u-image u-image-contain u-image-2" src="{{ asset('images/Icone08.png') }}" data-image-width="2500" data-image-height="2500" title="Elaboração de Projetos de Engenharia">
                        <h4 class="u-text u-text-palette-1-base u-text-3">ELABORAÇÃO DE PROJETOS DE ENGENHARIA&nbsp;</h4>
                        <a href="{{ route('services.project-development', ['locale' => 'pt']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-2" title="Serviços Elaboração Projetos">Mais</a>
                    </div>
                </div>
                <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-3">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                        <img class="u-expanded-width u-image u-image-contain u-image-3" src="{{ asset('images/pngtree-soil-layers-cross-section-with-vibrant-plant-growth-healthy-earth-3d-png-image_17575375.webp') }}" data-image-width="640" data-image-height="640" title="Sondagem Manual">
                        <h4 class="u-text u-text-palette-1-base u-text-4">SONDAGEM&nbsp;<br>MANUAL</h4>
                        <a href="{{ route('services.drilling.manual', ['locale' => 'pt']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-3" title="Sondagem Manual"><span class="u-icon"></span>&nbsp;mais</a>
                    </div>
                </div>
                <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-4">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                        <img class="u-expanded-width u-image u-image-contain u-image-4" src="{{ asset('images/pngtree-a-realistic-scientific-lab-microscope-png-image_15161513.png') }}" data-image-width="360" data-image-height="360" title="Laboratorio de Ensaios em Solo">
                        <h4 class="u-text u-text-palette-1-base u-text-5">LABORATORIO DE ENSAIOS EM SOLO&nbsp;</h4>
                        <a href="{{ route('services.laboratory', ['locale' => 'pt']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-4" title="Serviços Laboratorial">mais</a>
                    </div>
                </div>
                <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-5">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                        <img class="u-expanded-width u-image u-image-contain u-image-5" src="{{ asset('images/pngtree-3d-illustration-of-pile-rocks-on-transparent-background-png-image_13042781.png') }}" data-image-width="360" data-image-height="360" title="Sondagens Com Sondas Especiais ">
                        <h4 class="u-text u-text-palette-1-base u-text-6">SONDAGENS COM SONDAS ESPECIAIS&nbsp;</h4>
                        <a href="{{ route('services.special-drilling', ['locale' => 'pt']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-5" title="Sondagem Sondas Especiais">mais</a>
                    </div>
                </div>
                <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-6">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                        <img class="u-expanded-width u-image u-image-contain u-image-6" src="{{ asset('images/pngtree-d-model-of-a-steel-transmission-tower-with-power-lines-on-png-image_15054625.png') }}" data-image-width="360" data-image-height="360" title="Ensaios Especiais Elétricos">
                        <h4 class="u-text u-text-palette-1-base u-text-7">ENSAIOS ESPECIAIS ELÉTRICOS</h4>
                        <a href="{{ route('services.electrical-tests', ['locale' => 'pt']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-6" title="Ensaios Especiais Elétricos">mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="u-clearfix u-container-align-center u-gradient u-image u-section-3" id="block-3" data-image-width="1920" data-image-height="1078">
    <div class="u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xxl u-sheet-1">
        <div class="custom-expanded data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-26 u-layout-cell-1">
                        <div class="u-container-layout u-valign-bottom-xl u-valign-bottom-xxl u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                            <div class="u-align-left u-border-6 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                            <h2 class="u-align-left u-text u-text-body-color u-text-1">ISSAC NEWTON</h2>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-34 u-layout-cell-2">
                        <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2">
                            <p class="u-align-left u-text u-text-black u-text-2">"A GRAVIDADE EXPLICA OS MOVIMENTOS DOS PLANETAS, MAS NÃO EXPLICA QUEM COLOCOU OS PLANETAS EM MOVIMENTOS."<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="skrollable u-clearfix u-container-align-center u-palette-1-base u-parallax u-section-4" id="block-12" data-image-width="2000" data-image-height="1333">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
</section>

<section class="u-clearfix u-grey-5 u-section-5" id="block-11">
    <div class="u-shortcode u-shortcode-1">
        <script src="https://elfsightcdn.com/platform.js" async=""></script>
        <div class="elfsight-app-6fa9ef6c-5a60-4d01-979d-7d9a6d9cad9e"></div>
    </div>
</section>

<section class="skrollable u-clearfix u-container-align-center u-palette-1-base u-parallax u-section-6" id="sec-fa0c" data-image-width="2000" data-image-height="1333">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
</section>

<section class="u-align-center u-clearfix u-container-align-center u-valign-middle-md u-valign-middle-xl u-valign-middle-xxl u-section-7" id="sec-d16c">
    <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">O que nós fazemos</h5>
    <h2 class="u-align-center u-text u-text-default u-text-2">Confira nosso processo de trabalho</h2>
    <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-list-item-1">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                    <img class="custom-expanded u-image u-image-1" src="{{ asset('images/icone12.png') }}" data-image-width="512" data-image-height="512">
                    <div class="u-align-center u-container-align-center u-container-style u-group u-palette-4-base u-shape-circle u-group-1">
                        <div class="u-container-layout u-valign-middle">
                            <h3 class="u-custom-font u-font-montserrat u-text u-text-3">01</h3>
                        </div>
                    </div>
                    <p class="u-text u-text-grey-40 u-text-4">Elaboração de proposta com preço e prazo de execução, valor de entrada e formas de faturamento.</p>
                </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-list-item-2">
                <div class="u-container-layout u-similar-container u-container-layout-3">
                    <img class="custom-expanded u-image u-image-2" src="{{ asset('images/icone13.png') }}" data-image-width="512" data-image-height="512">
                    <div class="u-align-center u-container-align-center u-container-style u-group u-palette-4-base u-shape-circle u-group-2">
                        <div class="u-container-layout u-valign-middle">
                            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-5">02</h3>
                        </div>
                    </div>
                    <p class="u-text u-text-grey-40 u-text-6">Negociar termos, prazos e valores para execução. Condições diferenciadas ou regras especificas.</p>
                </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-list-item-3">
                <div class="u-container-layout u-similar-container u-container-layout-5">
                    <img class="custom-expanded u-image u-image-3" src="{{ asset('images/icone15.png') }}" data-image-width="512" data-image-height="512">
                    <div class="u-align-center u-container-align-center u-container-style u-group u-palette-4-base u-shape-circle u-group-3">
                        <div class="u-container-layout u-valign-middle">
                            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-7">03</h3>
                        </div>
                    </div>
                    <p class="u-text u-text-grey-40 u-text-8">Preparação do necessário para a execução do contratado e elaboração de estratégia para as solicitações da contratante</p>
                </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-list-item-4">
                <div class="u-container-layout u-similar-container u-container-layout-7">
                    <img class="custom-expanded u-image u-image-4" src="{{ asset('images/icone14.png') }}" data-image-width="512" data-image-height="512">
                    <div class="u-align-center u-container-align-center u-container-style u-group u-palette-4-base u-shape-circle u-group-4">
                        <div class="u-container-layout u-valign-middle">
                            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-9">04</h3>
                        </div>
                    </div>
                    <p class="u-text u-text-grey-40 u-text-10">Preparação de trajetória e mobilização para o local orientado pela contratada.</p>
                </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-list-item-5">
                <div class="u-container-layout u-similar-container u-container-layout-9">
                    <img class="custom-expanded u-image u-image-5" src="{{ asset('images/icone16.png') }}" data-image-width="512" data-image-height="512">
                    <div class="u-align-center u-container-align-center u-container-style u-group u-palette-4-base u-shape-circle u-group-5">
                        <div class="u-container-layout u-valign-middle">
                            <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-11">05</h3>
                        </div>
                    </div>
                    <p class="u-text u-text-grey-40 u-text-12">Montagem de área de trabalho e início efetivo do contrato.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="u-clearfix u-white u-section-8" id="sec-0c82">
    <div class="u-opacity u-opacity-75 u-palette-1-base u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
    <div class="u-palette-3-base u-shape u-shape-rectangle u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"></div>
    <div class="data-layout-selected u-clearfix u-gutter-10 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-left-cell u-size-30-lg u-size-30-xl u-size-30-xxl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <h2 class="u-align-left u-text u-text-1">Contate-nos</h2>
                        <p class="u-align-left u-text u-text-2">Você é sempre bem-vindo para entrar em contato conosco. Nosso atendimento ao cliente está disponível de segunda a sexta, das 9h00 às 19h00. e sábado a domingo, das 10h00 às 14h00. (GMT +3). Estamos ansiosos para ouvir de você!</p>
                        <div class="u-expanded-width u-form u-form-1">
                            <form action="{{ route('contact.submit', ['locale' => 'pt']) }}" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px;">
                                @csrf
                                <div class="u-form-group u-form-name u-label-none">
                                    <label class="u-label">Nome</label>
                                    <input type="text" placeholder="Nome Completo" id="name" name="name" class="u-border-none u-input u-input-rectangle u-palette-3-base" required="">
                                </div>
                                <div class="u-form-email u-form-group u-label-none">
                                    <label class="u-label">Email</label>
                                    <input type="email" placeholder="E-mail" id="email" name="email" class="u-border-none u-input u-input-rectangle u-palette-3-base" required="">
                                </div>
                                <div class="u-form-group u-form-message u-label-none">
                                    <label class="u-label">Mensagem</label>
                                    <textarea placeholder="Escreva sua mensagem." id="message" name="message" class="u-border-none u-input u-input-rectangle u-palette-3-base" required=""></textarea>
                                </div>
                                <div class="u-align-left u-form-group u-form-submit u-label-none">
                                    <button type="submit" class="u-border-none u-btn u-btn-submit u-button-style u-btn-1">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-xl u-size-30-xxl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout">
                        <div class="u-align-left u-expanded u-grey-10 u-map">
                            <div class="embed-responsive">
                                <iframe class="embed-responsive-item" src="https://maps.google.com/maps?output=embed&amp;q=Rua%20Col%C3%B4nia%2C%201999%20Goi%C3%A2nia-GO%2C%2074705-040&amp;z=17&amp;t=m&amp;hl=pt" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyUnVhJTIwQ29sJUMzJUI0bmlhJTJDJTIwMTk5OSUyMEdvaSVDMyVBMm5pYS1HTyUyQyUyMDc0NzA1LTA0MCUyMiUyQyUyMnpvb20lMjIlM0ExNyUyQyUyMnR5cGVJZCUyMiUzQSUyMnJvYWQlMjIlMkMlMjJsYW5nJTIyJTNBJTIycHQlMjIlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCU3RA=="></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
