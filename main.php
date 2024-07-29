<?
/*
Template Name: Main
*/
?>

<?php get_header(); ?>

<!-- $ Header -->

<section class="container lg:flex lg:flex-col min-h-[80vh] lg:min-h-[calc(100svh-100px)] lg:justify-center !-mt-10">
    <header class="flex flex-col items-center py-7">
        <img src="http://sheydvasser/wp-content/uploads/2024/07/photo-square.webp"
            class="rounded-full object-cover mb-10 h-44 w-44 shadow-[0px_0px_22px_0px_rgba(34,60,80,0.2)_inset] sm:w-64 sm:h-64 sm:mb-10 lg:w-48 lg:h-48" alt="">
        <h1 class="leading-2 sm:leading-3 mb-10 md:mb-8 sm:text-6xl md:text-[80px] sm:text-center md:leading-1">
            <span class="gradient-title">Hi, I'm Roman,</span> a creative web developer
        </h1>
        <p
            class="w-full max-w- mb-10 leading-6 md:max-w-[70%] text-sm sm:text-base sm:text-center sm:leading-10 sm:mb-8">
            I am specialized on coding
            such types of websites as landing page, blog, website for portfolio and personal using.
        </p>
        <div class="mb-10 md:mx-auto flex flex-col w-full items-start sm:items-center sm:justify-center sm:flex-row">
            <a href="/contact"
                class="button-animation uppercase rounded-full font-medium mb-4 sm:mx-3 py-4 px-6 bg-base-black-primary border-2 border-base-black-primary text-base-white-primary text-base sm:text-lg">get
                in touch</a>
            <a href="#projects"
                class="button-animation uppercase rounded-full font-medium mb-4 sm:mx-3 py-4 px-6 bg-none border-2 border-base-black-primary text-base-black-primary text-base sm:text-lg">view
                all works</a>
        </div>
    </header>
</section>

<!-- $ Divider -->

<section class="my-16 relative overflow-hidden flex items-center" id="divider">
    <div class="flex items-center justify-center py-10 w-full gradient-bg" id="divider-wrapper">
        <div class="-rotate-2 bg-base-black-primary absolute w-[110%] shadow-[0px_0px_10px_0px_rgba(34,60,80,0.4)]">
            <div class="text-xl flex items-center py-5" id="divider-line">
                <div id="divider-1"
                    class="flex items-center animate-[ticker_30s_linear_infinite] [animation-delay:-30s] lg:animate-[ticker_40s_linear_infinite] lg:[animation-delay:-40s]">
                </div>
                <div id="divider-2"
                    class="flex items-center animate-[ticker2_30s_linear_infinite] [animation-delay:-15s] lg:animate-[ticker2_40s_linear_infinite] lg:[animation-delay:-20s]">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- $ Projects -->

<section class="py-10 sm:py-12 md:py-14 lg:py-16 xl:py-20" id="projects">
    <div class="container">
        <div class="grid items-start grid-cols-1 md:grid-cols-2 gap-m3 mb-m6">
            <h2 class="leading-2 sm:text-6xl">Look at My <br><span class="gradient-title">Projects.</span>
            </h2>
            <p class="leading-6 sm:leading-10">
                Here I share with you some of my works. Inside each card you may view
                screenshots of them and description where there is written way of developing and interesting
                features of the website.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-7 justify-between py-5 sm:grid-cols-2 md:gap-m6">

            <?php
            $args = array(
                'posts_per_page' => 4,
                'post_type' => 'portfolio',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>

                    <div class="card">
                        <a href="<?php the_permalink(); ?>" class="block">
                            <div class="card-img-wrapper">

                                <?php
                                the_post_thumbnail($size, 'loading=lazy&class=card-img');
                                ?>

                            </div>
                            <div class="card-wrapper">
                                <h3 class="card-title">
                                    <div class="line-clamp-2"><?php the_title(); ?></div>
                                </h3>
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- $ About me -->

<section class="py-14 bg-base-white-secondary sm:py-16 md:py-20 lg:py-24 xl:py-28">
    <div class="container">
        <div class="grid xl:grid-cols-3 xl:gap-8">
            <h3 class="md:text-5xl md:mb-4">Roman Sheydvasser</h3>
            <div class="md:w-10/12 col-span-2 xl:w-full">
                <div class="py-5 grid md:grid-cols-2 md:gap-8 md:py-8 xl:py-0 xl:mb-8">
                    <p class="my-3 md:my-0">I'm a web developer with a passion for learning. I'm always eager to
                        tackle new challenges and bring my clients' ideas to life.</p>
                    <p class="my-3 md:my-0">Whether it's a fresh technology or a unique request, I'm up for the
                        task! I thrive on collaborating with clients to understand their needs and deliver
                        exceptional results.</p>
                </div>
                <div class="grid md:grid-cols-3 md:gap-8">
                    <div class="my-4">
                        <h3 class="mb-2 sm:text-4xl"><span class="gradient-text">10+</span></h3>
                        <p class="">Projects Done</p>
                    </div>
                    <div class="my-4">
                        <h3 class="mb-2 sm:text-4xl"><span class="gradient-text"><?= date("Y") - 2022 ?>+</span></h3>
                        <p class="">Years of experience</p>
                    </div>
                    <div class="my-4">
                        <h3 class="mb-2 sm:text-4xl"><span class="gradient-text">100%</span></h3>
                        <p class="">Clients satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid gap-2 grid-cols-4 grid-rows-2 mt-10 md:gap-3 lg:gap-4">
            <div
                class="rounded-lg row-span-2 bg-gradient-to-r from-cyan-500 to-blue-500 md:rounded-2xl lg:rounded-3xl min-h-0">
            </div>
            <div
                class="rounded-lg row-span-2 col-span-2 bg-gradient-to-r from-sky-500 to-indigo-500 md:rounded-2xl lg:rounded-3xl aspect-square">
            </div>
            <div
                class="rounded-lg bg-gradient-to-r from-violet-500 to-fuchsia-500 md:rounded-2xl lg:rounded-3xl aspect-square">
            </div>
            <div
                class="rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 md:rounded-2xl lg:rounded-3xl aspect-square">
            </div>
        </div>
    </div>
</section>

<!-- $ Let's work together -->

<section class="py-10 mt-10 sm:py-12 md:py-14 lg:py-16 xl:py-20">
    <div class="container">
        <h4 class="mb-6 sm:text-4xl md:text-6xl md:mb-10 lg:text-[72px] lg:mb-12 xl:text-[96px]">See the impact of good,
            good, good website for your business.</h4>
        <a href="/contact">
            <h5
                class="capitalize inline-block after:content-[''] after:h-0.5 after:block after:gradient-bg after:rounded-sm after:mt-1 hover:after:-translate-y-2 hover:after:opacity-0 after:transition after:duration-300 sm:text-4xl md:text-6xl md:after:h-1 md:after:mt-2 lg:text-[72px] lg:after:mt-3 xl:text-[96px] xl:after:mt-4">
                <span class="gradient-text">Let's work together</span>
                <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
                    <lineargradient id="gradient-4" gradientTransform="rotate(-60)" x2="1" y2="1">
                        <stop offset="0%" stop-color="var(--color-purple)" />
                        <stop offset="30%" stop-color="var(--color-red)" />
                        <stop offset="66%" stop-color="var(--color-orange)" />
                        <stop offset="85%" stop-color="var(--color-light-orange)" />
                    </lineargradient>
                </svg>
                <svg class="inline w-6 h-6 sm:w-8 sm:h-8 md:w-14 md:h-14 lg:w-16 lg:h-16 xl:h-20 xl:w-20"
                    viewBox="0 0 18 18" fill="none">
                    <path d="M1 17L17 1M17 1H3M17 1V14" stroke="url(#gradient-4)" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </h5>
        </a>
    </div>
</section>

<!-- $ Footer -->

<?php get_footer(); ?>