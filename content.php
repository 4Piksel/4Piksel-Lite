<?php if(is_single()): ?>
            <!-- Yazi Baslangic -->
            <article class="post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
                <div class="yazi-resim" itemprop="image">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('large');
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/rsm/resimyok.png" />';
                    } ?>
                </div>
                <div class="yazi-aciklama">
                    <div class="yazi-ozet" itemprop="text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <!-- Yazi Bitis -->
<?php endif; ?>