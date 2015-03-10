<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Browser Details</title>
        <link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/icons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/icons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/icons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/icons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/icons/android-chrome-manifest.json">
        <link rel="shortcut icon" href="/icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-TileImage" content="icons/mstile-144x144.png">
        <meta name="msapplication-config" content="/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <link rel="fluid-icon" href="/icons/fluidicon.icns" title="Time Sheet" />
        <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic|Inconsolata:400,700|Open+Sans:400italic,700italic,700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/styles.css" />
    </head>
    <body>
        <header class="navigation" role="banner">
            <div class="navigation-wrapper">
                <span class="logo">
                    <img src="/assets/navbar.svg" class="avatar">
                </span>
            </div>
        </header>
        @if($message)
            <div class="message" id="message">{{ $message }}</div>
        @endif
        <div class="container">
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
        <script src="/js/scripts.min.js"></script>
    </body>
</html>


