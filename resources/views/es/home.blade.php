@extends('layouts.app')

@section('title', 'HOME - Support Solo Sondagens')
@section('meta_keywords', 'SOPORTE SOLO SONDAGENS, Estructura y experiencia para atender a los clientes más exigentes, NUESTROS SERVICIOS, ISAAC NEWTON, Consulte nuestro proceso de trabajo, Contáctenos')
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
        <h1 class="u-align-center u-text u-text-body-alt-color u-title u-text-1">SUPPORT SOLO SONDAGENS</h1>
        <h2 class="u-align-center u-text u-text-default u-text-palette-1-base u-text-2">ESTRUCTURA Y EXPERIENCIA PARA ATENDER A LOS CLIENTES MÁS EXIGENTES</h2>
      </div>
    </section>

<section class="u-align-center u-clearfix u-container-align-center u-white u-section-2" id="sec-ff7b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-palette-1-base u-text-1">NUESTROS SERVICIOS</h1>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <img class="u-expanded-width u-image u-image-contain u-image-1" src="{{ asset('images/pngtree-heavy-duty-drilling-rig-machine-png-image_175540831.webp') }}" data-image-width="540" data-image-height="360" title="Sondagem Rotopercussiva">
                <h4 class="u-text u-text-palette-1-base u-text-2">SONDAJE ROTOPERCUSIVO</h4>
                <a href="{{ route('services.drilling.rotopercussive', ['locale' => 'es']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-1" title="Sondagem Rotopercussivas">más</a>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <img class="u-expanded-width u-image u-image-contain u-image-2" src="{{ asset('images/Icone08.png') }}" data-image-width="2500" data-image-height="2500" title="Elaboração de Projetos de Engenharia">
                <h4 class="u-text u-text-palette-1-base u-text-3">ELABORACIÓN DE PROYECTOS DE INGENIERÍA&nbsp;</h4>
                <a href="{{ route('services.project-development', ['locale' => 'es']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-2" title="Serviços Elaboração Projetos">Más</a>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <img class="u-expanded-width u-image u-image-contain u-image-3" src="{{ asset('images/pngtree-soil-layers-cross-section-with-vibrant-plant-growth-healthy-earth-3d-png-image_17575375.webp') }}" data-image-width="640" data-image-height="640" title="Sondagem Manual">
                <h4 class="u-text u-text-palette-1-base u-text-4">SONDAJE&nbsp;<br>MANUAL</h4>
                <a href="{{ route('services.drilling.manual', ['locale' => 'es']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-3" title="Sondagem Manual"><span class="u-icon u-block-control u-block-c510-76" data-block="13407"></span>&nbsp;más</a>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                <img class="u-expanded-width u-image u-image-contain u-image-4" src="{{ asset('images/pngtree-a-realistic-scientific-lab-microscope-png-image_15161513.png') }}" data-image-width="360" data-image-height="360" title="Laboratorio de Ensaios em Solo">
                <h4 class="u-text u-text-palette-1-base u-text-5">LABORATORIO DE ENSAYOS EN SUELO&nbsp;</h4>
                <a href="{{ route('services.laboratory', ['locale' => 'es']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-4" title="Serviços Laboratorial">más</a>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-5">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <img class="u-expanded-width u-image u-image-contain u-image-5" src="{{ asset('images/pngtree-3d-illustration-of-pile-rocks-on-transparent-background-png-image_13042781.png') }}" data-image-width="360" data-image-height="360" title="Sondagens Com Sondas Especiais ">
                <h4 class="u-text u-text-palette-1-base u-text-6">SONDAJES CON SONDA ESPECIALES&nbsp;</h4>
                <a href="{{ route('services.special-drilling', ['locale' => 'es']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-5" title="Sondagem Sondas Especiais">más</a>
              </div>
            </div>
            <div class="u-align-center u-container-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-6">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                <img class="u-expanded-width u-image u-image-contain u-image-6" src="{{ asset('images/pngtree-d-model-of-a-steel-transmission-tower-with-power-lines-on-png-image_15054625.png') }}" data-image-width="360" data-image-height="360" title="Ensaios Especiais Elétricos">
                <h4 class="u-text u-text-palette-1-base u-text-7">ENSAYOS ESPECIALES ELÉCTRICOS</h4>
                <a href="{{ route('services.electrical-tests', ['locale' => 'es']) }}" class="u-active-palette-1-light-1 u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius u-text-active-white u-text-hover-white u-btn-6" title="Ensaios Especiais Elétricos">más</a>
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
                  <h2 class="u-align-left u-text u-text-body-color u-text-1">ISAAC NEWTON</h2>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-34 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2">
                  <p class="u-align-left u-text u-text-black u-text-2">"LA GRAVEDAD EXPICA LOS MOVIMIENTOS DE LOS PLANETAS, PERO NO EXPICA QUIÉN PUSO LOS PLANETAS EN MOVIMIENTO."<br></p>
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
      <div class="u-shortcode u-shortcode-1"><!-- Elfsight Instagram Feed | Untitled Instagram Feed -->
        <script src="https://elfsightcdn.com/platform.js" async=""></script>
        <div class="elfsight-app-6fa9ef6c-5a60-4d01-979d-7d9a6d9cad9e"></div>
      </div>
    </section>

<section class="skrollable u-clearfix u-container-align-center u-palette-1-base u-parallax u-section-6" id="sec-fa0c" data-image-width="2000" data-image-height="1333">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

<section class="u-align-center u-clearfix u-container-align-center u-valign-middle-md u-valign-middle-xl u-valign-middle-xxl u-section-7" id="sec-d16c">
      <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">¿QUÉ HACEMOS</h5>
      <h2 class="u-align-center u-text u-text-default u-text-2">VERIFICA NUESTRO PROCESO DE TRABAJO</h2>
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
              <p class="u-text u-text-grey-40 u-text-4">ELABORACIÓN DE PROPUESTA CON PRECIO Y PLAZO DE EJECUCIÓN, VALOR DE ENTRADA Y FORMAS DE FACTURACIÓN.</p>
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
              <p class="u-text u-text-grey-40 u-text-6">NEGOCIAR TÉRMINOS, PLAZOS Y VALORES PARA EJECUCIÓN. CONDICIONES DIFERENCIADAS O REGLAS ESPECÍFICAS.</p>
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
              <p class="u-text u-text-grey-40 u-text-8">PREPARACIÓN DEL NECESARIO PARA LA EJECUCIÓN DEL CONTRATADO Y ELABORACIÓN DE ESTRATEGIA PARA LAS SOLICITUD DE LA CONTRATANTE</p>
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
              <p class="u-text u-text-grey-40 u-text-10">PREPARACIÓN DE TRAYECTORIA Y MOVILIZACIÓN PARA EL LUGAR ORIENTADO POR LA CONTRATADA.</p>
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
              <p class="u-text u-text-grey-40 u-text-12">MONTAJE DE ÁREA DE TRABAJO Y INICIO EFECTIVO DEL CONTRATO.</p>
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
                <h2 class="u-align-left u-text u-text-1">CONTÁCTENOS</h2>
                <p class="u-align-left u-text u-text-2">USTED ES SIEMPRE BIENVENIDO PARA ENTRAR EN CONTACTO CON NOSOTROS. NUESTRO ATENDIMIENTO AL CLIENTE ESTÁ DISPONIBLE DE LUNES A VIERNES, DE 9H00 A 20H00. Y SÁBADO A DOMINGO, DE 10H00 A 18H00. (GMT +3). ESTAMOS ANSIOSOS POR ESCUCHAR DE USTED.</p>
                <div class="u-expanded-width u-form u-form-1">
                  <form action="{{ route('contact.submit', ['locale' => 'es']) }}" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px;">
                @csrf
                    <div class="u-form-group u-form-name u-label-none">
                      <label class="u-label">NOMBRE</label>
                      <input type="text" placeholder="NOMBRE COMPLETO " id="name-3434" name="name" class="u-border-none u-input u-input-rectangle u-palette-3-base" required="">
                    </div>
                    <div class="u-form-email u-form-group u-label-none">
                      <label class="u-label">CORREO ELECTRÓNICO</label>
                      <input type="email" placeholder="CORREO ELECTRÓNICO " id="email-3434" name="email" class="u-border-none u-input u-input-rectangle u-palette-3-base" required="">
                    </div>
                    <div class="u-form-group u-form-message u-label-none">
                      <label class="u-label">MENSAJE</label>
                      <textarea placeholder="ESCRIBA SU MENSAJE." id="message-3434" name="message" class="u-border-none u-input u-input-rectangle u-palette-3-base" required=""></textarea>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit u-label-none">
                      <button type="submit" class="u-border-none u-btn u-btn-submit u-button-style u-btn-1">ENVIAR</button>
                    </div>
                    <div class="u-form-send-message u-form-send-success">GRACIAS. SU MENSAJE HA SIDO ENVIADO.</div>
                    <div class="u-form-send-error u-form-send-message">NO FUE POSIBLE ENVIAR SU MENSAJE. POR FAVOR, CORRIJA LOS ERRORES Y VUELVA A INTENTARLO.</div>
                    <input type="hidden" value="" name="recaptchaResponse">
                    <input type="hidden" name="formServices" value="f6259f23-865c-5026-7d7f-ba5f25246e9d">
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

<section class="skrollable u-align-left u-clearfix u-container-align-left u-image u-parallax u-shading u-section-9" id="block-8" data-image-width="5184" data-image-height="3456">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div id="carousel-5620" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-5620" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="2" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="3" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="4" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="5" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="6" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="7" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="8" style="width: 10px; height: 10px;"></li>
            <li data-u-target="#carousel-5620" class="u-grey-30 u-shape-circle" data-u-slide-to="9" style="width: 10px; height: 10px;"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-1"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-07b1"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-07b1" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-1">"CONTRATAMOS A SOPORTE SUELO SONDAJES PARA UNA INVESTIGACIÓN COMPLETA DEL SUELO ANTES DE INICIAR NUESTRAS OBRAS Y QUEDAMOS MUY SATISFECHOS. EL EQUIPO FUE EXTREMADAMENTE PROFESIONAL, CUMPLIÓ TODOS LOS PLAZOS Y ENTREGÓ INFORMES PRECISOS QUE NOS DIERON SEGURIDAD EN EL PROYECTO.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-2">– ING. CIVIL MARCELO RIBEIRO,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-3">CONSTRUCTORA NUEVA TIERRA</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-2"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-8110"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-8110" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-4">"TRABAJO IMPECABLE DESDE EL INICIO HASTA EL FIN. EL EQUIPO TÉCNICO DEMOSTRÓ PROFUNDO CONOCIMIENTO, Y EL ATENDIMIENTO FUE SIEMPRE CLARO Y EFICIENTE. RECOMIENDO SIN HESITAR.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-5">– ARQUITECTA JULIANA SOARES,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-6">ESTUDIO JS ARQUITECTURA</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-3"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-352f"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-352f" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-7">"SERVICIO DE SONDAJE GEOTÉCNICO REALIZADO CON MUCHO PROFESIONALISMO. LOS INFORMES ENTREGADOS FUE FUNDAMENTAL PARA EL ÉXITO DE NUESTRO PROYECTO ESTRUCTURAL.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-8">– ING. ESTRUCTURAL PEDRO LIMA,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-9">GRUPO CONSTRUCTEC</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-4"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-72c1"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-72c1" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-10">"EXCELENTE EXPERIENCIA CON SOPORTE SUELO SONDAJES. COMUNICACIÓN CLARA, EQUIPO PUNTUAL Y RESULTADOS QUE SUPERARON NUESTRAS EXPECTATIVAS TECNOLÓGICAS Y DE CALIDAD.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-11">– DIRECTOR TÉCNICO,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-12">INOVA INGENIERÍA</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-5"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-5ca6"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-5ca6" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-13">"PROFESIONALES ALTAMENTE CALIFICADOS Y COMPROMETIDOS CON LA ENTREGA. LA PRECISIÓN DE LOS DATOS DE SONDAJE HIZO TODA LA DIFERENCIA EN NUESTRA OBRA.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-14">– ING. GEOTÉCNICO RICARDO SANTANA,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-15">GEOTÉCNICA AVANZADA LTDA.</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-6"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-0211"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-0211" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-16">"EQUIPO MUY ATENTO — ACLARARON TODAS NUESTRAS DUDAS TÉCNICAS Y NOS ORIENTARON CON RECOMENDACIONES VALIOSAS. SERVICIO DE PRIMERA.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-17">– CLIENTE RESIDENCIAL<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-18">ANA PAULA</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-7"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-9f66"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-9f66" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-19">"EXCELENTE RELACIÓN COSTO-BENEFICIO. SOPORTE SUELO SONDAJES NOS ENTREGÓ SOLUCIONES PRÁCTICAS Y PRECISAS PARA UN TERRENO COMPLEJO, CON EFICIENCIA Y TRANSPARENCIA.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-20">– ING. CIVIL MARCELO RUBENS,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-21">– CONSTRUCTORA ATLAS INGENIERÍA</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-8"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-8"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-190b"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-190b" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-22">"PROFESIONALISMO Y AGILIDAD DEFINEN EL TRABAJO DE SOPORTE SUELO SONDAJES. EL MATERIAL ENTREGADO FUE CRUCIAL PARA LA LIBERACIÓN DEL PROYECTO JUNTO A LA PREFECTURA Y AL CREA.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-23">– GERENTE DE PROYECTOS,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-24">CONSTRUMAIS</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-9"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-9"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-0bdf"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-0bdf" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-25">"NUNCA HABÍA TRABAJADO CON UN EQUIPO TAN DEDICADO. CADA ETAPA DE LA SONDAJE FUE EJECUTADA CON CONTROL DE CALIDAD Y ENTREGA TÉCNICA IMPECABLE.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-26">– ING. CIVIL LUCAS FERREIRA,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-27">PROYECTOS ESTRUCTURALES</h6>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-align-center u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-10"><span class="u-align-center u-icon u-icon-circle u-text-grey-25 u-icon-10"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332"><use xlink:href="#svg-df4e"></use></svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-df4e" style="enable-background:new 0 0 95.333 95.332;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-large-text u-text u-text-default u-text-variant u-text-28">"MÁS QUE UN SERVICIO TÉCNICO, TUVIMOS UNA VERDADERA ASOCIACIÓN. SOPORTE SUELO SONDAJES DEMOSTRÓ ALTA EXPERTISE Y CONFIANZA EN TODOS LOS DETALLES.”</p>
                <h4 class="u-align-center u-text u-text-default u-text-29">– CLIENTE CORPORATIVO,<br>
</h4>
                <h6 class="u-align-center u-text u-text-default u-text-30">ECOFUNDACIONES INGENIERÍA</h6>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden-xs u-text-grey-30 u-carousel-control-1" href="#carousel-5620" role="button" data-u-slide="prev"><span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg></span><span class="sr-only">+Previous</span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden-xs u-text-grey-30 u-carousel-control-2" href="#carousel-5620" role="button" data-u-slide="next"><span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg></span><span class="sr-only">+Next</span>
          </a>
        </div>
      </div>
    </section>

<section class="u-align-center u-clearfix u-container-align-center u-section-10" id="block-6">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1">NUESTROS CLIENTES</h2>
        <p class="u-align-center u-text u-text-2">EMPRESAS QUE CONFIAN Y MANTIENEN RELACIÓN CONTÍNUA CON SOPORTE SUELO SONDAJES.</p>
        <div class="u-expanded-width u-gallery u-layout-horizontal u-lightbox u-show-text-on-hover u-width-fixed u-gallery-1" id="carousel-bb3f">
          <div class="u-gallery-inner u-gallery-inner-1" role="listbox"><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-1"><div class="u-back-slide u-back-slide-1" data-image-width="200" data-image-height="200"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-1" src="{{ asset('images/Enermais.jpeg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-1"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-2"><div class="u-back-slide u-back-slide-2" data-image-width="230" data-image-height="230"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-2" src="{{ asset('images/CamargoCorreia.png') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-2"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-3"><div class="u-back-slide u-shading u-back-slide-3" data-image-width="300" data-image-height="210"><img src="{{ asset('images/Arax.gif') }}" alt="" data-image-width="2000" data-image-height="1333" class="u-back-image u-effect-hover-slide-direction-left u-back-image-3">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-3"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-4"><div class="u-back-slide u-back-slide-4" data-image-width="200" data-image-height="200"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-4" src="{{ asset('images/AoVerde.jpg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-4"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-5" data-image-width="2000" data-image-height="1333"><div class="u-back-slide u-back-slide-5" data-image-width="200" data-image-height="200"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-5" src="{{ asset('images/AngloAmerican.gif') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-5"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-6" data-image-width="512" data-image-height="512"><div class="u-back-slide u-back-slide-6" data-image-width="512" data-image-height="512"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-6" src="{{ asset('images/Hapvida.jpg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-6"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-7" data-image-width="200" data-image-height="200"><div class="u-back-slide u-back-slide-7"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-7" src="{{ asset('images/GusaNordeste.jpg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-7"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-8" data-image-width="224" data-image-height="225"><div class="u-back-slide u-back-slide-8"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-8" src="{{ asset('images/OzMineralsBrasil.png') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-8"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-9" data-image-width="359" data-image-height="361"><div class="u-back-slide u-back-slide-9"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-9" src="{{ asset('images/HorizonteMineralsPLC.png') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-9"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-10" data-image-width="283" data-image-height="283"><div class="u-back-slide u-back-slide-10"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-10" src="{{ asset('images/Madero.jpg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-10"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-11" data-image-width="650" data-image-height="500"><div class="u-back-slide u-back-slide-11"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-11" src="{{ asset('images/Sinobras.jpg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-11"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-12" data-image-width="200" data-image-height="200"><div class="u-back-slide u-back-slide-12"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-12" src="{{ asset('images/suzano.png') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-12"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-13" data-image-width="600" data-image-height="600"><div class="u-back-slide u-back-slide-13"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-13" src="{{ asset('images/ItineraConstruo.png') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-13"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-14" data-image-width="200" data-image-height="200"><div class="u-back-slide u-back-slide-14"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-14" src="{{ asset('images/Sendi.jpeg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-14"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-15" data-image-width="240" data-image-height="240"><div class="u-back-slide u-back-slide-15"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-15" src="{{ asset('images/Vale.jpg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-15"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-16" data-image-width="225" data-image-height="225"><div class="u-back-slide u-back-slide-16"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-16" src="{{ asset('images/taesa.png') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-16"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-17" data-image-width="500" data-image-height="500"><div class="u-back-slide u-back-slide-17"><img class="u-back-image u-effect-hover-slide-direction-left u-back-image-17" src="{{ asset('images/VLI.jpg') }}">
</div><div class="u-align-center u-container-align-center u-over-slide u-shading u-valign-middle-xl u-valign-middle-xxl u-over-slide-17"></div>
</div></div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-rounded u-opacity u-opacity-70 u-radius u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button"><span aria-hidden="true">
              <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg></span><span class="sr-only">
              <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg></span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-rounded u-opacity u-opacity-70 u-radius u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button"><span aria-hidden="true">
              <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg></span><span class="sr-only">
              <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg></span>
          </a>
        </div>
      </div>
    </section>

<section class="skrollable u-clearfix u-container-align-center u-image u-parallax u-shading u-valign-middle-xl u-valign-middle-xxl u-section-11" id="sec-6d29" data-image-width="4496" data-image-height="3000">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <div class="custom-expanded u-accordion u-align-left u-faq u-accordion-1" role="tablist">
                  <div class="u-accordion-item">
                    <a class="active u-accordion-link u-button-style u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-accordion-link-1" id="link-" aria-controls="" aria-selected="true" role="tab"><span class="u-accordion-link-text">1. ¿QUÉ ES SONDAJE DE SUELO Y POR QUÉ ES IMPORTANTE</span><span class="u-accordion-link-icon u-border-2 u-border-palette-1-base u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16"><use xlink:href="#svg-c6b7"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-c6b7"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
                    </a>
                    <div class="u-accordion-active u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-1" aria-labelledby="link-" role="tabpanel">
                      <div class="u-container-layout u-container-layout-2">
                        <div class="fr-view u-clearfix u-rich-text u-text u-text-1"><p>EL SONDAJE DE SUELO ES EL CONJUNTO DE ENSAYOS REALIZADOS PARA IDENTIFICAR LAS CARACTERÍSTICAS FÍSICAS Y MECÁNICAS DEL TERRENO. ES FUNDAMENTAL PARA GARANTIZAR LA SEGURIDAD DE LAS OBRAS, DEFINIR EL TIPO DE FUNDACIÓN ADECUADO Y EVITAR PROBLEMAS COMO RECALQUES, GRIETAS Y INESTABILIDADES ESTRUCTURALES.</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-accordion-link-2" id="link-" aria-controls="" aria-selected="false" role="tab"><span class="u-accordion-link-text">2. ¿CUÁLES SON LOS PRINCIPALES TIPOS DE SONDAJE UTILIZADOS EN LA INGENIERÍA</span><span class="u-accordion-link-icon u-border-2 u-border-palette-1-base u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16"><use xlink:href="#svg-02ef"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-02ef"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-2" aria-labelledby="link-" role="tabpanel">
                      <div class="u-container-layout u-container-layout-3">
                        <div class="fr-view u-clearfix u-rich-text u-text"><p class="skrollable" data-end="694" data-start="669" id="isPasted" style="line-height: 1.2;">LOS TIPOS MÁS COMUNES SON:</p><ul class="skrollable" data-end="1039" data-start="695"><li class="skrollable" data-end="777" data-start="695"><p class="skrollable" data-end="777" data-start="697" style="line-height: 1.2;"><strong class="skrollable" data-end="713" data-start="697">SONDAJE SPT</strong> (STANDARD PENETRATION TEST), AMPLIAMENTE UTILIZADO PARA EDIFICACIONES;</p></li><li class="skrollable" data-end="835" data-start="778"><p class="skrollable" data-end="835" data-start="780" style="line-height: 1.2;"><strong class="skrollable" data-end="801" data-start="780">SONDAJE ROTATIVO</strong>, INDICADO PARA TERRENOS ROCOSOS;</p></li><li class="skrollable" data-end="883" data-start="836"><p class="skrollable" data-end="883" data-start="838" style="line-height: 1.2;"><strong class="skrollable" data-end="856" data-start="838">SONDAJE MIXTO</strong>, CUANDO HAY SUELOS Y ROCAS;</p></li><li class="skrollable" data-end="1039" data-start="884"><p class="skrollable" data-end="1039" data-start="886" style="line-height: 1.2;"><strong class="skrollable" data-end="910" data-start="886">SONDAJES GEOFÍSICOS</strong>, UTILIZADOS PARA INVESTIGACIONES NO DESTRUCTIVAS.
CADA MÉTODO ES SELECCIONADO CONFORME EL TIPO DE OBRA Y LAS CARACTERÍSTICAS DEL TERRENO.</p></li></ul></div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-accordion-link-3" id="link-" aria-controls="" aria-selected="false" role="tab"><span class="u-accordion-link-text">3. ¿CUÁNDO LA SONDAJE DE SUELO ES OBLIGATORIA</span><span class="u-accordion-link-icon u-border-2 u-border-palette-1-base u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16"><use xlink:href="#svg-0501"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-0501"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-3" aria-labelledby="link-" role="tabpanel">
                      <div class="u-container-layout u-container-layout-4">
                        <div class="fr-view u-clearfix u-rich-text u-text"><p>LA SONDAJE ES OBLIGATORIA EN PRÁCTICAMENTE TODAS LAS OBRAS DE INGENIERÍA, ESPECIALMENTE EN EDIFICACIONES, OBRAS INDUSTRIALES, FUNDACIONES ESPECIALES, LÍNEAS DE TRANSMISIÓN Y INFRAESTRUCTURA. ADemás, ES EXIGIDA POR NORMAS TÉCNICAS Y FRECUENTEMENTE SOLICITADA POR ÓRGANOS LICENCIADORES Y SEGUROS. </p></div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-accordion-link-4" id="link-8c62" role="tab" aria-controls="8c62" aria-selected="false"><span class="u-accordion-link-text">4. ¿QUÉ ES EL ENSAYO SPT Y QUÉ INDICA</span><span class="u-accordion-link-icon u-border-2 u-border-palette-1-base u-icon u-icon-circle u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16"><use xlink:href="#svg-3a49"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-3a49"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-4" id="8c62" role="tabpanel" aria-labelledby="link-8c62">
                      <div class="u-container-layout u-container-layout-5">
                        <div class="fr-view u-clearfix u-rich-text u-text"><p>EL ENSAYO SPT MIDE LA RESISTENCIA DEL SUELO A LA PENETRACIÓN, PROPORCIONANDO EL ÍNDICE <strong data-end="1526" data-start="1517" id="isPasted" class="skrollable">N-SPT</strong>, QUE INDICA LA COMPACIDAD O CONSISTENCIA DEL SUELO. ESOS DATOS SON ESenciales PARA EL DIMENSIONAMIENTO DE LAS FUNDACIONES Y EVALUACIÓN DE LA CAPACIDAD DE CARGA DEL TERRENO. </p></div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-accordion-link-5" id="link-c40a" role="tab" aria-controls="c40a" aria-selected="false"><span class="u-accordion-link-text">​5. ¿Cuál es la diferencia entre la exploración geotécnica y la investigación geofísica?</span><span class="u-accordion-link-icon u-border-2 u-border-palette-1-base u-icon u-icon-circle u-text-palette-1-base u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16"><use xlink:href="#svg-6aba"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-6aba"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-5" id="c40a" role="tabpanel" aria-labelledby="link-c40a">
                      <div class="u-container-layout u-container-layout-6">
                        <div class="fr-view u-clearfix u-rich-text u-text"><p>La exploración geotécnica implica la perforación directa del suelo, la recopilación de muestras y pruebas físicas. Por otro lado, la investigación geofísica utiliza métodos indirectos, como la resistividad eléctrica, para mapear el subsuelo sin perforación. Muchas veces, las dos técnicas son complementarias. </p></div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-accordion-link-6" id="link-266e" role="tab" aria-controls="266e" aria-selected="false"><span class="u-accordion-link-text">​6. ¿La exploración de suelo evita problemas futuros en la obra?</span><span class="u-accordion-link-icon u-border-2 u-border-palette-1-base u-icon u-icon-circle u-text-palette-1-base u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16"><use xlink:href="#svg-b74f"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-b74f"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-6" id="266e" role="tabpanel" aria-labelledby="link-266e">
                      <div class="u-container-layout u-container-layout-7">
                        <div class="fr-view u-clearfix u-rich-text u-text"><p>Sí. Una investigación geotécnica bien ejecutada reduce significativamente los riesgos como asentamientos excesivos, roturas de cimentación, inestabilidades de taludes y costos inesperados durante la ejecución de la obra. </p></div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-accordion-link-7" id="link-345d" role="tab" aria-controls="345d" aria-selected="false"><span class="u-accordion-link-text">​7. ¿Quién debe contratar e interpretar la exploración de suelo?</span><span class="u-accordion-link-icon u-border-2 u-border-palette-1-base u-icon u-icon-circle u-text-palette-1-base u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16"><use xlink:href="#svg-b085"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-b085"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-7" id="345d" role="tabpanel" aria-labelledby="link-345d">
                      <div class="u-container-layout u-container-layout-8">
                        <div class="fr-view u-clearfix u-rich-text u-text"><p>El contrato generalmente lo realiza el propietario o el responsable de la obra, pero la interpretación de los resultados debe ser realizada por un <strong data-end="2557" data-start="2512" id="isPasted" class="skrollable">ingeniero civil o geotécnico habilitado</strong>, garantizando que los datos se apliquen correctamente al proyecto. </p></div>
                      </div>
                    </div>
                  </div>
                  <div class="u-accordion-item">
                    <a class="u-accordion-link u-button-style u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-accordion-link-8" id="link-e062" role="tab" aria-controls="e062" aria-selected="false"><span class="u-accordion-link-text">​8. ¿Cuál es la importancia de la geotecnia en las obras de infraestructura?</span><span class="u-accordion-link-icon u-border-2 u-border-palette-1-base u-icon u-icon-circle u-text-palette-1-base u-icon-8"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16"><use xlink:href="#svg-7b65"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-7b65"><path d="M8,10.7L1.6,5.3c-0.4-0.4-1-0.4-1.3,0c-0.4,0.4-0.4,0.9,0,1.3l7.2,6.1c0.1,0.1,0.4,0.2,0.6,0.2s0.4-0.1,0.6-0.2l7.1-6
	c0.4-0.4,0.4-0.9,0-1.3c-0.4-0.4-1-0.4-1.3,0L8,10.7z"></path></svg></span>
                    </a>
                    <div class="u-accordion-pane u-container-style u-shape-rectangle u-accordion-pane-8" id="e062" role="tabpanel" aria-labelledby="link-e062">
                      <div class="u-container-layout u-container-layout-9">
                        <div class="fr-view u-clearfix u-rich-text u-text"><p>La geotecnia es fundamental para obras como carreteras, presas, torres de transmisión, puentes y cimentaciones profundas. Ella garantiza la estabilidad, durabilidad y seguridad de las estructuras, considerando el comportamiento del suelo a lo largo del tiempo. </p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-10"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":"4"}--><!--/blog_options_json-->
                <div class="u-blog u-container-style u-expanded-width u-layout-grid u-pagination-center u-sorting-right u-blog-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-max-items="4" data-items-per-page="2" data-blog-id="blog-1">
                  <div class="u-list-control"></div>
                  <div class="u-repeater u-repeater-1"><!--blog_post-->
                    <div class="u-align-left u-blog-post u-container-align-left u-container-style u-repeater-item u-video-cover u-repeater-item-1">
                      <div class="u-container-layout u-similar-container u-container-layout-11"><!--blog_post_image-->
                        <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="{{ asset('images/66-Alta-scaled.jpg') }}" data-href="/blog/es/cómo-elegir-una-empresa-confiable-para-realizar-la-encuesta-de-su-terreno.html"><!--/blog_post_image--><!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-9">
                          <a class="u-post-header-link" href="/blog/es/cómo-elegir-una-empresa-confiable-para-realizar-la-encuesta-de-su-terreno.html">¿Cómo elegir una empresa confiable para realizar la encuesta de su terreno?</a>
                        </h4><!--/blog_post_header--><!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1"><!--blog_post_metadata_date--><span class="u-meta-date u-meta-icon">08 de jan. de 2026</span><!--/blog_post_metadata_date--><!--blog_post_metadata_comments--><span class="u-meta-comments u-meta-icon"><!--blog_post_metadata_comments_content-->Comments (0)<!--/blog_post_metadata_comments_content--></span><!--/blog_post_metadata_comments-->
                        </div><!--/blog_post_metadata--><!--blog_post_readmore-->
                        <a href="/blog/es/cómo-elegir-una-empresa-confiable-para-realizar-la-encuesta-de-su-terreno.html" class="u-active-none u-blog-control u-border-2 u-border-active-palette-1-dark-1 u-border-hover-palette-1-dark-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">​Leia mais</a><!--/blog_post_readmore-->
                      </div>
                    </div><div class="u-align-left u-blog-post u-container-align-left u-container-style u-repeater-item u-video-cover u-repeater-item-2">
                      <div class="u-container-layout u-similar-container u-container-layout-12"><!--blog_post_image-->
                        <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-2" src="{{ asset('images/Original_TimePhoto_20250605_090110.jpg') }}" data-href="/blog/es/cuánto-cuesta-una-prospección-de-suelo-y-por-qué-ese-valor-vale-la-pena.html"><!--/blog_post_image--><!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-10">
                          <a class="u-post-header-link" href="/blog/es/cuánto-cuesta-una-prospección-de-suelo-y-por-qué-ese-valor-vale-la-pena.html">¿Cuánto cuesta una prospección de suelo y por qué ese valor vale la pena</a>
                        </h4><!--/blog_post_header--><!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-2"><!--blog_post_metadata_date--><span class="u-meta-date u-meta-icon">08 de jan. de 2026</span><!--/blog_post_metadata_date--><!--blog_post_metadata_comments--><span class="u-meta-comments u-meta-icon"><!--blog_post_metadata_comments_content-->Comments (0)<!--/blog_post_metadata_comments_content--></span><!--/blog_post_metadata_comments-->
                        </div><!--/blog_post_metadata--><!--blog_post_readmore-->
                        <a href="/blog/es/cuánto-cuesta-una-prospección-de-suelo-y-por-qué-ese-valor-vale-la-pena.html" class="u-active-none u-blog-control u-border-2 u-border-active-palette-1-dark-1 u-border-hover-palette-1-dark-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-2">​Leia mais</a><!--/blog_post_readmore-->
                      </div>
                    </div><div class="u-align-left u-blog-post u-container-align-left u-container-style u-repeater-item u-video-cover u-repeater-item-3">
                      <div class="u-container-layout u-similar-container u-container-layout-13"><!--blog_post_image-->
                        <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-3" src="{{ asset('images/Original_TimePhoto_20251003_125724.jpg') }}" data-href="/blog/es/cuándo-es-obligatoria-la-prospección-de-suelo.html"><!--/blog_post_image--><!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-11">
                          <a class="u-post-header-link" href="/blog/es/cuándo-es-obligatoria-la-prospección-de-suelo.html">¿Cuándo es obligatoria la prospección de suelo?</a>
                        </h4><!--/blog_post_header--><!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-3"><!--blog_post_metadata_date--><span class="u-meta-date u-meta-icon">08 de jan. de 2026</span><!--/blog_post_metadata_date--><!--blog_post_metadata_comments--><span class="u-meta-comments u-meta-icon"><!--blog_post_metadata_comments_content-->Comments (0)<!--/blog_post_metadata_comments_content--></span><!--/blog_post_metadata_comments-->
                        </div><!--/blog_post_metadata--><!--blog_post_readmore-->
                        <a href="/blog/es/cuándo-es-obligatoria-la-prospección-de-suelo.html" class="u-active-none u-blog-control u-border-2 u-border-active-palette-1-dark-1 u-border-hover-palette-1-dark-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">​Leia mais</a><!--/blog_post_readmore-->
                      </div>
                    </div><div class="u-align-left u-blog-post u-container-align-left u-container-style u-repeater-item u-video-cover u-repeater-item-4">
                      <div class="u-container-layout u-similar-container u-container-layout-14"><!--blog_post_image-->
                        <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-4" src="{{ asset('images/Original_TimePhoto_20250516_102036.jpg') }}" data-href="/blog/es/sondaje-spt-qué-es-y-por-qué-es-tan-importante-para-su-construcción.html"><!--/blog_post_image--><!--blog_post_header-->
                        <h4 class="u-blog-control u-text u-text-12">
                          <a class="u-post-header-link" href="/blog/es/sondaje-spt-qué-es-y-por-qué-es-tan-importante-para-su-construcción.html">Sondaje SPT: qué es y por qué es tan importante para su construcción</a>
                        </h4><!--/blog_post_header--><!--blog_post_metadata-->
                        <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-4"><!--blog_post_metadata_date--><span class="u-meta-date u-meta-icon">08 de jan. de 2026</span><!--/blog_post_metadata_date--><!--blog_post_metadata_comments--><span class="u-meta-comments u-meta-icon"><!--blog_post_metadata_comments_content-->Comments (0)<!--/blog_post_metadata_comments_content--></span><!--/blog_post_metadata_comments-->
                        </div><!--/blog_post_metadata--><!--blog_post_readmore-->
                        <a href="/blog/es/sondaje-spt-qué-es-y-por-qué-es-tan-importante-para-su-construcción.html" class="u-active-none u-blog-control u-border-2 u-border-active-palette-1-dark-1 u-border-hover-palette-1-dark-1 u-border-no-left u-border-no-right u-border-no-top u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-4">​Leia mais</a><!--/blog_post_readmore-->
                      </div>
                    </div><!--/blog_post--><!--blog_post-->
                    <!--/blog_post--><!--blog_post-->
                    <!--/blog_post--><!--blog_post-->
                    <!--/blog_post-->
                  </div>
                  <div class="has-pagination u-list-control"><!--blog_pagination--><!--blog_pagination_options_json--><!--{"ul":"style=\"\" class=\"responsive-style1 u-pagination u-unstyled\"","li":"style=\"\" class=\"u-nav-item u-pagination-item\"","link":"style=\"padding: 16px\" class=\"u-button-style u-nav-link\""}--><!--/blog_pagination_options_json-->
                    <ul class="responsive-style1 u-pagination u-unstyled" data-blog-source-type="Recent"><li class="disabled prev u-nav-item u-pagination-item"><a class="u-button-style u-nav-link" href="#" style="padding: 16px">〈</a>
</li><li class="active u-nav-item u-pagination-item"><a class="u-button-style u-nav-link" href="#" style="padding: 16px">1</a>
</li><li class="u-nav-item u-pagination-item"><a class="u-button-style u-nav-link" href="#" style="padding: 16px">2</a>
</li><li class="u-nav-item u-pagination-item u-pagination-separator"><a class="u-button-style u-nav-link" href="#" style="padding: 16px">...</a>
</li><li class="u-nav-item u-pagination-item"><a class="u-button-style u-nav-link" href="#" style="padding: 16px">8</a>
</li><li class="next u-nav-item u-pagination-item"><a class="u-button-style u-nav-link" href="#" style="padding: 16px">〉</a>
</li></ul><!--/blog_pagination-->
                  </div>
                </div><!--/blog-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<section class="u-align-center u-clearfix u-container-align-center u-section-12" id="block-10">
      <div class="u-expanded-width u-gallery u-layout-horizontal u-lightbox u-no-transition u-show-text-on-hover u-width-fixed u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1"><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-1"><div class="u-back-slide u-back-slide-1" data-image-width="3840" data-image-height="2160"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-1" src="{{ asset('images/Original_TimePhoto_20251003_125724.jpg') }}">
</div><div class="u-over-slide u-over-slide-1"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-2"><div class="u-back-slide u-back-slide-2" data-image-width="3840" data-image-height="2160"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-2" src="{{ asset('images/Original_TimePhoto_20250809_162300.jpg') }}">
</div><div class="u-over-slide u-over-slide-2"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-3"><div class="u-back-slide u-back-slide-3" data-image-width="3840" data-image-height="2160"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-3" src="{{ asset('images/Original_TimePhoto_20250809_130924.jpg') }}">
</div><div class="u-over-slide u-over-slide-3"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-4"><div class="u-back-slide u-back-slide-4" data-image-width="3840" data-image-height="2160"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-4" src="{{ asset('images/Original_TimePhoto_20250809_092628.jpg') }}">
</div><div class="u-over-slide u-over-slide-4"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-5"><div class="u-back-slide u-back-slide-5" data-image-width="3840" data-image-height="2160"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-5" src="{{ asset('images/Original_TimePhoto_20250809_093925.jpg') }}">
</div><div class="u-over-slide u-over-slide-5"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-6"><div class="u-back-slide u-back-slide-6" data-image-width="3840" data-image-height="2160"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-6" src="{{ asset('images/Original_TimePhoto_20250605_090110.jpg') }}">
</div><div class="u-over-slide u-over-slide-6"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-7" data-image-width="3840" data-image-height="2160"><div class="u-back-slide u-back-slide-7"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-7" src="{{ asset('images/Original_TimePhoto_20250515_134542.jpg') }}">
</div><div class="u-over-slide u-over-slide-7"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-8" data-image-width="3840" data-image-height="2160"><div class="u-back-slide u-back-slide-8"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-8" src="{{ asset('images/Original_TimePhoto_20250516_082304.jpg') }}">
</div><div class="u-over-slide u-over-slide-8"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-9" data-image-width="3840" data-image-height="2160"><div class="u-back-slide u-back-slide-9"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-9" src="{{ asset('images/Original_TimePhoto_20250516_102036.jpg') }}">
</div><div class="u-over-slide u-over-slide-9"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-10" data-image-width="3840" data-image-height="2160"><div class="u-back-slide u-back-slide-10"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-10" src="{{ asset('images/Original_TimePhoto_20250301_075938.jpg') }}">
</div><div class="u-over-slide u-over-slide-10"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-11" data-image-width="3840" data-image-height="2160"><div class="u-back-slide u-back-slide-11"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-11" src="{{ asset('images/Original_TimePhoto_20250301_091116.jpg') }}">
</div><div class="u-over-slide u-over-slide-11"></div>
</div><div class="u-effect-fade u-effect-hover-slide u-gallery-item u-shape-rectangle u-gallery-item-12" data-image-width="3840" data-image-height="2160"><div class="u-back-slide u-back-slide-12"><img class="u-back-image u-effect-hover-slide-direction-right u-back-image-12" src="{{ asset('images/Original_TimePhoto_20250301_102448.jpg') }}">
</div><div class="u-over-slide u-over-slide-12"></div>
</div></div>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-palette-1-base u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button"><span aria-hidden="true">
            <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg></span><span class="sr-only">
            <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg></span>
        </a>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-palette-1-base u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button"><span aria-hidden="true">
            <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg></span><span class="sr-only">
            <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg></span>
        </a>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-palette-1-base u-spacing-10 u-text-white u-gallery-nav-3" href="#" role="button"><span aria-hidden="true">
            <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg></span><span class="sr-only">
            <svg viewBox="0 0 129 129"><path d="m64.5,122.6c32,0 58.1-26 58.1-58.1s-26-58-58.1-58-58,26-58,58 26,58.1 58,58.1zm0-108c27.5,5.32907e-15 49.9,22.4 49.9,49.9s-22.4,49.9-49.9,49.9-49.9-22.4-49.9-49.9 22.4-49.9 49.9-49.9z"></path><path d="m70,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8l-23.5-23.5 23.5-23.5c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-26.4,26.4c-0.8,0.8-1.2,1.8-1.2,2.9s0.4,2.1 1.2,2.9l26.4,26.4z"></path></svg></span>
        </a>
        <a class="u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-palette-1-base u-spacing-10 u-text-white u-gallery-nav-4" href="#" role="button"><span aria-hidden="true">
            <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg></span><span class="sr-only">
            <svg viewBox="0 0 129 129"><path d="M64.5,122.6c32,0,58.1-26,58.1-58.1S96.5,6.4,64.5,6.4S6.4,32.5,6.4,64.5S32.5,122.6,64.5,122.6z M64.5,14.6    c27.5,0,49.9,22.4,49.9,49.9S92,114.4,64.5,114.4S14.6,92,14.6,64.5S37,14.6,64.5,14.6z"></path><path d="m51.1,93.5c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l26.4-26.4c0.8-0.8 1.2-1.8 1.2-2.9 0-1.1-0.4-2.1-1.2-2.9l-26.4-26.4c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l23.5,23.5-23.5,23.5c-1.6,1.6-1.6,4.2 0,5.8z"></path></svg></span>
        </a>
      </div>
    </section>
@endsection

