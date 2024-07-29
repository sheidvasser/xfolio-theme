<?php
/*
Template Name: Testimonials
Template Post Type: reviews
*/
?>

<?php get_header(); ?>

<!-- $ Main -->

<section class="mb-10">
    <div class="container">
        <h1 class="text-5xl leading-2 mb-10 sm:text-6xl">Client <br><span class="gradient-title">Testimonials</span>
        </h1>
        <div class="grid gap-8">

            <?php
            $query = new WP_Query(
                array(
                    'posts_per_page' => -1,
                    'post_type' => 'review',
                )
            );

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>

                    <div class="bg-base-white-secondary px-6 py-8">
                        <div class="flex mb-8">
                            <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
                                <lineargradient id="gradient-1" gradientTransform="rotate(90)" x2="1" y2="1">
                                    <stop offset="0%" stop-color="var(--color-red)" />
                                    <stop offset="26%" stop-color="var(--color-purple)" />
                                </lineargradient>
                            </svg>
                            <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
                                <lineargradient id="gradient-2" gradientTransform="rotate(90)" x2="1" y2="1">
                                    <stop offset="0%" stop-color="var(--color-orange)" />
                                    <stop offset="26%" stop-color="var(--color-red)" />
                                </lineargradient>
                            </svg>
                            <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
                                <lineargradient id="gradient-3" gradientTransform="rotate(90)" x2="1" y2="1">
                                    <stop offset="0%" stop-color="var(--color-purple)" />
                                    <stop offset="26%" stop-color="var(--color-orange)" />
                                </lineargradient>
                            </svg>

                            <svg height="22px" width="22px" class="mr-2" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 47.94 47.94" xml:space="preserve">
                                <path class="icon" fill="url(#gradient-1)" aria-hidden="true" focusable="false" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
        c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
        c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
        c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
        c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
        C22.602,0.567,25.338,0.567,26.285,2.486z" />
                            </svg>
                            <svg height="22px" width="22px" class="mr-2" version="1.1" id="Capa_2"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 47.94 47.94" xml:space="preserve">
                                <path class="icon" fill="url(#gradient-2)" aria-hidden="true" focusable="false" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
        c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
        c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
        c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
        c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
        C22.602,0.567,25.338,0.567,26.285,2.486z" />
                            </svg>
                            <svg height="22px" width="22px" class="mr-2" version="1.1" id="Capa_3"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 47.94 47.94" xml:space="preserve">
                                <path class="icon" fill="url(#gradient-3)" aria-hidden="true" focusable="false" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
        c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
        c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
        c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
        c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
        C22.602,0.567,25.338,0.567,26.285,2.486z" />
                            </svg>
                            <svg height="22px" width="22px" class="mr-2" version="1.1" id="Capa_4"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 47.94 47.94" xml:space="preserve">
                                <path class="icon" fill="url(#gradient-1)" aria-hidden="true" focusable="false" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
        c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
        c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
        c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
        c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
        C22.602,0.567,25.338,0.567,26.285,2.486z" />
                            </svg>
                            <svg height="22px" width="22px" class="mr-2" version="1.1" id="Capa_5"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 47.94 47.94" xml:space="preserve">
                                <path class="icon" fill="url(#gradient-2)" aria-hidden="true" focusable="false" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
        c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
        c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
        c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
        c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
        C22.602,0.567,25.338,0.567,26.285,2.486z" />
                            </svg>

                        </div>
                        <p class="mb-8">"<?php the_field('content') ?>"</p>
                        <div class="">
                            <h3 class="text-xl w-auto"><?php the_field('client') ?></h3>
                            <p class="text-gray-500 text-sm w-auto"><?php the_field('position') ?></p>
                        </div>
                    </div>

                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
    </div>
</section>

<!-- $ Footer -->

<?php get_footer(); ?>