<?php get_header(); ?>

<!-- $ Last articles -->

<section>
    <div class="container">
        <h1 class="leading-2 sm:text-6xl md:leading-4 md:text-center">Blogs & Articles: <br
                class="hidden md:block"><span class="gradient-title">Posts</span></h1>
    </div>
</section>

<!-- $ Articles with filters -->

<section class="py-10 sm:py-12 md:py-14 lg:py-16 xl:py-20" id="posts">
    <div class="container">

        <?php
        dynamic_sidebar('sidebar-filter');
        ?>

        <div class="grid gap-8 xl:gap-12">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    ?>

                    <div class="grid md:grid-cols-2 md:gap-8 bg-base-white-secondary p-6 md:p-8">
                        <div class="h-64 mb-4 overflow-hidden sm:h-96 md:mb-0 md:h-56 xl:h-72">
                            <a href="<?php the_permalink(); ?>">

                                <?php
                                the_post_thumbnail($size, 'loading=lazy&class=h-full object-cover w-full transition duration-300 hover:scale-110');
                                ?>

                            </a>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-wrap">

                                <?php
                                $categories = get_the_category();
                                foreach ($categories as $category) {
                                    echo '<a class="tag md:mt-0 md:mb-4" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                                }
                                ?>

                            </div>

                            <h4 class="leading-6 mt-2 lg:text-3xl xl:leading-8">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>

<!-- $ Pagination -->

<section class="my-10">
    <div class="container flex justify-center">

        <?php
        the_posts_pagination(
            array(
                'show_all' => false,
                'end_size' => 2,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => 'Previous',
                'next_text' => 'Next',
                'add_args' => false,
                'class' => 'pagination',
            )
        );
        ?>

    </div>
</section>

<!-- $ Let's work together -->

<section class="py-10 mt-10 sm:py-12 md:py-14 lg:py-16 xl:py-20">
    <div class="container">
        <h4 class="mb-6 sm:text-4xl md:text-6xl md:mb-10 lg:text-[72px] lg:mb-12 xl:text-[96px] m-">See the impact of
            good, good, good website for your business.</h4>
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