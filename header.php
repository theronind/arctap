<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        <?php
            switch ( $title ) {
                // Home Page
                case 'Home':
                    echo 'ArcTap &#9889; We Craft Experiences for Mobile &amp; the Web. We are an amazing little team of freelancers based out of New York City';
                    break;
                // About Page
                case 'About':
                    echo "ArcTap &#9889; $title" . ' ' . '&#9889; Classic is what we build. What makes us unique is not only the solid team, but what the team is made up of.';
                    break;
                // Team Page
                case 'Team':
                    echo "ArcTap &#9889; $title" . ' ' . '&#9889; We are an amazing little team of freelancers based out of New York City.';
                    break;
                // Work Page
                case 'Work':
                    echo "ArcTap &#9889; $title" . ' ' . '&#9889; A Collection of our Work for Mobile and the Web.';
                    break;
                // Work : Status Chart
                case 'Status Chart':
                    echo "ArcTap &#9889; $title" . ' ' . '&#9889; The simplest way track and share your professional milestones and all of the important things that make you who you are.';
                    break;
                // Work : Grade Spotter
                case 'Grade Spotter':
                    echo "ArcTap &#9889; $title" . ' ' . '&#9889; Grade Spotter is a full&ndash;featured restaurant inspection guide for your iPhone. There are no more excuses for the unknown reasons behind your favorite NYC restaurant\'s grade.';
                    break;
                // Work : The East Wing
                case 'The East Wing':
                    echo "ArcTap &#9889; $title" . ' ' . '&#9889; The East Wing is a weekly show that talks about design, user experience, problem solving and the keys to creating producst with value.';
                    break;
                // Work : Kristina St. Peter
                case 'Kristina St. Peter':
                    echo "ArcTap &#9889; $title" . ' ' . '&#9889; The site is a single page résumé that looks great on everything from your iPhone to your desktop.';
                    break;
                // Hire Page
                case 'Hire':
                    echo "ArcTap &#9889; $title" . ' ' . '&#9889; You\'re about to make a great first step towards an amazing project.';
                    break;
            }
        ?>
    </title>
    <meta name="robots" content="all">
    <meta name="description" content="We Craft Experiences Our main focus is to launch that big idea and to produce amazing experience for everyone. We are an amazing little team of freelancers with elegant designs based out of New York City. Let us help you take your idea to reality.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" href="/favicon.png">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link href="/css/style.css?v1.0" rel="stylesheet">
    <script src="/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div id="wrapper">

    <div id="header-wrap">
        <header class="banner" role="banner">
            <div class="container">
                <h1 class="logo">
                    <a href="/" rel="bookmark author"><span>ArcTap</span></a>
                </h1>
                <nav role="navigation">
                    <ul>
                        <li><a href="/about/" rel="bookmark">About</a></li>
                        <li><a href="/team/" rel="bookmark">Team</a></li>
                        <li><a href="/work/" rel="bookmark">Our Work</a></li>
                        <li><a href="/hire/" rel="bookmark">Hire Us</a></li>
                    </ul>
                </nav>
            </div><!--/container-->
        </header>
    </div><!--/header-wrap-->