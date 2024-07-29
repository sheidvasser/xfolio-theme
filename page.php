<?php get_header(); ?>

<!-- $ Last articles -->

<section>
    <div class="container">
        <h1 class="leading-2 sm:text-6xl md:leading-4 md:text-center">Blogs & articles<br class="hidden md:block">
            for <span class="gradient-title">business growth</span></h1>
        <div class="grid gap-8 md:grid-cols-2 py-10 sm:py-12 md:py-14 lg:py-16 xl:py-20">

            <?php
            $query = new WP_Query(
                array(
                    'posts_per_page' => 2,
                    'post_type' => 'portfolio',
                )
            );

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>

                    <div class="bg-base-white-secondary p-6 lg:p-8">

                        <div class="h-48 object-cover overflow-hidden mb-4 w-full sm:h-64 md:h-48 lg:h-64 xl:h-80">
                            <a href="<?php the_permalink(); ?>">

                                <?php
                                the_post_thumbnail($size, 'loading=lazy&class=h-full object-cover w-full transition duration-300 hover:scale-110');
                                ?>

                            </a>
                        </div>

                        <div class="flex flex-wrap">

                            <?php
                            $categories = get_the_category();
                            foreach ($categories as $category) {
                                echo '<a class="tag" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                            }
                            ?>

                        </div>
                        <h4 class="mt-2 leading-6 lg:text-3xl xl:leading-8">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- $ Divider -->

<section class="my-16 relative overflow-hidden flex items-center" id="divider">
    <div class="flex items-center justify-center py-10 w-full gradient-bg" id="divider-wrapper">
        <div class="-rotate-2 bg-base-black-primary absolute w-[110%] shadow-[0px_0px_10px_0px_rgba(34,60,80,0.4)]">
            <div class="text-xl flex items-center py-5" id="divider-line">
                <div id="divider-1"
                    class="flex items-center animate-[ticker_60s_linear_infinite] [animation-delay:-60s]"></div>
                <div id="divider-2"
                    class="flex items-center animate-[ticker2_60s_linear_infinite] [animation-delay:-30s]"></div>
            </div>
        </div>
    </div>
</section>

<!-- $ Articles with filters -->

<section class="py-10" id="posts">
    <div class="container">
        <h2 class="leading-2 sm:text-5xl mb-4 md:leading-4"><span class="gradient-title">Resent
                insights</span></h2>

        <?php
        $args = array(
            'show_option_all' => '',
            'show_option_none' => __('No categories'),
            'orderby' => 'name',
            'order' => 'ASC',
            'style' => 'list',
            'show_count' => 0,
            'hide_empty' => 1,
            'use_desc_for_title' => 0,
            'child_of' => 0,
            'feed' => '',
            'feed_type' => '',
            'feed_image' => '',
            'exclude' => '',
            'exclude_tree' => '',
            'include' => '',
            'hierarchical' => true,
            'title_li' => __(''),
            'number' => NULL,
            'echo' => 1,
            'depth' => 0,
            'current_category' => 0,
            'pad_counts' => 0,
            'taxonomy' => 'category',
            'walker' => 'Walker_Category',
            'hide_title_if_empty' => false,
            'separator' => '<br />',
        );

        echo '<ul class="widget">';
        wp_list_categories($args);
        echo '</ul>';
        ?>

        <div class="grid gap-8 xl:gap-12">

            <?php
            $query = new WP_Query(
                array(
                    'posts_per_page' => 2,
                    'post_type' => 'post',
                )
            );

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>

                    <div class="grid md:grid-cols-2 md:gap-8 bg-base-white-secondary p-6 md:p-8">
                        <div class="h-64 mb-4 overflow-hidden sm:h-96 md:mb-0 md:h-56 xl:h-72">
                            <a href="<?php the_permalink(); ?>">

                                <?php
                                $attr = array('class' => "h-full object-cover w-full transition duration-300 hover:scale-110");
                                the_post_thumbnail($size, $attr);
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

<!-- $ Footer -->

<?php get_footer(); ?>