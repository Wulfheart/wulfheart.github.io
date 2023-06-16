<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">
        <style>
            body { 
                font-family: monospace;
                line-height: 1.4;
                font-size: 16px;
                padding: 0 10px;
                margin: 50px auto;
                max-width: 650px;
            }

            main
            {
            max-width:42em;margin:15 auto;

            }
        </style>

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

    </head>

    <body>


        <main role="main">
            @yield('body')
        </main>

        @stack('scripts')
    </body>
</html>
