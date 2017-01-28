        <!-- Sayfa Sağ --> 
        <div class="sayfa-sag" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
            
            <!-- Arama Alan -->
            <aside class="arama">
                <form class="search" action="<?php echo home_url( '/' ); ?>" method="get" id="searchform">
                    <input type="search" name="s" placeholder="Arama yap...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </aside>
            <!-- Arama Alan Bitiş -->
            
            <!-- Kategoriler -->
            <aside class="widget pd0">
                <div class="widget-baslik">Kategoriler</div>
                
                <ul class="kat bilgiler">
		    <?php wp_list_categories('title_li='); ?>
                </ul>

            </aside>
            <!-- Kategoriler Bitiş -->
            
        </div>
        <!-- Sayfa Sağ Bitiş -->