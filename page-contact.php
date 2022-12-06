<?php get_header(); ?>

<!-- トップ画面 -->
    <main class="l-main">
        <div class="p-front__top">
        <h1 class="p-front__title c-text c-shadow"><?php bloginfo( 'description' ); ?></h1>
            <!-- <P class="c-text c-shadow">テキストが入ります。テキストが入ります。</P> -->
        </div>
        <div class="p-box--text">
            <ul class="p-box u-contact">
                </li>
                <li class="p-box--news__group">
                <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?>
                        <p class="u-font-size">
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php else: ?>
                            
            <?php endif; ?>
                </li>
            </ul>
        </div>
    </main>
<?php get_footer(); ?>