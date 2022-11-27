<?php get_header(); ?>

<!-- トップ画面 -->
    <main class="l-main">
        <div class="p-front__top">
        <h1 class="p-front__title c-text c-shadow"><?php bloginfo( 'description' ); ?></h1>
            <P class="c-text c-shadow">テキストが入ります。テキストが入ります。</P>
        </div>
        <?php
    // if(have_posts()):  
    //     while(have_posts()):
    //         the_post(); ?>
        <div class="p-box--menu u-padding20 u-@charset">
            <div class="u-margin20 u-font-size__main u-padding__5 c-text c-shadow">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full',array('class' => 'u-thumbnail')); ?>
        <?php else: ?>
            <?php endif; ?>
            </div>
        </div>
        <div class="p-box--text">
            <ul class="p-box">
                </li>
                <li class="p-box--news__group">
                        <p class="u-font-size"><?php the_content(); ?>
                    </a>
                </li>
            </ul>
        </div>
    </main>
<?php get_footer(); ?>