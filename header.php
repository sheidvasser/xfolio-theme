<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full-stack web developer: Craft beautiful & functional websites</title>
    <meta name="author" content="Roman Sheydvasser">

    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" sizes="16x16"
        href="img/icons/favicon-16-light-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" sizes="32x32"
        href="img/icons/favicon-32-light-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" sizes="57x57"
        href="img/icons/favicon-57-light-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" sizes="60x60"
        href="img/icons/favicon-60-light-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" sizes="72x72"
        href="img/icons/favicon-72-light-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" sizes="76x76"
        href="img/icons/favicon-76-light-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" sizes="76x76"
        href="img/icons/favicon-76-light-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: light)" sizes="96x96"
        href="img/icons/favicon-96-light-mode.png">

    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" sizes="16x16"
        href="img/icons/favicon-16-dark-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" sizes="32x32"
        href="img/icons/favicon-32-dark-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" sizes="57x57"
        href="img/icons/favicon-57-dark-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" sizes="60x60"
        href="img/icons/favicon-60-dark-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" sizes="72x72"
        href="img/icons/favicon-72-dark-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" sizes="76x76"
        href="img/icons/favicon-76-dark-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" sizes="76x76"
        href="img/icons/favicon-76-dark-mode.png">
    <link rel="icon" type="image/png" media="(prefers-color-scheme: dark)" sizes="96x96"
        href="img/icons/favicon-96-dark-mode.png">

    <meta name="title" content="Grow Your Business with a Winning Website: Development & Strategy">
    <meta name="keywords"
        content="web, services, website, wordpress, development, online, shop, counsultation, programmer, landing">
    <meta name="description"
        content="Let's build your dream website! Contact me for a free consultation. I help businesses grow online with stunning & effective web pages.">
    <meta property="og:title" content="Grow Your Business with a Winning Website: Development & Strategy">
    <meta property="og:image" content="img/gallery/porten/devices_1.png">
    <meta property="og:description"
        content="Attract more customers, boost leads, and increase sales. We develop, optimize, and strategize websites that work hard for you.">
    <meta property="og:site_name" content="Web Servies">
    <meta property="og:url" content="">

    <?php wp_head(); ?>

</head>

<body>
    <div class="fixed h-screen w-full top-0 left-0 -z-10 bg-transparent transition-colors duration-500" id="overlay">
    </div>
    <header class="container mx-auto" id="header">
        <nav class="flex flex-row justify-between items-center py-5 lg:py-7 relative mb-10">
            <svg fill="var(--color-black-primary)"
                class="text-xl block z-10 order-2 md:!hidden navigation-button cursor-pointer" width="28px"
                height="28px" viewBox="-32 0 512 512">
                <path
                    d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" />
            </svg>
            <div class="fixed top-0 right-0 z-30 flex-col items-start justify-start bg-base-white-secondary translate-x-full rounded-s-2xl w-64 h-dvh transition-all duration-500 md:translate-x-0 md:flex-row md:relative md:h-full md:w-full md:bg-transparent"
                id="navigation-list" aria-label="navigation button" aria-controls="primary-navigation"
                aria-expanded="false">
                <div
                    class="flex justify-between relative p-6 items-center after:absolute after:left-0 after:bottom-0 after:h-px after:w-full after:bg-gray-700 after:inline-block after:content-[''] md:hidden">
                    <h5>Navigation</h5>
                    <i class="fas fa-times text-xl navigation-button cursor-pointer"></i>
                    <svg fill="var(--color-black-primary)" class="text-xl navigation-button cursor-pointer" width="28px" height="28px" viewBox="0 0 32 32">
                        <path
                            d="M18.8,16l5.5-5.5c0.8-0.8,0.8-2,0-2.8l0,0C24,7.3,23.5,7,23,7c-0.5,0-1,0.2-1.4,0.6L16,13.2l-5.5-5.5  c-0.8-0.8-2.1-0.8-2.8,0C7.3,8,7,8.5,7,9.1s0.2,1,0.6,1.4l5.5,5.5l-5.5,5.5C7.3,21.9,7,22.4,7,23c0,0.5,0.2,1,0.6,1.4  C8,24.8,8.5,25,9,25c0.5,0,1-0.2,1.4-0.6l5.5-5.5l5.5,5.5c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L18.8,16z" />
                    </svg>
                </div>

                <?php
                wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => false,
                    'menu_class' => 'flex flex-col mt-2 md:mt-0 md:flex-row',
                    'menu_id' => 'navigation-wrapper',
                ]);
                ?>

            </div>
            <a href="/contact"
                class="text-sm md:text-base outline-none py-1.5 px-5 bg-base-black-primary border-none rounded-full uppercase font-medium text-base-white-primary z-10 text-nowrap">let's
                talk
            </a>
        </nav>
    </header>