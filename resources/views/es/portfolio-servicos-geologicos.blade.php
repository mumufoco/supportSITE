@extends('layouts.nicepage')

@section('lang', 'es')
@section('title', 'Portfólio Serviços Geológicos')
@section('body-class', 'u-body u-clearfix u-xl-mode')

@push('meta')
    <meta name="keywords" content="​SOPORTE SOLO SONDEOS, ​LABORATORIO:, ​GEOLOGÍA E INGENIERÍA:, ​ELABORACIÓN DE PROYECTOS:">
    <meta name="description" content="">
    <meta name="generator" content="Nicepage 8.1.4, nicepage.com">
    <meta name="theme-color" content="#a1c59a">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/Portfólio-Serviços-Geológicos.css') }}" media="screen">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900">
@endpush

@section('content')
<header class="u-clearfix u-header u-sticky u-sticky-53ac u-header" id="header"><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="{{ asset('images/9.png') }}" class="u-logo-image u-logo-image-1" title="HOME - Support Solo Sondagens">
        </a>
        <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" role="navigation" data-responsive-from="XS" data-position="Menu">
          <div class="menu-collapse" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-hamburger-link u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-2-base" href="#" tabindex="-1" aria-label="Open menu" aria-controls="8107">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul role="menubar" class="u-nav u-spacing-30 u-unstyled u-nav-1"><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" style="padding: 10px 0px;">SERVICIOS</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2" aria-label="SERVIÇOS menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Serviços-Geológico.html">SERVICIOS GEOLÓGICOS</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Serviços-Laboratorial.html">SERVICIOS LABORATORIALES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Sondagem-Sondas-Especiais.html">SONDEO ESPECIALES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Serviços-Elaboração-Projetos.html">SERVICIOS ELABORACIÓN DE COMPLEMENTARIOS</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Serviços-Fundação-Profunda.html">SERVICIOS DE FUNDACIÓN PROFUNDA</a>
</li></ul>
</div>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Serviços-Geológico.html" style="padding: 10px 0px;">PORTFOLIOS</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3" aria-label="PORTFÓLIOS menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Portfólio-Serviços-Geológicos.html">PORTFOLIO DE SUELO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Portfólio-Serviços-Mineração.html">PORTFOLIO DE MINERÍA</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Portfólio-Serviços-Transmissão.html">PORTFOLIO DE TRANSMISORAS</a>
</li></ul>
</div>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://app.supportsondagens.com.br/index.php/signin" target="_blank" style="padding: 10px 0px;">ÁREA DEL CLIENTE</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/es/Formulario-de-Denúncia.html" style="padding: 10px 0px;">DENUNCIA</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" style="padding: 10px 0px;">COLABORADORES</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4" aria-label="COLABORADORES menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.spt.supportsondagens.com.br" target="_blank">SISTEMA DE SONDEO</a>
</li><li role="none" class="u-nav-item"><a tabindex="-1" role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.sev.supportsondagens.com.br" target="_blank">SONDAGEM ELÉTRICA</a>
</li><li role="none" class="u-nav-item"><a tabindex="-1" role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.sesmt.supportsondagens.com.br" target="_blank">CONTROLE MÉDICINA DO TRABALHO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.ponto.supportsondagens.com.br" target="_blank">PUNTO ELECTRÓNICO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.webmail.supportsondagens.com.br" target="_blank">CORREO ELECTRÓNICO</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse" id="8107" role="region" aria-label="Menu panel">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close" tabindex="-1" aria-label="Close menu"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-5" role="menubar"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link">SERVICIOS</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6" aria-label="SERVIÇOS menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Serviços-Geológico.html">SERVICIOS GEOLÓGICOS</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Serviços-Laboratorial.html">SERVICIOS LABORATORIALES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Sondagem-Sondas-Especiais.html">SONDEO ESPECIALES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Serviços-Elaboração-Projetos.html">SERVICIOS ELABORACIÓN DE COMPLEMENTARIOS</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Serviços-Fundação-Profunda.html">SERVICIOS DE FUNDACIÓN PROFUNDA</a>
</li></ul>
</div>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Serviços-Geológico.html">PORTFOLIOS</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-7" aria-label="PORTFÓLIOS menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Portfólio-Serviços-Geológicos.html">PORTFOLIO DE SUELO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Portfólio-Serviços-Mineração.html">PORTFOLIO DE MINERÍA</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Portfólio-Serviços-Transmissão.html">PORTFOLIO DE TRANSMISORAS</a>
</li></ul>
</div>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="https://app.supportsondagens.com.br/index.php/signin" target="_blank">ÁREA DEL CLIENTE</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/es/Formulario-de-Denúncia.html">DENUNCIA</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link">COLABORADORES</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-8" aria-label="COLABORADORES menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="https://www.spt.supportsondagens.com.br" target="_blank">SISTEMA DE SONDEO</a>
</li><li role="none" class="u-nav-item"><a tabindex="-1" role="menuitem" class="u-button-style u-nav-link" href="https://www.sev.supportsondagens.com.br" target="_blank">SONDAGEM ELÉTRICA</a>
</li><li role="none" class="u-nav-item"><a tabindex="-1" role="menuitem" class="u-button-style u-nav-link" href="https://www.sesmt.supportsondagens.com.br" target="_blank">CONTROLE MÉDICINA DO TRABALHO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="https://www.ponto.supportsondagens.com.br" target="_blank">PUNTO ELECTRÓNICO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="https://www.webmail.supportsondagens.com.br" target="_blank">CORREO ELECTRÓNICO</a>
</li></ul>
</div>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
          <style class="menu-style">@media (max-width: 539px) {
                    [data-responsive-from="XS"] .u-nav-container {
                        display: none;
                    }
                    [data-responsive-from="XS"] .menu-collapse {
                        display: block;
                    }
                }</style>
        </nav>
        <div class="u-language u-language-content-icon-text u-language-layout-icons u-spacing-10 u-language-1">
          <a class="u-language-top-url u-language-url u-text-black" data-lang-text="Português" href="/Portfólio-Serviços-Geológicos.html" data-language="pt" style="background-image: none; text-transform: uppercase; font-size: 0.75rem;"><span class="u-file-icon u-icon u-language-icon u-language-pt u-icon-1"><img src="{{ asset('images/icone18.png') }}" alt=""></span>
          </a>
          <a class="u-language-top-url u-language-url u-text-black" data-lang-text="English" href="/en/Portfólio-Serviços-Geológicos.html" data-language="en" style="background-image: none; text-transform: uppercase; font-size: 0.75rem;"><span class="u-file-icon u-icon u-language-en u-language-icon u-icon-2"><img src="{{ asset('images/icone19.png') }}" alt=""></span>
          </a>
          <a class="u-language-top-url u-language-url u-text-black" data-lang-text="Español" href="/es/Portfólio-Serviços-Geológicos.html" data-language="es" style="background-image: none; text-transform: uppercase; font-size: 0.75rem;"><span class="u-file-icon u-icon u-language-es u-language-icon u-icon-3"><img src="{{ asset('images/icone20.png') }}" alt=""></span>
          </a>
        </div>
      </div></header>
    <section class="u-clearfix u-section-1" id="block-2">
      <div class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="skrollable u-align-center u-container-align-center u-container-style u-layout-cell u-parallax u-shape-rectangle u-size-30 u-layout-cell-1" data-image-width="2000" data-image-height="1333">
              <div class="u-container-layout u-container-layout-1">
                <h1 class="u-text u-text-default u-text-palette-1-base u-text-1">SUPPORT SOLO SONDAGENS&nbsp;</h1>
                <h4 class="u-text u-text-2">INGENIERÍA DE SUELOS, ANÁLISIS, ELABORACIÓN DE PROYECTOS Y LABORATORIO DE SUELOS</h4>
                <h5 class="u-text u-text-palette-1-base u-text-3">https://www.soportedesondedeTierras.com</h5>
              </div>
            </div>
            <div class="u-container-align-center u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1920" data-image-height="1441">
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-2" id="sec-da0a">
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </section>
    <section class="u-clearfix u-container-align-center u-image u-section-3" id="block-6" data-image-width="2560" data-image-height="1439">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-4" id="block-3">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout" style="">
          <div class="u-layout-row" style="">
            <div class="u-container-style u-layout-cell u-size-17 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                <h3 class="u-text u-text-1">SOBRE LA EMPRESA:</h3>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-43 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-2">SOBRE LA EMPRESA: La Soporte de Sondeo de Tierras es una empresa especializada en servicios de sondeo geotécnico y geológico, fundada en 2015 en el ramo de la ingeniería. Con una visión estratégica, la empresa redirigió su enfoque hacia el área de geología en 2018, alineándose con las demandas del mercado y aprovechando su experiencia y pericia para atender a las necesidades específicas de este sector.<br><br><span style="font-weight: 700;">HISTORIA Y EVOLUCIÓN:</span>&nbsp;Desde su fundación en 2015, la Soporte de Sondeo de Tierras se ha establecido como una empresa comprometida con la entrega de soluciones confiables y precisas en el campo de la ingeniería. Sus servicios de sondeo geotécnico inicialmente se centraban en apoyar proyectos de construcción y ingeniería civil. Con un enfoque centrado en el cliente y un equipo altamente calificado, la empresa ha logrado una reputación sólida por la calidad de sus operaciones.<br><br>En 2018, la Soporte de Sondeo de Tierras tomó una decisión estratégica al redirigir su enfoque hacia la geología. Reconociendo la creciente demanda de servicios geológicos de alta calidad, especialmente por parte de las empresas de minería, la empresa se adaptó a los cambios del mercado y comenzó a ofrecer soluciones especializadas en este campo.<br><br><span style="font-weight: 700;">ESPECIALIZACIÓN EN GEOLOGÍA:</span>&nbsp;Con el cambio de enfoque hacia la geología, la Soporte de Sondeo de Tierras expandió sus operaciones para atender a las necesidades de las empresas de minería. Los sondeos geológicos precisos son esenciales para la exploración de minerales y la identificación de depósitos valiosos. A través de técnicas avanzadas de sondeo, la empresa contribuye a la evaluación precisa de los recursos minerales y a la toma de decisiones informadas en el sector de la minería.<br><br><span style="font-weight: 700;">PORTFOLIO Y CLIENTES:</span>&nbsp;A lo largo de los años, la Soporte de Sondeo de Tierras ha construido un portafolio diversificado de proyectos y colaboraciones exitosas. Su pericia en sondeo geotécnico y geológico ha atraído la atención de empresas de minería que buscan soluciones precisas y confiables para sus operaciones. La empresa colabora con empresas de minería, ayudándolas a identificar y evaluar reservas minerales, asistiendo en decisiones de inversión y garantizando que sus operaciones se realicen de manera eficiente y sostenible.<br><br><span style="font-weight: 700;">FUTURO:</span>&nbsp;Con su trayectoria de éxito y adaptabilidad a los cambios del mercado, la Soporte de Sondeo de Tierras está bien posicionada para seguir creciendo como una referencia en el área de sondeo geotécnico y geológico. Su especialización en geología, especialmente en el sector de la minería, contribuye significativamente al éxito y la sostenibilidad de las operaciones de sus clientes. La empresa sigue comprometida con la entrega de servicios de alta calidad, manteniéndose actualizada con las innovaciones técnicas y manteniendo su compromiso con la excelencia en todos los aspectos de sus operaciones.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-5" id="block-5">
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </section>
    <section class="u-clearfix u-section-6" id="block-4">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-align-right u-text u-text-1">LABORATORIO</h1>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-xl u-container-layout-2">
                  <ul class="u-text u-text-2"><li><div class="hidden u-list-icon u-block-86d6-10" style=""></div> LÍMITE DE PLASTICIDAD (LP);</li><li><div class="hidden u-list-icon u-block-86d6-11" style=""></div> LÍMITE DE LIQUIDEZ (LL);</li><li><div class="hidden u-list-icon u-block-86d6-12" style=""></div> GRANULOMETRÍA POR CERNIDO (PEN);</li><li><div class="hidden u-list-icon u-block-86d6-13" style=""></div> MASA ESPECÍFICA DE LOS GRANOS (MESP);</li><li><div class="hidden u-list-icon u-block-86d6-14" style=""></div> GRANULOMETRÍA POR SEDIMENTACIÓN (SED);</li><li><div class="hidden u-list-icon u-block-86d6-15" style=""></div> CLASIFICACIÓN MCT – PASTILLA (MCT.P);</li><li><div class="hidden u-list-icon u-block-86d6-16" style=""></div> CLASIFICACIÓN MCT (MCT.C);</li><li><div class="hidden u-list-icon u-block-86d6-17" style=""></div> ENSAYO DE COMPACTACIÓN (COMP);</li><li><div class="hidden u-list-icon u-block-86d6-18" style=""></div> ENSAYO DE CBR Y EXPANSIÓN (CBR);</li><li><div class="hidden u-list-icon u-block-86d6-19" style=""></div> CISALHAMIENTO DIRECTO (CD);
ENSAYOS TRIAXIALES (TRI);</li><li><div class="hidden u-list-icon u-block-86d6-20" style=""></div> ADENSAMIENTO (ADENS);
ESTUDIO DE DOSIFICACIÓN (DOSAG).</li></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-7" id="sec-8b25">
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </section>
    <section class="u-clearfix u-section-8" id="sec-c1d8">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-xl u-container-layout-1">
                  <h1 class="u-align-right u-text u-text-palette-1-base u-text-1">GEOLOGÍA E INGENIERÍA</h1>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <ul class="u-text u-text-palette-1-base u-text-2"><li><div class="hidden u-list-icon u-block-d7a4-10" style=""></div> SONDEO A PERCUSIÓN (SP);</li><li><div class="hidden u-list-icon u-block-d7a4-12" style=""></div> SONDEO A TRADO (ST);</li><li><div class="hidden u-list-icon u-block-d7a4-14" style=""></div> SONDEO MIXTO (SM);</li><li><div class="hidden u-list-icon u-block-d7a4-16" style=""></div> SONDEO ROTATIVO (SR);</li><li><div class="hidden u-list-icon u-block-d7a4-18" style=""></div> SONDEO SOBRE FLOTANTE (SF);</li><li><div class="hidden u-list-icon u-block-d7a4-20" style=""></div> POZO DE INSPECCIÓN DE PAVIMENTO (PI);</li><li><div class="hidden u-list-icon u-block-d7a4-22" style=""></div> BROQUEAMIENTO DE PAVIMENTO (BQ);</li><li><div class="hidden u-list-icon u-block-d7a4-24" style=""></div> ENSAYO DE PALHETA O ENsayo DE CISALHAMIENTO (VT);</li><li><div class="hidden u-list-icon u-block-d7a4-26" style=""></div> MUESTRA INDEFORMADA TIPO SHELBY (SH);</li><li><div class="hidden u-list-icon u-block-d7a4-28" style=""></div> MUESTRA INDEFORMADA TIPO DENISON (DN);</li><li><div class="hidden u-list-icon u-block-d7a4-30" style=""></div> MUESTRA INDEFORMADA TIPO BLOQUE (BL);</li><li><div class="hidden u-list-icon u-block-d7a4-32" style=""></div> INSTALACIÓN DE PIEZÓMETRO (PZ);</li><li><div class="hidden u-list-icon u-block-d7a4-34" style=""></div> INSTALACIÓN DE INCLINÓMETRO (INCL);</li><li><div class="hidden u-list-icon u-block-d7a4-36" style=""></div> POZO DE MONITOREO (PM).</li></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-9" id="sec-1dfb">
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </section>
    <section class="u-clearfix u-section-10" id="sec-d7a8">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-align-right u-text u-text-1">ELABORACIÓN DE PROYECTOS</h1>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-xl u-container-layout-2">
                  <ul class="u-text u-text-2"><li><div class="hidden u-list-icon u-block-e0e6-10" style=""></div> ELABORACIÓN DE PROYECTOS ESTRUCTURALES EN HORMIGÓN ARMADO;</li><li><div class="hidden u-list-icon u-block-e0e6-11" style=""></div> ELABORACIÓN DE PROYECTOS ESTRUCTURALES EN HORMIGÓN PRETENSADO;</li><li><div class="hidden u-list-icon u-block-e0e6-12" style=""></div> ELABORACIÓN DE PROYECTOS ELÉCTRICOS EN BAJA TENSIÓN;</li><li><div class="hidden u-list-icon u-block-e0e6-13" style=""></div> ELABORACIÓN DE PROYECTOS HIDRÁULICOS DE AGUA FRÍA;</li><li><div class="hidden u-list-icon u-block-e0e6-14" style=""></div> ELABORACIÓN DE PROYECTOS HIDRÁULICOS DE AGUA CALIENTE;</li><li style=""><div class="hidden u-list-icon u-block-e0e6-15" style=""></div> ELABORACIÓN DE PROYECTOS HIDRÁULICOS DE AGUA PLUVIAL;</li><li><div class="hidden u-list-icon u-block-e0e6-16" style=""></div> ELABORACIÓN DE PROYECTOS HIDRÁULICOS DE PISCINA;</li><li><div class="hidden u-list-icon u-block-e0e6-17" style=""></div> ELABORACIÓN DE PROYECTOS HIDRÁULICOS DE ALCANTARILLADO;</li><li><div class="hidden u-list-icon u-block-e0e6-18" style=""></div> ELABORACIÓN DE PROYECTOS DE CLIMATIZACIÓN DE AIRE ACONDICIONADO;</li><li><div class="hidden u-list-icon u-block-e0e6-19" style=""></div> ELABORACIÓN DE PROYECTOS DE COMBATE A INCENDIOS;</li><li><div class="hidden u-list-icon u-block-e0e6-20" style=""></div> ELABORACIÓN DE PROYECTOS DE SPTA</li><li><div class="hidden u-list-icon u-block-e0e6-21" style=""></div> ELABORACIÓN DE PROYECTOS DE DATOS (RED DE INTERNET);</li><li><div class="hidden u-list-icon u-block-e0e6-22" style=""></div> ELABORACIÓN DE PROYECTOS DE DATOS (RED DE TELÉFONO);</li><li><div class="hidden u-list-icon u-block-e0e6-24" style=""></div> ELABORACIÓN DE PROYECTOS DE DATOS (CIRCUITO DE TV CERRADO);</li><li><div class="hidden u-list-icon u-block-e0e6-25" style=""></div> ELABORACIÓN DE PROYECTOS DE FUNDACIÓN PROFUNDA;</li><li><div class="hidden u-list-icon u-block-e0e6-27" style=""></div> ELABORACIÓN DE PROYECTOS DE FUNDACIÓN SUPERFICIAL;</li><li><div class="hidden u-list-icon u-block-e0e6-29" style=""></div> ELABORACIÓN DE PROYECTOS DE FORMAS EN MADERA;</li><li><div class="hidden u-list-icon u-block-e0e6-30" style=""></div> ELABORACIÓN DE PROYECTOS METÁLICOS;</li><li><div class="hidden u-list-icon u-block-e0e6-32" style=""></div> URBANIZACIÓN CONCEPTUAL.</li></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-11" id="sec-4e62">
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </section>
    <section class="u-clearfix u-container-align-center u-image u-section-12" id="sec-9f8f" data-image-width="2560" data-image-height="1439">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-valign-top-xl u-section-13" id="block-7">
      <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout" style="">
          <div class="u-layout-row" style="">
            <div class="u-container-style u-layout-cell u-size-48 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-text u-text-1">LA SONDEO A PERCUSIÓN AUTOMATIZADA, también conocida como SPT (Standard Penetration Test) automatizado, es un método de investigación geotécnica ampliamente utilizado para obtener información sobre las propiedades del suelo y la subsuperficie. Este método es especialmente eficaz para determinar la resistencia del suelo y la capacidad de soporte para proyectos de ingeniería, construcción y geotecnia.<br><br><span style="font-weight: 700;">PROCESO DE LA SONDEO A PERCUSIÓN AUTOMATIZADA:</span><br><br><span style="font-weight: 700;">PREPARACIÓN DEL LUGAR:</span>&nbsp;Antes de iniciar la sondeo, el área se prepara para la instalación de los equipos. El lugar se limpia, se nivela y se marca para garantizar una recolección precisa de los datos.<br>INSTALACIÓN DE LOS EQUIPOS:&nbsp;Una torre de sondeo se monta en el lugar, y un trado se introduce en el suelo para crear un agujero inicial. Luego, un tubo de muestreo se inserta en el suelo para mantener la estabilidad del agujero.<br>PROCEDIMIENTO DE SONDEO:&nbsp;El proceso de sondeo implica la utilización de un martillo automatizado que aplica impactos repetidos en una barra de sondeo, que a su vez penetra en el suelo. Cada impacto se registra y se contabiliza. La penetración obtenida después de 10, 20 y 30 impactos se registra. El número de golpes necesarios para hundir la barra de 30 centímetros se llama “NÚMERO DE GOLPES” (N) o “NÚMERO DE GOLPES POR 30 CENTÍMETROS”.<br>RECOLECCIÓN DE MUESTRAS:&nbsp;Después de un número determinado de golpes (generalmente 50), la muestreo se interrumpe y una muestra de suelo se recolecta del interior del tubo. Estas muestras son importantes para el análisis de las características del suelo.<br>ANÁLISIS E INTERPRETACIÓN:&nbsp;Los datos obtenidos se interpretan para determinar la resistencia del suelo, la densidad y otras propiedades geotécnicas. Esta información es esencial para la toma de decisiones en proyectos de construcción y ingeniería.<br><br><span style="font-weight: 700;">VENTAJAS DE LA SONDEO A PERCUSIÓN AUTOMATIZADA:</span><br><br><span style="font-weight: 700;">EFICIENCIA:</span>&nbsp;La sondeo automatizada es rápida y eficiente, permitiendo la recolección de datos de forma continua en diferentes profundidades.<br><span style="font-weight: 700;">ESTANDARIZACIÓN:</span>&nbsp;El método sigue procedimientos estandarizados, lo que permite comparaciones consistentes entre diferentes lugares.<br><span style="font-weight: 700;">RESISTENCIA DEL SUELO:</span>&nbsp;La resistencia del suelo puede estimarse con base en el número de golpes necesarios para hundir la barra.<br><span style="font-weight: 700;">MUESTRA REPRESENTATIVA:</span>&nbsp;Las muestras de suelo recolectadas proporcionan información sobre la composición del suelo en diferentes profundidades.<br><span style="font-weight: 700;">BAJO IMPACTO AMBIENTAL:</span>&nbsp;La metodología no causa perturbación significativa al suelo y tiene bajo impacto ambiental.<br>La sondeo a percusión automatizada es una técnica esencial para evaluar la resistencia del suelo y las características geotécnicas de manera confiable y eficiente. Es ampliamente utilizada en estudios geotécnicos, planeamiento de fundaciones, proyectos de construcción y ingeniería civil, proporcionando información crucial para garantizar la seguridad y el éxito de proyectos diversos.</p>
              </div>
            </div>
            <div class="u-container-align-center u-container-style u-image u-layout-cell u-size-12 u-image-1" data-image-width="1080" data-image-height="1920">
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-14" id="sec-0d96">
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-15" id="block-8">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-align-center u-container-style u-image u-layout-cell u-size-12 u-image-1" data-image-width="1440" data-image-height="2560">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div class="u-container-style u-layout-cell u-size-48 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-1">LA SONDEO ROTATIVA es un método geotécnico avanzado utilizado para obtener información detallada sobre las capas de suelo y roca presentes debajo de la superficie. Esta técnica es especialmente adecuada para proyectos que requieren análisis profundos de las características geológicas, hidrogeológicas y mecánicas del subsuelo. La sondeo rotativa es ampliamente aplicada en proyectos de minería, exploración de recursos naturales, investigaciones ambientales y estudios geotécnicos complejos.<br><br><span style="font-weight: 700;">PROCESO DE LA SONDEO ROTATIVA:</span><br><br><span style="font-weight: 700;">PREPARACIÓN DEL LUGAR:</span>&nbsp;El lugar se prepara para la sondeo, garantizando acceso seguro y adecuado para la instalación de los equipos.<br><span style="font-weight: 700;">EQUIPOS ROTATIVOS:</span>&nbsp;La sondeo rotativa implica la utilización de un equipo rotativo, conocido como sonda rotativa, que es capaz de perforar el suelo y la roca de forma continua.<br><span style="font-weight: 700;">SONDEO CONTÍNUO:</span>&nbsp;A diferencia de la sondeo a percusión, donde ocurren impactos repetidos, la sondeo rotativa implica la rotación de una broca especializada en el suelo o la roca. La broca está compuesta por diamantes industriales o otros materiales resistentes para perforar diferentes formaciones geológicas.<br><span style="font-weight: 700;">RECOLECCIÓN DE TESTIGOS:</span>&nbsp;A medida que la broca avanza, crea un cilindro de suelo o roca llamado testigo. Estos testigos se retiran cuidadosamente del agujero y se preservan para análisis posteriores.<br><span style="font-weight: 700;">ADQUISICIÓN DE DATOS:</span>&nbsp;Durante la sondeo, se registran varios parámetros, como la profundidad, la apariencia de los testigos, la tasa de avance, la presión de rotación, entre otros.<br><span style="font-weight: 700;">ANÁLISIS DE TESTIGOS:</span>&nbsp;Los testigos recolectados se analizan en laboratorio para determinar la composición geológica, la estructura de las capas, la resistencia del suelo o la roca, la presencia de agua subterránea y otras características relevantes.<br><br><span style="font-weight: 700;">VENTAJAS DE LA SONDEO ROTATIVA:</span><br><br><span style="font-weight: 700;">PRECISIÓN GEOLÓGICA:</span>&nbsp;La sondeo rotativa proporciona información detallada sobre las formaciones geológicas, permitiendo la identificación precisa de capas de suelo y roca.<br><span style="font-weight: 700;">TESTIGOS DE CALIDAD:</span>&nbsp;Los testigos obtenidos se preservan de manera intacta, lo que facilita análisis laboratoriales y interpretaciones geotécnicas.<br><span style="font-weight: 700;">PROFUNDIDAD SIGNIFICATIVA:</span>&nbsp;La técnica permite sondeos en profundidades considerables, adecuadas para proyectos que involucran exploración mineral o investigaciones de recursos hídricos.<br><span style="font-weight: 700;">ANÁLISIS COMPLEJOS:</span>&nbsp;La sondeo rotativa es esencial para proyectos que necesitan información detallada sobre la estructura geológica, resistencia y permeabilidad del subsuelo.<br><span style="font-weight: 700;">VERSATILIDAD:</span>&nbsp;Puede adaptarse a diversas condiciones geológicas e hidrogeológicas, lo que la hace adecuada para una variedad de proyectos.<br><br>La sondeo rotativa es una herramienta poderosa para entender las características del subsuelo y auxiliar en la toma de decisiones en proyectos que involucran ingeniería civil, minería, exploración de recursos naturales y estudios ambientales complejos. A través de esta técnica, ingenieros, geólogos y especialistas pueden obtener una visión detallada de las capas del subsuelo, contribuyendo a proyectos más seguros y exitosos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-container-align-center u-image u-section-16" id="sec-74a2" data-image-width="2560" data-image-height="1439">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-17" id="sec-1ac9">
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </section>
    <section class="u-clearfix u-section-18" id="block-9">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1"><span style="font-weight: 700;">Características de la Plaza de Sondeo en Contenedor:</span><br><br><span style="font-weight: 700;">Movilidad:</span>&nbsp;La principal ventaja de la plaza de sondeo en contenedor es la movilidad. El contenedor puede ser transportado a diferentes lugares, permitiendo la realización de sondeos en áreas remotas o de difícil acceso.<br><span style="font-weight: 700;">Ambiente Controlado:</span>&nbsp;El contenedor está equipado con sistemas de control de temperatura, iluminación y ventilación, creando un ambiente de trabajo cómodo para los técnicos de sondeo.<br><span style="font-weight: 700;">Equipos Especializados:</span>&nbsp;El interior del contenedor está equipado con todas las herramientas y equipos necesarios para realizar sondeos geotécnicos, como sondeos, trados, equipos de perforación, entre otros.<br><span style="font-weight: 700;">Seguridad y Limpieza:</span>&nbsp;La plaza de sondeo en contenedor ayuda a mantener un ambiente de trabajo seguro y limpio, minimizando el riesgo de contaminación del suelo durante las operaciones.<br><span style="font-weight: 700;">Protección contra Inclemencias:</span>&nbsp;Independientemente de las condiciones climáticas, la plaza de sondeo en contenedor permite que las actividades de sondeo continúen sin interrupciones.<br>Control de Muestreo:&nbsp;El muestreo de suelo y roca se realiza de manera precisa y controlada, minimizando la pérdida o contaminación de las muestras.<br><br><span style="font-weight: 700;">Ventajas de la Plaza de Sondeo en Contenedor:</span><br><br><span style="font-weight: 700;">Eficiencia:</span>&nbsp;La configuración previa del contenedor con todos los equipos necesarios reduce el tiempo necesario para la preparación del lugar de sondeo.<br>Calidad de las Muestras:&nbsp;El ambiente controlado minimiza la interferencia de factores externos, resultando en muestras de suelo y roca más representativas.<br><span style="font-weight: 700;">Movilidad:</span>&nbsp;La capacidad de transportar la plaza de sondeo a diferentes lugares facilita la exploración en áreas distantes o inaccesibles.<br>Economía de Recursos:&nbsp;La plaza de sondeo en contenedor reduce los costos asociados a la instalación temporal de equipos en cada lugar de sondeo.<br><span style="font-weight: 700;">Versatilidad:</span>&nbsp;Puede ser adaptada para diferentes tipos de sondeos geotécnicos y para atender a diversas necesidades de proyecto.<br>La plaza de sondeo en contenedor es una solución innovadora que optimiza la realización de sondeos geotécnicos, proporcionando un ambiente de trabajo eficiente, controlado y seguro. Esta aproximación es especialmente beneficiosa para proyectos que exigen movilidad, rapidez en la ejecución y calidad de las muestras colectadas.</p>
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-xl u-section-19" id="sec-2d5d">
      <div class="u-border-3 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
    </section>
    <section class="u-clearfix u-container-align-center u-image u-section-20" id="sec-e448" data-image-width="2560" data-image-height="1439">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-section-21" id="sec-5eb5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1"><span style="font-weight: 700;">Compromiso con la Calidad:</span><br><br>Support Solo Sondeos mantiene un compromiso inquebrantable con la calidad en todos los aspectos de sus operaciones. Esto se refleja en todas las etapas, desde la preparación del lugar hasta la recolección y análisis de datos. La búsqueda de estándares rigurosos de calidad asegura que los resultados proporcionados sean confiables y precisos, proporcionando información fundamental para la toma de decisiones en proyectos de ingeniería, construcción y geotecnia.<br><br><span style="font-weight: 700;">Equipo Calificado:</span><br><br>La empresa valora y invierte en un equipo altamente calificado de ingenieros geotécnicos, geólogos y técnicos de campo. Estos profesionales poseen conocimiento técnico sólido y experiencia práctica, lo que garantiza la ejecución eficiente y precisa de los sondeos. La pericia del equipo permite la interpretación adecuada de los resultados y la orientación de los clientes en la comprensión de la información geotécnica.<br><br><span style="font-weight: 700;">Tecnología Avanzada:</span><br><br>Support Solo Sondeos reconoce la importancia de las innovaciones tecnológicas en el sector geotécnico. La empresa está constantemente actualizada con las últimas tecnologías y metodologías de sondeo, con el fin de mejorar la eficiencia, la calidad y la seguridad de las operaciones. La adopción de equipos de última generación, software avanzado y enfoques innovadores permite a la empresa ofrecer soluciones más precisas y eficaces a los clientes.<br><br><span style="font-weight: 700;">Soluciones Personalizadas:</span><br><br>Cada proyecto es único, y Support Solo Sondeos comprende la importancia de proporcionar soluciones personalizadas para atender a las necesidades específicas de cada cliente. La empresa trabaja en estrecha colaboración con los clientes para entender sus demandas y objetivos, adaptando sus enfoques y metodologías para garantizar que los resultados atiendan a los requisitos únicos de cada proyecto.<br><br><span style="font-weight: 700;">Compromiso con la Innovación:</span><br><br>Support Solo Sondeos cree que la innovación es esencial para mantener la relevancia en el mercado en constante evolución. La empresa está constantemente explorando nuevas tecnologías, metodologías y enfoques para mejorar sus procesos y servicios. Esto incluye la evaluación de nuevos equipos, la incorporación de técnicas de análisis más avanzadas y la exploración de maneras más eficientes de recolectar e interpretar datos geotécnicos.<br>En resumen, Support Solo Sondeos se distingue en el mercado al unir su búsqueda incansable por la calidad, la pericia técnica, la tecnología avanzada y el compromiso con la innovación. Estos pilares permiten que la empresa esté a la vanguardia de la prestación de servicios geotécnicos, atendiendo a las necesidades de los clientes de manera eficaz y siempre superando las expectativas.</p>
      </div>
    </section>
    <section class="u-clearfix u-container-align-center u-image u-section-22" id="sec-354e" data-image-width="2560" data-image-height="1439">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    
    <footer class="u-clearfix u-footer u-shading u-footer" id="footer"><div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-spacing-top-bottom u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-12 u-size-30-md u-layout-cell-1">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-1"><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-1"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-1"><!--block_header_content-->
                ​<a href="/es/Missão-Valores-e-Objetivos.html" data-page-id="116134660" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-1" title="MISIÓN, VALORES Y OBJETIVOS" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1831" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">MISIÓN, VALORES Y OBJETIVOS</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-2"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-3"><!--block_header_content-->
                ​<a href="/es/Código-de-Ética-e-Conduta.html" data-page-id="397702623" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-2" title="CÓDIGO DE ÉTICA Y CONDUCIÓN" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1836" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">​CÓDIGO DE ÉTICA Y CONDUCIÓN</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
                <p class="u-align-center u-text u-text-palette-1-base u-text-5">​​<a href="/es/Plano-de-Segurança-do-Trabalho.html" data-page-id="267910123" class="u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-3" title="PLAN DE SEGURIDAD EN EL TRABAJO" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1839" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">PLAN DE SEGURIDAD EN EL TRABAJO</a></p>
                <p class="u-align-center u-text u-text-palette-1-base u-text-6">​​<a href="https://site.supportsondagens.com.br/plano-de-seguranca-no-trabalho/" class="u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-4" title="INTRANET" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1841" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">​INTRANET</a></p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-12 u-size-30-md u-layout-cell-2" title="">
              <div class="u-container-layout u-valign-middle u-container-layout-2"><!--position-->
                <div data-position="" class="u-align-center u-expanded-width u-position u-position-3"><!--block-->
                  <div class="u-block u-indent-0">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-7"><!--block_header_content-->
                ​<a href="/es/Política-de-Gestão-Ambiental.html" data-page-id="292807556" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-5" title="POLÍTICA DE GESTIÓN AMBIENTAL" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1846" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">​POLÍTICA DE GESTIÓN AMBIENTAL</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-center u-expanded-width u-position u-position-4"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-9"><!--block_header_content-->
                ​<a href="/es/Política-de-Anti-Assedio.html" data-page-id="1863319022" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-6" title="POLÍTICA DE DISCRIMINACIÓN" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1851" style="transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">POLÍTICA DE DISCRIMINACIÓN</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
                <p class="u-align-center u-text u-text-palette-1-base u-text-11">​​<a href="/es/Política-de-Qualidade.html" data-page-id="159087844" class="u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-none u-btn-7" title="POLÍTICA DE CALIDAD" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1854" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">​POLÍTICA DE CALIDAD</a></p>
                <p class="u-align-center u-text u-text-palette-1-base u-text-12">​​<a href="/es/Política-de-Assédio-Moral.html" data-page-id="277809403" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-block-control u-none u-btn-8" title="POLÍTICA DE ACOSO MORAL Y SEXUAL" data-current-state="default" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;},&quot;hover&quot;:{}}" data-block="1856" style="transition-duration: 0.5s; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">POLÍTICA DE ACOSO MORAL Y SEXUAL</a></p>
              </div>
            </div>
            <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-12 u-size-30-md u-layout-cell-3">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-valign-top-xl u-valign-top-xxl u-container-layout-3"><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-5"><!--block-->
                  <div class="u-block u-indent-0">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-13"><!--block_header_content-->
                ​<a href="/es/Política-de-Dados.html" data-page-id="5739878" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-9" title="POLÍTICA DE PRIVACIDAD DE DATOS" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1861" style="transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">​POLÍTICA DE PRIVACIDAD DE DATOS</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-6"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-15"><!--block_header_content-->
                ​<a href="/es/Política-Anticorrupção.html" data-page-id="47497839" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-10" title="POLÍTICA ANTICORRUPCIÓN" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1866" style="text-transform: uppercase; transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">​POLÍTICA ANTICORRUPCIÓN</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-7"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-17"><!--block_header_content-->
                ​<a href="/es/Política-Anticorrupção.html" data-page-id="47497839" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-10" title="POLÍTICA ANTICORRUPCIÓN" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1866" style="text-transform: uppercase; transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">​POLÍTICA ANTICORRUPCIÓN</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-8"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-19"><!--block_header_content-->
                ​<a href="/es/Política-Anticorrupção.html" data-page-id="47497839" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-block-control u-text-palette-1-base u-none u-btn-10" title="POLÍTICA ANTICORRUPCIÓN" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" data-block="1866" style="text-transform: uppercase; transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px">​POLÍTICA ANTICORRUPCIÓN</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
              </div>
            </div>
            <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-12 u-size-30-md u-layout-cell-4">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-4">
                <div class="u-align-center u-shortcode u-shortcode-1">
                  <center>
                    <a href="http://discovery.ariba.com/profile/AN11059876701">
                      <img alt="Exibir perfil do(a) Support Solo Sondagens LTDA no Ariba Discovery" border="0" src="https://service.ariba.com/an/p/Ariba/pt_BR/badge_180x55.jpg">
                    </a>
                  </center>
                </div>
                <div class="u-shortcode u-shortcode-2">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                  <a href="https://api.whatsapp.com/send?phone=5562991906100&amp;text=Oi,+estou+no+site+de+voc%C3%AAs+e+gostaria+de+mais+informa%C3%A7%C3%B5es." style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;" target="_blank"><i style="margin-top:16px" class="fa fa-whatsapp"></i>
                  </a>
                </div><!--position-->
                <div data-position="" class="u-position u-position-9"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"></div>
                  </div><!--/block-->
                </div><!--/position-->
              </div>
            </div>
            <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-12 u-size-60-md u-layout-cell-5">
              <div class="u-container-layout u-valign-middle-xl u-valign-top-lg u-valign-top-sm u-container-layout-5">
                <a href="#" class="u-align-center u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
                  <img src="{{ asset('images/9.png') }}" class="u-logo-image u-logo-image-1">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div><p class="u-align-center u-text u-text-21">​DERECHOS DE AUTOR 2015 - 2026 SUᕈᕈORΓ SOLO E SOṈDΔGEṈS. TODOS LOS DERECHOS RESERVADOS</p><div class="u-social-icons u-social-icons-1">
        <a class="u-social-url" target="_blank" data-type="LinkedIn" title="LinkedIn" href="https://www.linkedin.com/in/support-solo-sondagens-688ba8216/"><span class="u-icon u-social-icon u-social-linkedin u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-8d3b"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-8d3b"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/support_solo_sondagens/"><span class="u-icon u-social-icon u-social-instagram u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-af8a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-af8a"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
        </a>
        <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href="https://www.youtube.com/channel/UCHSbQ4322n97YDRxemGcWRw"><span class="u-icon u-social-icon u-social-youtube u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-237e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-237e"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
        </a>
        <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-0094"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0094"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
        </a>
        <a class="u-social-url" target="_blank" data-type="Email" title="Email" href="mailto:contato@supportsondagens.com.br?subject=Bot%C3%A3o%20Rodap%C3%A9"><span class="u-icon u-social-email u-social-icon u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-21fa"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-21fa"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path id="path3864" fill="#FFFFFF" d="M27.2,28h57.6c4,0,7.2,3.2,7.2,7.2l0,0v42.7c0,3.9-3.2,7.2-7.2,7.2l0,0H27.2
	c-4,0-7.2-3.2-7.2-7.2V35.2C20,31.1,23.2,28,27.2,28 M56,52.9l28.8-17.8H27.2L56,52.9 M27.2,77.7h57.6V43.5L56,61.3L27.2,43.5V77.7z
	"></path></svg></span>
        </a>
        <a class="u-social-url" target="_blank" data-type="Whatsapp" title="Whatsapp" href="https://wa.me/5562991906100"><span class="u-icon u-social-icon u-social-whatsapp u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-2000"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2000"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,28.3C77.2,21.7,68.4,18,59,18c-19.3,0-35.1,15.7-35.1,35.1c0,6.2,1.6,12.2,4.7,17.5l-5,18.2L42.2,84
	c5.1,2.8,10.9,4.3,16.8,4.3h0l0,0c19.3,0,35.1-15.7,35.1-35.1C94.1,43.8,90.5,35,83.8,28.3 M59,82.3L59,82.3
	c-5.2,0-10.4-1.4-14.9-4.1l-1.1-0.6l-11,2.9L35,69.8l-0.7-1.1c-2.9-4.6-4.5-10-4.5-15.5C29.8,37,42.9,24,59,24
	c7.8,0,15.1,3,20.6,8.6c5.5,5.5,8.5,12.8,8.5,20.6C88.2,69.2,75.1,82.3,59,82.3 M75,60.5c-0.9-0.4-5.2-2.6-6-2.9
	c-0.8-0.3-1.4-0.4-2,0.4s-2.3,2.9-2.8,3.4c-0.5,0.6-1,0.7-1.9,0.2c-0.9-0.4-3.7-1.4-7.1-4.4c-2.6-2.3-4.4-5.2-4.9-6.1
	c-0.5-0.9-0.1-1.4,0.4-1.8c0.4-0.4,0.9-1,1.3-1.5c0.4-0.5,0.6-0.9,0.9-1.5c0.3-0.6,0.1-1.1-0.1-1.5c-0.2-0.4-2-4.8-2.7-6.5
	c-0.7-1.7-1.4-1.5-2-1.5c-0.5,0-1.1,0-1.7,0c-0.6,0-1.5,0.2-2.3,1.1c-0.8,0.9-3.1,3-3.1,7.3c0,4.3,3.1,8.5,3.6,9.1
	c0.4,0.6,6.2,9.4,15,13.2c2.1,0.9,3.7,1.4,5,1.8c2.1,0.7,4,0.6,5.5,0.3c1.7-0.3,5.2-2.1,5.9-4.2c0.7-2,0.7-3.8,0.5-4.2
	C76.5,61.1,75.9,60.9,75,60.5"></path></svg></span>
        </a>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80"></section><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 140px; bottom: 120px; padding: 15px;" class="u-back-to-top u-icon u-icon-rounded u-opacity u-opacity-90 u-palette-1-base" data-href="#"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg><svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg></span>
  

@endsection

@push('scripts')
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "/images/9.png",
		"sameAs": [
				"https://www.linkedin.com/in/support-solo-sondagens-688ba8216/",
				"https://www.instagram.com/support_solo_sondagens/",
				"https://www.youtube.com/channel/UCHSbQ4322n97YDRxemGcWRw",
				"mailto:contato@supportsondagens.com.br?subject=Bot%C3%A3o%20Rodap%C3%A9",
				"https://wa.me/5562991906100"
		]
}</script>
@endpush
