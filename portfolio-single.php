<?php
/*
Template Name: Portfolio page
Template Post Type: portfolio
*/
?>

<?php get_header(); ?>

<!-- $ Header -->

<section>
    <div class="container">
        <div class="xl:grid xl:grid-cols-2">
            <div class="mb-6 sm:mb-8 md:mb-10 lg:mb-12 xl:mb-0">
                <h5 class="first-letter:uppercase sm:text-2xl"><span
                        class="gradient-text"><?php the_field('type'); ?></span></h5>
                <h2 class="sm:text-5xl xl:text-6xl"><?php the_field('name'); ?></h2>
            </div>
            <ul class="grid md:grid-cols-3 md:gap-10 lg:w-5/6 xl:w-full xl:gap-12">
                <li class="py-2 sm:py-3">
                    <p class="text-xs font-semibold uppercase"><span class="gradient-text">Client</span></p>
                    <h6 class="capitalize font-semibold sm:text-2xl xl:text-xl"><?php the_field('client'); ?></h6>
                </li>
                <li class="py-2 sm:py-3">
                    <p class="text-xs font-semibold uppercase"><span class="gradient-text">goal</span></p>
                    <h6 class="capitalize font-semibold sm:text-2xl xl:text-xl"><?php the_field('goal'); ?></h6>
                </li>
                <li class="py-2 sm:py-3">
                    <p class="text-xs font-semibold uppercase"><span class="gradient-text">acceptance of work</span></p>
                    <h6 class="capitalize font-semibold sm:text-2xl xl:text-xl"><?php the_field('work_acceptance'); ?>
                    </h6>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- $ Results -->

<section class="py-10 mt-10 sm:py-12 md:py-14 lg:py-16 xl:py-20">
    <div class="container gallery">
        <?php the_content() ?>
    </div>
</section>

<!-- $ About the project -->

<?php if (get_field('title')): ?>

    <section class="py-10 sm:py-12 md:py-14 lg:py-16 xl:py-20">
        <div class="container">
            <div class="lg:grid lg:grid-cols-2 lg:gap-10">
                <div class="mb-8 lg:w-5/6 lg:mb-0">
                    <h5 class="uppercase mb-6"><span class="gradient-text">about the project</span></h5>
                    <h5 class="md:text-2xl"><?php the_field('title'); ?></h5>
                </div>
                <div class="text-sm md:text-base">
                    <p class="py-3 lg:py-0 lg:mb-6"><?php the_field('paragraph_1'); ?></p>
                    <p class="py-3 lg:py-0 lg:mb-6"><?php the_field('paragraph_2'); ?></p>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<section>
    <div class="container">
        <div>
            <a href=""></a>
            <a href=""></a>
        </div>
    </div>
</section>

<!-- $ Footer -->

<?php get_footer(); ?>