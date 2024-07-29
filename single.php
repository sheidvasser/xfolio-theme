<?php get_header(); ?>

<!-- $ Header -->

<section class="pt-10">
    <div class="container">
        <h1 class="mb-20 break-words md:text-center md:w-4/5 md:mx-auto lg:text-7xl"><?php the_title(); ?></h1>
    </div>

    <?php
    // the_post_thumbnail($size, [
    //     'class' => "object-cover aspect-[4/3] sm:aspect-[2/1] md:aspect-[5/2] w-full"
    // ]);
    ?>

</section>

<!-- $ Main -->

<section class="single-post-content">
    <div class="container [&>*]:my-10 [&>*]:lg:my-14">

        <?php the_content(); ?>

    </div>
</section>

<!-- $ More articles -->

<section class="mt-10 py-10 sm:py-12 md:py-14 lg:py-16 xl:py-20">
    <div class="container">
        <h3 class="leading-2 sm:text-6xl mb-12 md:leading-4 md:text-center md:mb-20"><span
                class="gradient-title">Previous and Next
                articles</span></h3>
        <div class="grid gap-8 md:grid-cols-2">

            <? if (get_previous_post()): ?>

                <div class="bg-base-white-secondary md:col-start-1 p-6 lg:p-8">

                    <div class="overflow-hidden h-48 mb-4 sm:h-64 md:h-48 lg:h-64 xl:h-80">
                        <a href="<?php get_previous_post_link('%link', '', 1, '', 'category'); ?>">

                            <?php
                            $prevPost = get_previous_post();
                            $prevthumbnail = get_the_post_thumbnail(
                                $prevPost->ID,
                                '',
                                array(
                                    'class' => 'object-cover w-full h-full transition duration-300 hover:scale-110',
                                )
                            );
                            previous_post_link('%link', $prevthumbnail);
                            ?>

                        </a>
                    </div>
                    <div class="flex flex-wrap">

                        <?php
                        $prevPost = get_previous_post();
                        $categories = get_the_category($prevPost->ID);
                        foreach ($categories as $category) {
                            echo '<a class="tag" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                        }
                        ?>

                    </div>
                    <h4 class="mt-2 leading-6 lg:text-3xl xl:leading-8">
                        <a href="<?php get_previous_post_link('%link', '', 1, '', 'category'); ?>">
                            <?php previous_post_link('%link', '%title', false, ''); ?>
                        </a>
                    </h4>
                </div>

            <? endif; ?>

            <? if (get_next_post()): ?>

            <div class="bg-base-white-secondary md:col-start-2 p-6 lg:p-8">
                <div class="overflow-hidden h-48 mb-4 sm:h-64 md:h-48 lg:h-64 xl:h-80">
                    <a href="<?php get_next_post_link('%link', '', 1, '', 'category'); ?>">

                        <?php
                        $nextPost = get_next_post();
                        $nextthumbnail = get_the_post_thumbnail(
                            $nextPost->ID,
                            '',
                            array(
                                'class' => 'object-cover w-full h-full transition duration-300 hover:scale-110',
                            )
                        );
                        next_post_link('%link', $nextthumbnail);
                        ?>

                    </a>
                </div>
                <div class="flex flex-wrap">

                    <?php
                    $nextPost = get_next_post();
                    $categories = get_the_category($nextPost->ID);
                    foreach ($categories as $category) {
                        echo '<a class="tag" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
                    }
                    ?>

                </div>
                <h4 class="mt-2 leading-6 lg:text-3xl xl:leading-8">
                    <a href="<?php get_next_post_link('%link', '', 1, '', 'category'); ?>">
                        <?php next_post_link('%link', '%title', false, ''); ?>
                    </a>
                </h4>
            </div>

            <? endif; ?>

        </div>
    </div>
</section>

<!-- $ Footer -->

<?php get_footer(); ?>