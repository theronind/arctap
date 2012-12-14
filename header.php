<!doctype html>
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php
                switch ( $title ) {
                    case 'Error 404':
                        echo "ArcTap &raquo; $title &raquo; Document Not Found";
                        break;
                    // Home Page
                    case '':
                        echo "ArcTap &raquo; We Craft Experiences for Mobile &amp; the Web.";
                        break;
                    // About Page
                    case 'About':
                        echo "ArcTap &raquo; $title &raquo; We're an amazing little team of freelancers designing for Mobile and the Web based out of New York City.";
                        break;
                    // Team Page
                    case 'Team':
                        echo "ArcTap &raquo; $title &raquo; Meet the ArcTap team. A group of talented freelancers hand picked for the best in their field.";
                        break;
                    // Work Page
                    case 'Work':
                        echo "ArcTap &raquo; $title &raquo; A Collection of our work including everything from branding to the Web.";
                        break;
                    // Work : Status Chart
                    case 'Status Chart':
                        echo "ArcTap &raquo; Work &raquo; $title &raquo; The simplest way to track and share your professional milestones and all of the important things that make you who you are.";
                        break;
                    // Work : Grade Spotter
                    case 'Grade Spotter':
                        echo "ArcTap &raquo; Work &raquo; $title &raquo; Grade Spotter is a full&ndash;featured restaurant inspection guide for your iPhone. There are no more excuses for the unknown reasons behind your favorite NYC restaurant's grade.";
                        break;
                    // Work : The East Wing
                    case 'The East Wing':
                        echo "ArcTap &raquo; Work &raquo; $title &raquo; The East Wing is a weekly show that talks about design, user experience, problem solving and the keys to creating producst with value.";
                        break;
                    // Work : Kristina St. Peter
                    case 'Kristina St. Peter':
                        echo "ArcTap &raquo; Work &raquo; $title &raquo; A single page résumé that looks great on everything from your iPhone to your desktop.";
                        break;
                    // Hire Page
                    case 'Hire':
                        echo "ArcTap &raquo; $title &raquo; You're about to make a great first step towards an amazing project by telling us a little bit about yours. Let's make something awesome.";
                        break;
                }
            ?></title>
    <!-- indexing robot meta tab -->
    <?php
        if ($title == 'Error 404') {
            echo '<meta name="robots" content="nofollow">';
        }else {
            echo '<meta name="robots" content="all">';
        }
    ?>
    <!-- unique meta tag descriptions for each page -->
    <?php
        switch ($title) {
            // Home Page
            case '':
                echo '<meta name="description" content="Our main focus is crafting amazing experiences on smartphones, tablet, & desktop devices. We have a fully developed team of freelancers ready to take on any project.">';
                break;
            // About Page
            case 'About':
                echo '<meta name="description" content="What makes us unique is not only the solid team, but what the team is made up of. We understand that apps sometimes need more then just a designer and a developer.">';
                break;
            // Team Page
            case 'Team':
                echo '<meta name="description" content="We are a combination of talented freelancers and craftsman for Mobile and the Web unlike any other group you\'ve encountered. Take a stroll through our talent pool and get to know us a little better.">';
                break;
            // Work Page
            case 'Work':
                echo '<meta name="description" content="A collection of work by our combined talent pool in various disciplines from Web Apps and Webites to Mobile Applications for iOS and Android.">';
                break;
            // Work: Status Chart Page
            case 'Status Chart':
                echo '<meta name="description" content="Your professional dashboard. The simplest way track and share your professional milestones and all of the important things that make you who you are.">';
                break;
            // Work: Grade Spotter Page
            case 'Grade Spotter':
                echo '<meta name="description" content="Grade Spotter is a full-featured restaurant inspection guide for your iPhone. There are no more excuses for the unknown reasons behind your favorite NYC restaurant\'s grade.">';
                break;
            // Work: Kristina St. Peter Page
            case 'Kristina St. Peter':
                echo '<meta name="description" content="A single page résumé that looks great on everything from your iPhone to your desktop.">';
                break;
            // Work: The East Wing Page
            case 'The East Wing':
                echo '<meta name="description" content="A weekly show that talks about design, user experience, problem solving and the keys to creating products with value.">';
                break;
            // Hire Page
            case 'Hire':
                echo '<meta name="description" content="Ready to get started? Let\'s craft something beautiful together. We are ready when you are to start your awesome project with us. Leave a message and our talented experts will promptly reply to your request.">';
                break;
        }
    ?>
    <!-- mobile meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="shortcut icon" href="/favicon.png">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link href="/css/style.css?v2.1" rel="stylesheet">
    <!-- modernizr -->
    <script src="/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div id="wrapper">

    <div id="header-wrap">
        <header class="banner" role="banner">
            <div class="container">
                <h1 class="logo"><a href="/" rel="bookmark author" class="arctap-link"><span>ArcTap</span></a></h1>
                <nav class="main-nav" role="navigation">
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