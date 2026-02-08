<!DOCTYPE html>
<html style="font-size: 16px;" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="@yield('meta_keywords', 'SUPPORT SOLO SONDAGENS')">
    <meta name="description" content="@yield('meta_description', '')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'HOME - Support Solo Sondagens')</title>
    
    <link rel="stylesheet" href="{{ asset('nicepage.css') }}" media="screen">
    @stack('styles')
    
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css2?display=swap&family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "{{ asset('images/9.png') }}",
		"sameAs": [
				"https://www.linkedin.com/in/support-solo-sondagens-688ba8216/",
				"https://www.instagram.com/support_solo_sondagens/",
				"https://www.youtube.com/channel/UCHSbQ4322n97YDRxemGcWRw",
				"mailto:contato@supportsondagens.com.br?subject=Bot%C3%A3o%20Rodap%C3%A9",
				"https://wa.me/5562991906100"
		]
}</script>
    
    <meta name="theme-color" content="#a1c59a">
    <meta property="og:title" content="@yield('og_title', 'HOME - Support Solo Sondagens')">
    <meta property="og:description" content="@yield('og_description', '')">
    <meta property="og:type" content="website">
    <meta name="referrer" content="origin">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
<body data-home-page="HOME---Support-Solo-Sondagens.html" data-home-page-title="HOME - Support Solo Sondagens" data-path-to-root="/" data-include-products="false" class="u-body u-clearfix u-overlap u-overlap-contrast u-overlap-transparent u-white u-xxl-mode" data-lang="{{ app()->getLocale() }}">
    
    @include('components.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.footer')
    
    <script class="u-script" type="text/javascript" src="{{ asset('jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('nicepage.js') }}" defer=""></script>
    @stack('scripts')
</body>
</html>
