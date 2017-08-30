<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'kenneth pilgrim') }}</title>
    
    <?php /*
            BASIC SEO
                     */ ?>
    <meta name="referrer" content="always" />
    <meta name="robots" content="all"/>
    <meta name="author" content=""/>
    <meta name="description" itemprop='description' content="{{$description}}"/>
    <meta name="keywords" content="{{$keywords}}"/>
    <link rel="canonical" href="{{$url}}/" />
    <meta name="geo.placename" content="{{$name}}" />
    <meta property='article:published_time' content='2017-08-29T12:30:11-02:00' />
    <meta property='article:section' content='{{$page}}' />
    <?php /*
            ICONS
                 */ ?>
    <link rel="icon" type="image/png" href="{{$icon}}">
    <link rel="apple-touch-icon" href="{{$icon}}">
    <meta name="msapplication-TileImage" content="{{$icon}}">
    <meta name="msapplication-TileColor" content="{{$themecolor}}">
    <?php /*
    <link rel="icon" type="image/png" sizes="16x16" href="${{$icon}}">
    <link rel="icon" type="image/png" sizes="32x32" href="${{$icon}}">
    <link rel="icon" type="image/png" sizes="96x96" href="${{$icon}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="57x57" href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="60x60" href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="72x72" href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="76x76" href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="114x114" href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="120x120" href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="144x144" href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="152x152" href="${{$icon}}">
    <link rel="apple-touch-icon" sizes="180x180" href="${{$icon}}">
    */?>
    <?php /*
            DUBLIN CORE
                       */ ?>
    <meta name="dcterms.Identifier" content="{{$url}}/" />
    <meta name="dcterms.Format" content="text/html" />
    <meta name="dcterms.Relation" content="{{$name}}" />
    <meta name="dcterms.Language" content="en" />
    <meta name="dcterms.Publisher" content="{{$name}}" />
    <meta name="dcterms.Type" content="text/html" />
    <meta name="dcterms.Coverage" content="{{$url}}/" />
    <meta name="dcterms.Rights" content="{{$copyright}}." />
    <meta name="dcterms.Title" content="{{$name}}" />
    <meta name="dcterms.Subject" content="{{$keywords}}" />
    <meta name="dcterms.Contributor" content="{{$name}}" />
    <meta name="dcterms.Date" content="2017-08-28" />
    <meta name="dcterms.Description" content="{{$description}}" />
    <?php /*
            FACEBOOK OPENGRAPH
                              */ ?>
    <meta property="fb:profile_id" content="kennethpilgrim.eu" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_us" />
    <meta property="og:url" content="{{$url}}/" />
    <meta property="og:title" content="{{$name}}" />
    <meta property="og:description" content="{{$description}}" />
    <meta property="og:image" content="{{$url}}{{$image}}" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="366" />
    <meta property="og:image:height" content="366" />
    <meta property="og:site_name" content="{{$name}}" />
    @foreach($sociallinkArray as $link)
        <meta property="og:see_also" content="{{$link->link}}"/>
    @endforeach
    <?php /*<meta property="og:see_also" content="https://www.linkedin.com/in/kennethpilgrim-eu"/>
    <meta property="og:see_also" content="https://plus.google.com/u/0/111340358723834568911"/>
    <meta property="og:see_also" content="https://www.facebook.com/kennethpilgrim.eu"/>
    <meta property="og:see_also" content="https://www.instagram.com/kennethpilgrim/"/>
    <meta property="og:see_also" content="https://www.pinterest.com/kenneth_pilgrim/"/>
    <meta property="og:see_also" content="https://twitter.com/kenneth_pilgrim"/>
    <meta property="og:see_also" content="https://gitlab.com/kennethpilgrim"/>
    <meta property="og:see_also" content="https://github.com/rootland"/>*/ ?>
    <?php /*
            TWITTER CARD
                        */ ?>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="{{$twitter}}" />/ ?>
    <meta name="twitter:creator" content="{{$twitter}}" />
    <meta name="twitter:title" content="{{$name}}" />
    <meta name="twitter:description" content="{{$description}}" />
    <meta name="twitter:image" content="{{$url}}{{$image}}" />
    <?php /*
            HUMANS.TXT authorship http://humanstxt.org
                                                      */ ?>
    <link type="text/plain" rel="author" href="/humans.txt"/>
    <?php /*
            DOMAIN VERIFICATIONS
                                */ ?>
    <?php /*
            IDENTITY
                    */ ?>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Corporation",
        "name": "{{$name}}",
        "url": "{{$url}}/",
        "sameAs": [{{$sameas}}],
        "location": {
            "@type": "Place",
            "name": "{{$name}}",
            "url": "{{$url}}/",
            "sameAs": [{{$sameas}}]
        } 
    }
    </script>
    <?php /*
            WebSite
                   */ ?>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "{{$name}}",
        "description": "{{$description}}",
        "url": "{{$url}}/",
        "image": "{{$url}}{{$image}}",
        "sameAs": [{{$sameas}}],
        "copyrightHolder": {
            "@type": "Corporation",
            "name": "{{$name}}",
            "url": "{{$url}}/",
            "sameAs": [{{$sameas}}],
            "location": {
                "@type": "Place",
                "name": "{{$name}}",
                "url": "{{$url}}/",
                "sameAs": [{{$sameas}}]
            } 
        },
        "author": {
            "@type": "Corporation",
            "name": "{{$name}}",
            "url": "{{$url}}/",
            "sameAs": [{{$sameas}}],
            "location": {
                "@type": "Place",
                "name": "{{$name}}",
                "url": "{{$url}}/",
                "sameAs": [{{$sameas}}]
            } 
        },
        "creator": {
            "@type": "Organization",
            "name": "{{$name}}",
            "url": "{{$url}}/",
            "sameAs": [{{$sameas}}],
            "location": {
                "@type": "Place",
                "name": "{{$name}}",
                "url": "{{$url}}/",
                "sameAs": [{{$sameas}}]
            }
        } 
    }
    </script>
    <?php /*
            PLACE
                 */ ?>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Place",
        "name": "{{$name}}",
        "url": "{{$url}}/",
        "sameAs": [{{$sameas}}]
    }
    </script>
    <?php /*
            MAIN ENTITY OF PAGE
                               */ ?>
    <?php /*
            BREADCRUMBS
                       */ ?>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": "1",
                "item": {
                    "@id": "{{$url}}/",
                    "name": "Home"
                } 
            }
        ] 
    }
    </script>
    <?PHP /*
            GOOGLE TAG MANAGER
                              */ ?>
    <script>
    (function(w,d,s,l,i){
        w[l]=w[l]||[];
        w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
        var f=d.getElementsByTagName(s)[0], 
        j=d.createElement(s),
        dl=l!='dataLayer'?'&l='+l:'';
        j.async=true;
        j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;
        f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NG3NT2W');
    </script>
    <?PHP /*
            GOOGLE ANALYTICS
                            */ ?>
    <?PHP /*
            OTHER META
                      */ ?>
    <meta name="theme-color" content="{{$themecolor}}">
    <link rel="home" href="{{$url}}/" />
    <?php /*
    <link href="https://angelsoflove.be/feed.rss" rel="alternate" type="application/rss+xml" title="Angels Of Love Feed">
    */ ?>
    <?php /*
            STYLING
                   */ ?>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

@yield('header')
@yield('main')
@yield('footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG3NT2W" height="0" 
width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</html>
