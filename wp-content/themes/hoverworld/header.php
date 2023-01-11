<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php $fonts_google = "https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"; ?>
    <!-- connect to domain of font files -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- optionally increase loading priority -->
    <link rel="preload" as="style" href=<?php echo $fonts_google; ?>>
    <!-- async CSS -->
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"
          href="<?php echo $fonts_google; ?>">
    <!-- no-JS fallback -->
    <noscript>
        <link rel="stylesheet" href="<?php echo $fonts_google; ?>">
    </noscript>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="preloader"
     style="position:fixed;top:0;left:0;width:100vw;height:100vh;background:#fff;z-index:99999;"></div>
<?php wp_body_open(); ?>
<div id="page" class="d-flex justify-content-between flex-column min-vh-100 site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="site-branding">
                        <?php the_custom_logo(); ?>
                    </div>
                </div>
                <div class="col">
                    <nav id="site-navigation" class="row flex-column flex-lg-row align-items-lg-center main-navigation">
                        <div class="substrate d-lg-none">
                            <svg preserveAspectRatio="none" width="271" height="354" viewBox="0 0 271 354" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M105.793 -2H274V329.5L36 352.015L117 218L2 -2H105.793Z" fill="#1F205A"
                                      stroke="white" stroke-width="2"/>
                            </svg>
                        </div>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container_class' => 'container col-lg'
                        )); ?>

                        <div class="container col-lg-auto social-links">
                            <div class="mx-n1 mx-sm-n2 d-flex justify-content-end">
                            <?php get_template_part('/template-parts/general/social-links'); ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-auto d-lg-none">
                    <div class="menu-toggle">
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
