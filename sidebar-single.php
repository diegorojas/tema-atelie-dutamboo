<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

?>
		<div id="sidebar-valores" class="widget-area" role="complementary">
		
						<?php
				// Pega os dados e salva em vari?veis
                $metabrasa_url = get_post_meta($post->ID,'metabrasa_url',TRUE);
                $metabrasa_url = filter_var($metabrasa_url, FILTER_SANITIZE_URL);
				?>
                
				<?php if (empty($metabrasa_url)) {
                } else { ?>
                <div id="box-single">
				<h1 class="entry-title">Valor</h1>
				R$ <?php echo $metabrasa_url; ?>
				</div><!-- #box-single -->
				<?php }	?>
			

		</div><!-- #sidebar-valores -->