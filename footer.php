<?php if (!is_404()) : ?>
        </div>
    	<!-- /content -->


    	<div class="boxed">
        	<?php $modules = get_option('lovethemes_modules'); ?>
            
            
            <!-- midsection -->
            <div id="midsection">
                <div class="social-icons">

                    <ul class="soc">
                        <li><a class="soc-facebook" href="https://www.facebook.com/mammy.gestante.moda"></a></li>
                        <li><a class="soc-instagram" href="https://instagram.com/mammyporveramoraes/"></a></li>
                        <li><a class="soc-rss" href="#"></a></li>
                        <li><a class="soc-youtube soc-icon-last" href="https://www.youtube.com/user/mammygestante"></a></li>
                    </ul>

                </div>
               <?php /*
                <!-- secondary menu -->
                <div class="two_third alignleft">
                    <div id="secondary">
                        <nav class="navigation">
                            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'nav', 'theme_location' => 'secondary_menu' ) ); ?>
                        </nav>
                    </div>
                </div>
                <!-- /secondary menu -->
                
                <!-- newsletter -->
                <div class="one_third alignright">
                    <?php 
                        $newsletter = get_option( 'lovethemes_newsletter' ); 
                        if ( $newsletter['newsletter'] === true && ! is_404() ) :
                            get_template_part( 'inc/newsletter' ); 
                        endif;
                    ?>
                </div>
                <!-- /newsletter --> */ ?>
                
            </div>
            <!-- /midsection -->
            <footer id="footer">
                <div class="footerwidget one_quarter">

                    <img src="<?php echo child_template_directory ?>/imgs/atendimento.png"  class="aligncenter  img-responsive hidden-xs hidden-sm"/>
                          <div class="hidden-md hidden-lg">
                          <div class="icon"><img src="<?php echo child_template_directory ?>/imgs/fone.png" /></div>
                          <p>ATENDIMENTO<br/>
                          11 3845.2216</p>
                    </div>
                </div>
                <div class="footerwidget one_quarter">
                    <img src="<?php echo child_template_directory ?>/imgs/contatofull.png"  class=" aligncenter img-responsive hidden-xs hidden-sm"/>
                     <div class="hidden-md hidden-lg">
                     <div class="icon"> <img src="<?php echo child_template_directory ?>/imgs/arroba.png" /></div>
                      <p>EMAIL DE CONTATO<br/>


                      <a href="mailto:contato@mammyporveramoraes.com.br"><span>contato@mammyporveramoraes.com.br</span></a></p>
                    </div>
                </div>
                <div class="footerwidget one_quarter">
                    <img src="<?php echo child_template_directory ?>/imgs/multmarcas.png"  class="  aligncenter img-responsive hidden-xs hidden-sm"/>

                     <div class="hidden-md hidden-lg">
                        <div class="icon">
                            <img src="<?php echo child_template_directory ?>/imgs/lupa.png" />
                        </div>
                        <p>MULTIMARCAS<br/>
                            Encontre um revendedor mais perto de você!</p>
                      </div>
                </div>
                <div class="footerwidget last one_quarter">
                    <img src="<?php echo child_template_directory ?>/imgs/anteriores.png"  class=" aligncenter img-responsive hidden-xs hidden-sm "/>
                    <div class="hidden-md hidden-lg">
                        <div class="icon">
                           <img src="<?php echo child_template_directory ?>/imgs/coracao.png" />
                        </div>
                      <p>VEJA NOSSAS COLEÇÕES ANTERIORES</p>
                    </div>
                </div>
            </footer>
            <?php /* if ( is_active_sidebar('footer_widgets') ) : ?>
            	<!-- footer -->
                <footer id="footer">
                    <?php if( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'Footer Widgets' ) ) : ?>
                		<?php // widgets load here ?>
                	<?php endif; ?>
                	
                	<!-- tweets -->
                    <?php if ( $modules['tweets'] === true ) : get_template_part('inc/twitter'); endif; ?>
                    <!-- /tweets -->
                </footer>
                <!-- /footer -->
            <?php endif;*/ ?>
    	</div>
    <?php endif; ?>

<?php if (!is_home() && !is_single() && !is_archive() && !is_search() && !is_404()) : ?>
    <script type="text/javascript">(function ($) {
            $(window).load(function () {
                $("#preloader").delay(1000).fadeOut(500);
            });
        })(jQuery);</script>
<?php endif; ?>

<!-- WP Footer Hook -->
<?php wp_footer(); ?>
</body>
</html>