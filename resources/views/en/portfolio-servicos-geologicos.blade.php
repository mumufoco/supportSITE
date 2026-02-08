@extends('layouts.nicepage')

@section('lang', 'en')
@section('title', 'Portfólio Serviços Geológicos')
@section('body-class', 'u-body u-clearfix u-xl-mode')

@push('meta')
    <meta name="keywords" content="SUPPORT SOLO SONDAGENS, LABORATORY:, GEOLOGY AND ENGINEERING:, PROJECT DEVELOPMENT:">
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
            <ul role="menubar" class="u-nav u-spacing-30 u-unstyled u-nav-1"><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" style="padding: 10px 0px;">SERVICES</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2" aria-label="SERVIÇOS menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Serviços-Geológico.html">GEOLOGICAL SERVICES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Serviços-Laboratorial.html">LABORATORY SERVICES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Sondagem-Sondas-Especiais.html">SPECIAL DRILLING</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Serviços-Elaboração-Projetos.html">SERVICES FOR DEVELOPING COMPLEMENTARIES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Serviços-Fundação-Profunda.html">DEEP FOUNDATION SERVICES</a>
</li></ul>
</div>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Serviços-Geológico.html" style="padding: 10px 0px;">PORTFOLIOS</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3" aria-label="PORTFÓLIOS menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Portfólio-Serviços-Geológicos.html">SOIL PORTFOLIO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Portfólio-Serviços-Mineração.html">MINING PORTFOLIO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Portfólio-Serviços-Transmissão.html">TRANSMISSION PORTFOLIO</a>
</li></ul>
</div>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://app.supportsondagens.com.br/index.php/signin" target="_blank" style="padding: 10px 0px;">CLIENT AREA</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="/en/Formulario-de-Denúncia.html" style="padding: 10px 0px;">REPORT</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" style="padding: 10px 0px;">COLLABORATORS</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4" aria-label="COLABORADORES menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.spt.supportsondagens.com.br" target="_blank">DRILLING SYSTEM</a>
</li><li role="none" class="u-nav-item"><a tabindex="-1" role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.sev.supportsondagens.com.br" target="_blank">SONDAGEM ELÉTRICA</a>
</li><li role="none" class="u-nav-item"><a tabindex="-1" role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.sesmt.supportsondagens.com.br" target="_blank">CONTROLE MÉDICINA DO TRABALHO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.ponto.supportsondagens.com.br" target="_blank">ELECTRONIC POINT</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link u-text-active-palette-2-base u-text-hover-palette-1-base u-text-palette-2-base" href="https://www.webmail.supportsondagens.com.br" target="_blank">WEBMAIL</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse" id="8107" role="region" aria-label="Menu panel">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close" tabindex="-1" aria-label="Close menu"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-5" role="menubar"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link">SERVICES</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6" aria-label="SERVIÇOS menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Serviços-Geológico.html">GEOLOGICAL SERVICES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Serviços-Laboratorial.html">LABORATORY SERVICES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Sondagem-Sondas-Especiais.html">SPECIAL DRILLING</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Serviços-Elaboração-Projetos.html">SERVICES FOR DEVELOPING COMPLEMENTARIES</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Serviços-Fundação-Profunda.html">DEEP FOUNDATION SERVICES</a>
</li></ul>
</div>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Serviços-Geológico.html">PORTFOLIOS</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-7" aria-label="PORTFÓLIOS menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Portfólio-Serviços-Geológicos.html">SOIL PORTFOLIO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Portfólio-Serviços-Mineração.html">MINING PORTFOLIO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Portfólio-Serviços-Transmissão.html">TRANSMISSION PORTFOLIO</a>
</li></ul>
</div>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="https://app.supportsondagens.com.br/index.php/signin" target="_blank">CLIENT AREA</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="/en/Formulario-de-Denúncia.html">REPORT</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link">COLLABORATORS</a><div class="u-nav-popup"><ul role="menu" class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-8" aria-label="COLABORADORES menu"><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="https://www.spt.supportsondagens.com.br" target="_blank">DRILLING SYSTEM</a>
</li><li role="none" class="u-nav-item"><a tabindex="-1" role="menuitem" class="u-button-style u-nav-link" href="https://www.sev.supportsondagens.com.br" target="_blank">SONDAGEM ELÉTRICA</a>
</li><li role="none" class="u-nav-item"><a tabindex="-1" role="menuitem" class="u-button-style u-nav-link" href="https://www.sesmt.supportsondagens.com.br" target="_blank">CONTROLE MÉDICINA DO TRABALHO</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="https://www.ponto.supportsondagens.com.br" target="_blank">ELECTRONIC POINT</a>
</li><li role="none" class="u-nav-item"><a role="menuitem" class="u-button-style u-nav-link" href="https://www.webmail.supportsondagens.com.br" target="_blank">WEBMAIL</a>
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
          <a class="u-language-top-url u-language-url u-text-black" data-lang-text="Português" href="{{ route('en.portfolio-servicos-geologicos') }}" data-language="pt" style="background-image: none; text-transform: uppercase; font-size: 0.75rem;"><span class="u-file-icon u-icon u-language-icon u-language-pt u-icon-1"><img src="{{ asset('images/icone18.png') }}" alt=""></span>
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
                <h1 class="u-text u-text-default u-text-palette-1-base u-text-1">SUPPORT SOLO SONDAGENS</h1>
                <h4 class="u-text u-text-2">SOIL ENGINEERING, ANALYSIS, PROJECT DEVELOPMENT AND SOIL LABORATORY</h4>
                <h5 class="u-text u-text-palette-1-base u-text-3">https://www.supportsondagens.com.br</h5>
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
                <h3 class="u-text u-text-1">ABOUT THE COMPANY</h3>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-43 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-2">Support Solo Sondagens is a company specialized in geotechnical and geological drilling services, founded in 2015 in the field of engineering. With a strategic vision, the company redirected its focus to the area of geology in 2018, aligning itself with market demands and leveraging its experience and expertise to meet the specific needs of this sector.<br><br><span style="font-weight: 700;">History and Evolution:</span> Since its founding in 2015, Support Solo Sondagens has established itself as a company committed to providing reliable and accurate solutions in the field of engineering. Its geotechnical drilling services were initially focused on supporting construction and civil engineering projects. With a customer-centric approach and a highly qualified team, the company gained a solid reputation for the quality of its operations.<br><br>However, in 2018, Support Solo Sondagens made a strategic decision to redirect its focus to geology. Recognizing the growing demand for high-quality geological services, especially from mining companies, the company adapted to market changes and began offering specialized solutions in this field.<br><br><span style="font-weight: 700;">Specialization in Geology:</span> With the change of focus to geology, Support Solo Sondagens expanded its operations to meet the needs of mining companies. Accurate geological drilling is essential for mineral exploration and the identification of valuable deposits. Through advanced drilling techniques, the company contributes to the precise evaluation of mineral resources and informed decision-making in the mining sector.<br><br><span style="font-weight: 700;">Portfolio and Clients:</span> Over the years, Support Solo Sondagens has built a diversified portfolio of successful projects and collaborations. Its expertise in geotechnical and geological drilling has attracted the attention of mining companies seeking reliable and accurate solutions for their operations. The company collaborates with mining companies, helping to identify and evaluate mineral reserves, assisting in investment decisions, and ensuring that their operations are carried out efficiently and sustainably.<br><br><span style="font-weight: 700;">Future:</span> With its success trajectory and adaptability to market changes, Support Solo Sondagens is well-positioned to continue growing as a reference in the area of geotechnical and geological drilling. Its specialization in geology, especially in the mining sector, significantly contributes to the success and sustainability of its clients' operations. The company remains committed to providing high-quality services, staying up-to-date with technical innovations, and maintaining its commitment to excellence in all aspects of its operations.</p>
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
                  <h1 class="u-align-right u-text u-text-1">LABORATORY</h1>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-xl u-container-layout-2">
                  <ul class="u-text u-text-2"><li><div class="hidden u-list-icon u-block-86d6-10" style=""></div> Plasticity Limit (LP)</li><li><div class="hidden u-list-icon u-block-86d6-11" style=""></div> Liquidity Limit (LL)</li><li><div class="hidden u-list-icon u-block-86d6-12" style=""></div> Granulometry by Sieving (PEN)</li><li><div class="hidden u-list-icon u-block-86d6-13" style=""></div> Specific Gravity of Grains (MESP)</li><li><div class="hidden u-list-icon u-block-86d6-14" style=""></div> Granulometry by Sedimentation (SED)</li><li><div class="hidden u-list-icon u-block-86d6-15" style=""></div> MCT Classification - Tablet (MCT.P)</li><li><div class="hidden u-list-icon u-block-86d6-16" style=""></div> MCT Classification (MCT.C)</li><li><div class="hidden u-list-icon u-block-86d6-17" style=""></div> Compaction Test (COMP)</li><li><div class="hidden u-list-icon u-block-86d6-18" style=""></div> CBR and Expansion Test (CBR)</li><li><div class="hidden u-list-icon u-block-86d6-19" style=""></div> Direct Shear (CD);
Triaxial Tests (TRI)</li><li><div class="hidden u-list-icon u-block-86d6-20" style=""></div> Compaction (COMP);
Dosage Study (DOSAG)</li></ul>
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
                  <h1 class="u-align-right u-text u-text-palette-1-base u-text-1">GEOLOGY AND ENGINEERING</h1>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <ul class="u-text u-text-palette-1-base u-text-2"><li><div class="hidden u-list-icon u-block-d7a4-10" style=""></div> Percussion Drilling (SP)</li><li><div class="hidden u-list-icon u-block-d7a4-12" style=""></div> Auger Drilling (ST)</li><li><div class="hidden u-list-icon u-block-d7a4-14" style=""></div> Mixed Drilling (SM)</li><li><div class="hidden u-list-icon u-block-d7a4-16" style=""></div> Rotary Drilling (SR)</li><li><div class="hidden u-list-icon u-block-d7a4-18" style=""></div> Drilling on Floating (SF)</li><li><div class="hidden u-list-icon u-block-d7a4-20" style=""></div> Pavement Inspection Well (PI)</li><li><div class="hidden u-list-icon u-block-d7a4-22" style=""></div> Pavement Broaching (BQ)</li><li><div class="hidden u-list-icon u-block-d7a4-24" style=""></div> Vane Test or Blade Test (VT)</li><li><div class="hidden u-list-icon u-block-d7a4-26" style=""></div> Undisturbed Sample type Shelby (SH)</li><li><div class="hidden u-list-icon u-block-d7a4-28" style=""></div> Undisturbed Sample type Denison (DN)</li><li><div class="hidden u-list-icon u-block-d7a4-30" style=""></div> Undisturbed Sample type Block (BL)</li><li><div class="hidden u-list-icon u-block-d7a4-32" style=""></div> Piezometer Installation (PZ)</li><li><div class="hidden u-list-icon u-block-d7a4-34" style=""></div> Inclinometer Installation (INCL)</li><li><div class="hidden u-list-icon u-block-d7a4-36" style=""></div> Monitoring Well (PM)</li></ul>
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
                  <h1 class="u-align-right u-text u-text-1">PROJECT DEVELOPMENT</h1>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-xl u-container-layout-2">
                  <ul class="u-text u-text-2"><li><div class="hidden u-list-icon u-block-e0e6-10" style=""></div> Development of Structural Projects in Reinforced Concrete</li><li><div class="hidden u-list-icon u-block-e0e6-11" style=""></div> Development of Structural Projects in Prestressed Concrete</li><li><div class="hidden u-list-icon u-block-e0e6-12" style=""></div> Development of Low-Voltage Electrical Projects</li><li><div class="hidden u-list-icon u-block-e0e6-13" style=""></div> Development of Cold Water Hydraulic Projects</li><li><div class="hidden u-list-icon u-block-e0e6-14" style=""></div> Development of Hot Water Hydraulic Projects</li><li style=""><div class="hidden u-list-icon u-block-e0e6-15" style=""></div> Development of Rainwater Hydraulic Projects</li><li><div class="hidden u-list-icon u-block-e0e6-16" style=""></div> Development of Swimming Pool Hydraulic Projects</li><li><div class="hidden u-list-icon u-block-e0e6-17" style=""></div> Development of Sewerage Hydraulic Projects</li><li><div class="hidden u-list-icon u-block-e0e6-18" style=""></div> Development of Air Conditioning Climatization Projects</li><li><div class="hidden u-list-icon u-block-e0e6-19" style=""></div> Development of Fire Fighting Projects</li><li><div class="hidden u-list-icon u-block-e0e6-20" style=""></div> Development of SPTA Projects</li><li><div class="hidden u-list-icon u-block-e0e6-21" style=""></div> Development of Data Projects (Internet Network)</li><li><div class="hidden u-list-icon u-block-e0e6-22" style=""></div> Development of Data Projects (Telephone Network)</li><li><div class="hidden u-list-icon u-block-e0e6-24" style=""></div> Development of Data Projects (Closed TV Circuit)</li><li><div class="hidden u-list-icon u-block-e0e6-25" style=""></div> Development of Deep Foundation Projects</li><li><div class="hidden u-list-icon u-block-e0e6-27" style=""></div> Development of Surface Foundation Projects</li><li><div class="hidden u-list-icon u-block-e0e6-29" style=""></div> Development of Wooden Form Projects</li><li><div class="hidden u-list-icon u-block-e0e6-30" style=""></div> Development of Metal Projects</li><li><div class="hidden u-list-icon u-block-e0e6-32" style=""></div> Conceptual Urbanization</li></ul>
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
                <p class="u-text u-text-1">Automated percussion drilling, also known as automated Standard Penetration Test (SPT), is a widely used geotechnical investigation method to obtain information about the properties of the soil and subsurface. This method is especially effective in determining the soil resistance and bearing capacity for engineering, construction, and geotechnical projects.<br><br><span style="font-weight: 700;">Automated Percussion Drilling Process:</span><br><br><span style="font-weight: 700;">Site Preparation:</span> Before starting the drilling, the area is prepared for the installation of the equipment. The site is cleaned, leveled, and marked to ensure precise data collection.<br>Equipment Installation: A drilling tower is assembled on the site, and an auger is introduced into the soil to create an initial hole. Then, a sampling tube is inserted into the soil to maintain the stability of the hole.<br>Drilling Procedure: The drilling process involves the use of an automated hammer that applies repeated impacts to a drilling rod, which in turn penetrates the soil. With each impact, the rod is sunk into the soil by a standardized distance (usually 30 centimeters).<br>Data Registration: Each impact is recorded and counted. The penetration obtained after 10, 20, and 30 impacts is registered. The number of blows required to sink the rod 30 centimeters is called the "Number of Blows" (N) or "Number of Blows per 30 centimeters".<br>Sample Collection: After a certain number of blows (usually 50), the sampling is interrupted, and a soil sample is collected from the inside of the tube. These samples are important for analyzing the soil characteristics.<br>Analysis and Interpretation: The obtained data are interpreted to determine the soil resistance, density, and other geotechnical properties. This information is essential for decision-making in construction and engineering projects.<br><br><span style="font-weight: 700;">Advantages of Automated Percussion Drilling:</span><br><br><span style="font-weight: 700;">Efficiency:</span> Automated drilling is fast and efficient, allowing for continuous data collection at different depths.<br><span style="font-weight: 700;">Standardization:</span> The method follows standardized procedures, enabling consistent comparisons between different locations.<br><span style="font-weight: 700;">Soil Resistance:</span> The soil resistance can be estimated based on the number of blows required to sink the rod.<br><span style="font-weight: 700;">Representative Sampling:</span> The collected soil samples provide information about the soil composition at different depths.<br><span style="font-weight: 700;">Low Environmental Impact:</span> The methodology does not cause significant soil disturbance and has a low environmental impact.<br>Automated percussion drilling is an essential technique for evaluating soil resistance and geotechnical characteristics in a reliable and efficient manner. It is widely used in geotechnical studies, foundation planning, construction, and civil engineering projects, providing crucial information to ensure the safety and success of various projects.</p>
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
                <p class="u-text u-text-1">Rotary drilling is an advanced geotechnical method used to obtain detailed information about the soil and rock layers present below the surface. This technique is especially suitable for projects that require in-depth analysis of geological, hydrogeological, and mechanical characteristics of the subsurface. Rotary drilling is widely applied in mining projects, natural resource exploration, environmental investigations, and complex geotechnical studies.<br><br><span style="font-weight: 700;">Rotary Drilling Process:</span><br><br><span style="font-weight: 700;">Site Preparation:</span> The site is prepared for drilling, ensuring safe and adequate access for the installation of equipment.<br><span style="font-weight: 700;">Rotary Equipment:</span> Rotary drilling involves the use of rotary equipment, known as a rotary drill, which is capable of continuously drilling through soil and rock.<br><span style="font-weight: 700;">Continuous Drilling:</span> Unlike percussion drilling, where repeated impacts occur, rotary drilling involves the rotation of a specialized drill bit in the soil or rock. The drill bit is composed of industrial diamonds or other resistant materials to drill through different geological formations.<br><span style="font-weight: 700;">Core Recovery:</span> As the drill bit advances, it creates a cylinder of soil or rock called a core. These cores are carefully removed from the hole and preserved for later analysis.<br><span style="font-weight: 700;">Data Acquisition:</span> During drilling, various parameters are recorded, such as depth, core appearance, advancement rate, rotation pressure, and others.<br><span style="font-weight: 700;">Core Analysis:</span> The recovered cores are analyzed in a laboratory to determine the geological composition, layer structure, soil or rock resistance, presence of groundwater, and other relevant characteristics.<br><br><span style="font-weight: 700;">Advantages of Rotary Drilling:</span><br><br><span style="font-weight: 700;">Geological Precision:</span> Rotary drilling provides detailed information about geological formations, allowing for precise identification of soil and rock layers.<br><span style="font-weight: 700;">High-Quality Cores:</span> The recovered cores are preserved intact, facilitating laboratory analysis and geotechnical interpretation.<br><span style="font-weight: 700;">Significant Depth:</span> The technique allows for drilling at considerable depths, suitable for projects involving mineral exploration or groundwater investigations.<br><span style="font-weight: 700;">Complex Analysis:</span> Rotary drilling is essential for projects that require detailed information about the geological structure, resistance, and permeability of the subsurface.<br><span style="font-weight: 700;">Versatility:</span> It can be adapted to various geological and hydrogeological conditions, making it suitable for a variety of projects.<br><br>Rotary drilling is a powerful tool for understanding subsurface characteristics and aiding decision-making in projects involving civil engineering, mining, natural resource exploration, and complex environmental studies. Through this technique, engineers, geologists, and specialists can obtain a detailed view of subsurface layers, contributing to safer and more successful projects.</p>
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
        <p class="u-text u-text-default u-text-1">A drilling survey container is an innovative and efficient solution for carrying out geotechnical surveys and soil sampling in various locations. This approach involves creating a controlled and safe environment within a modified container, where drilling activities can be carried out with precision, efficiency, and consideration of environmental conditions.<br><br><span style="font-weight: 700;">Characteristics of the Drilling Survey Container:</span><br><br><span style="font-weight: 700;">Mobility:</span>&nbsp;The main advantage of the drilling survey container is mobility. The container can be transported to different locations, allowing for drilling in remote or hard-to-reach areas.<br><span style="font-weight: 700;">Controlled Environment:</span>&nbsp;The container is equipped with temperature, lighting, and ventilation control systems, creating a comfortable working environment for drilling technicians.<br><span style="font-weight: 700;">Specialized Equipment:</span>&nbsp;The interior of the container is equipped with all the necessary tools and equipment for geotechnical drilling, such as probes, rods, drilling equipment, and others.<br><span style="font-weight: 700;">Safety and Cleanliness:</span>&nbsp;The drilling survey container helps maintain a safe and clean working environment, minimizing the risk of soil contamination during operations.<br><span style="font-weight: 700;">Weather Protection:</span>&nbsp;Regardless of weather conditions, the drilling survey container allows drilling activities to continue without interruption.<br>Sampling Control:&nbsp;Soil and rock sampling is carried out in a precise and controlled manner, minimizing sample loss or contamination.<br><br><span style="font-weight: 700;">Advantages of the Drilling Survey Container:</span><br><br><span style="font-weight: 700;">Efficiency:</span>&nbsp;The pre-configuration of the container with all necessary equipment reduces the time required for site preparation.<br>Sample Quality:&nbsp;The controlled environment minimizes external interference, resulting in more representative soil and rock samples.<br><span style="font-weight: 700;">Mobility:</span>&nbsp;The ability to transport the drilling survey container to different locations facilitates exploration in distant or inaccessible areas.<br>Resource Economy:&nbsp;The drilling survey container reduces costs associated with temporary equipment installation at each drilling site.<br><span style="font-weight: 700;">Versatility:</span>&nbsp;It can be adapted for different types of geotechnical drilling and to meet various project needs.<br>The drilling survey container is an innovative solution that optimizes geotechnical drilling, providing an efficient, controlled, and safe working environment. This approach is especially beneficial for projects that require mobility, speed, and sample quality.</p>
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
        <p class="u-text u-text-default u-text-1">Support Solo Sondagens stands out in the geotechnical services market through a differentiated approach, commitment to quality, and constant search for technological innovations. These differentials are fundamental to ensuring that the company is always at the forefront of service provision and can meet the increasingly complex needs of clients and the market.<br><br><span style="font-weight: 700;">Commitment to Quality:</span><br><br>Support Solo Sondagens maintains an unwavering commitment to quality in all aspects of its operations. This is reflected in all stages, from site preparation to data collection and analysis. The pursuit of rigorous quality standards ensures that the results provided are reliable and accurate, providing fundamental information for decision-making in engineering, construction, and geotechnical projects.<br><br><span style="font-weight: 700;">Qualified Team:</span><br><br>The company values and invests in a highly qualified team of geotechnical engineers, geologists, and field technicians. These professionals possess solid technical knowledge and practical experience, guaranteeing the efficient and precise execution of drilling activities. The team's expertise allows for the adequate interpretation of results and guidance for clients in understanding geotechnical information.<br><br><span style="font-weight: 700;">Advanced Technology:</span><br><br>Support Solo Sondagens recognizes the importance of technological innovations in the geotechnical sector. The company is constantly updated with the latest drilling technologies and methodologies, aiming to improve efficiency, quality, and safety of operations. The adoption of state-of-the-art equipment, advanced software, and innovative approaches enables the company to offer more precise and effective solutions to clients.<br><br><span style="font-weight: 700;">Customized Solutions:</span><br><br>Each project is unique, and Support Solo Sondagens understands the importance of providing customized solutions to meet specific client needs. The company works closely with clients to understand their demands and objectives, adapting its approaches and methodologies to ensure that results meet the unique requirements of each project.<br><br><span style="font-weight: 700;">Commitment to Innovation:</span><br><br>Support Solo Sondagens believes that innovation is essential to maintaining relevance in a constantly evolving market. The company is constantly exploring new technologies, methodologies, and approaches to improve its processes and services. This includes evaluating new equipment, incorporating more advanced analysis techniques, and exploring more efficient ways to collect and interpret geotechnical data.<br>In summary, Support Solo Sondagens differentiates itself in the market by combining its relentless pursuit of quality, technical expertise, advanced technology, and commitment to innovation. These pillars enable the company to be at the forefront of geotechnical service provision, meeting client needs effectively and always exceeding expectations.</p>
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
                ​<a href="/en/Missão-Valores-e-Objetivos.html" data-page-id="116134660" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-1 u-block-control" title="MISSION VALUES AND OBJECTIVES" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1831">MISSION, VALUES AND OBJECTIVES</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-2"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-3"><!--block_header_content-->
                ​<a href="/en/Código-de-Ética-e-Conduta.html" data-page-id="397702623" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-2 u-block-control" title="CODE OF ETHICS AND CONDUCT" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1836">​CODE OF ETHICS AND CONDUCT</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
                <p class="u-align-center u-text u-text-palette-1-base u-text-5">​​<a href="/en/Plano-de-Segurança-do-Trabalho.html" data-page-id="267910123" class="u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-3 u-block-control" title="WORK SAFETY PLAN" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1839">WORK SAFETY PLAN</a></p>
                <p class="u-align-center u-text u-text-palette-1-base u-text-6">​​<a href="https://site.supportsondagens.com.br/plano-de-seguranca-no-trabalho/" class="u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-4 u-block-control" title="INTRANET" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1841">​INTRANET</a></p>
              </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-12 u-size-30-md u-layout-cell-2" title="">
              <div class="u-container-layout u-valign-middle u-container-layout-2"><!--position-->
                <div data-position="" class="u-align-center u-expanded-width u-position u-position-3"><!--block-->
                  <div class="u-block u-indent-0">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-7"><!--block_header_content-->
                ​<a href="/en/Política-de-Gestão-Ambiental.html" data-page-id="292807556" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-5 u-block-control" title="ENVIRONMENTAL MANAGEMENT POLICY" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1846">​ENVIRONMENTAL MANAGEMENT POLICY</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-center u-expanded-width u-position u-position-4"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-9"><!--block_header_content-->
                ​<a href="/en/Política-de-Anti-Assedio.html" data-page-id="1863319022" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-6 u-block-control" title="DISCRIMINATION POLICY" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1851">DISCRIMINATION POLICY</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
                <p class="u-align-center u-text u-text-palette-1-base u-text-11">​​<a href="/en/Política-de-Qualidade.html" data-page-id="159087844" class="u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-none u-btn-7 u-block-control" title="Quality Policy" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="transition-duration: 0.5s; text-transform: uppercase; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1854">​QUALITY POLICY</a></p>
                <p class="u-align-center u-text u-text-palette-1-base u-text-12">​​<a href="/en/Política-de-Assédio-Moral.html" data-page-id="277809403" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-8 u-block-control" title="Moral and Sexual Harassment Policy" data-current-state="default" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;},&quot;hover&quot;:{}}" style="transition-duration: 0.5s; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1856">MORAL AND SEXUAL HARASSMENT POLICY</a></p>
              </div>
            </div>
            <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-12 u-size-30-md u-layout-cell-3">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-valign-top-xl u-valign-top-xxl u-container-layout-3"><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-5"><!--block-->
                  <div class="u-block u-indent-0">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-13"><!--block_header_content-->
                ​<a href="/en/Política-de-Dados.html" data-page-id="5739878" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-9 u-block-control" title="Data Privacy Policy" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1861">​DATA PRIVACY POLICY</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-6"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-15"><!--block_header_content-->
                ​<a href="/en/Política-Anticorrupção.html" data-page-id="47497839" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-10 u-block-control" title="Anti-Corruption Policy" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="text-transform: uppercase; transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1866">​ANTI-CORRUPTION POLICY</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-7"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-17"><!--block_header_content-->
                ​<a href="/en/Política-Anticorrupção.html" data-page-id="47497839" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-10 u-block-control" title="Anti-Corruption Policy" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="text-transform: uppercase; transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1866">​ANTI-CORRUPTION POLICY</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
                      <div class="u-block-content u-text"><!--block_content_content--><!--/block_content_content--></div><!--/block_content-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-align-left u-expanded-width u-position u-position-8"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center u-block-header u-text u-text-19"><!--block_header_content-->
                ​<a href="/en/Política-Anticorrupção.html" data-page-id="47497839" class="awb-custom-text-color awb-custom-text-hover-color u-active-none u-border-0 u-btn u-button-link u-button-style u-hover-feature u-hover-none u-text-active-black u-text-hover-black u-text-palette-1-base u-none u-btn-10 u-block-control" title="Anti-Corruption Policy" data-css="{&quot;default&quot;:{&quot;color&quot;:&quot;none&quot;,&quot;background-image&quot;:&quot;&quot;,&quot;gradient&quot;:&quot;&quot;,&quot;transform&quot;:&quot;rotate(0deg) scale(1) translateX(0px) translateY(0px)&quot;,&quot;text-color&quot;:&quot;palette-1-base&quot;},&quot;hover&quot;:{&quot;transform&quot;:&quot;scale(1.1) translateX(0px) translateY(0px)&quot;,&quot;shadow&quot;:&quot;&quot;,&quot;border-radius&quot;:&quot;&quot;,&quot;border&quot;:0,&quot;border-color&quot;:&quot;&quot;,&quot;text-color&quot;:&quot;&quot;,&quot;text-shadow&quot;:&quot;&quot;}}" data-current-state="default" data-hover-preset-name="scale" style="text-transform: uppercase; transition-duration: 0.5s; transform: rotate(0deg) scale(1) translateX(0px) translateY(0px); padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="1866">​ANTI-CORRUPTION POLICY</a><!--/block_header_content--></h5><!--/block_header--><!--block_content-->
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
      </div><p class="u-align-center u-text u-text-21">​ Copyright 2015 - 2026 SURO SOLO AND SONDAGE. All rights reserved</p><div class="u-social-icons u-social-icons-1">
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
