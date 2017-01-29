<?php get_header(); ?>

    <!-- Sayfa -->
    <div id="sayfa" class="blog" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
        <div class="ortala">
        <div class="sayfa-ust">
            <h1 class="sayfa-baslik" itemprop="headline"><?php the_title(); ?></h1>   
        </div>  
        
        <div class="sayfasabit">
        <!-- Sayfa Sol -->
        <div class="sayfa-sol">
            <?php while ( have_posts() ) : the_post(); ?>
            <!-- Yazi Baslangic -->
            <article class="post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
                <div class="yazi-aciklama">
                    <div class="yazi-ozet" itemprop="text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
            <!-- Yazi Bitis -->
            <?php endwhile; ?>
        </div>
        <!-- Sayfa Sol Bitis -->
        
        <?php get_sidebar(); ?>
        </div>
         
        </div>
    </div>
    <!-- Sayfa Bitis -->

<?php get_footer(); ?>