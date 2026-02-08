<!DOCTYPE html>
<html lang="@yield('lang', 'pt')">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SupportSite')</title>
    
    @stack('meta')
    @stack('styles')
</head>
<body class="@yield('body-class')">
    @yield('content')
    
    @stack('scripts')
</body>
</html>
