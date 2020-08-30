<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blog_Bank
 */
$bbank_classic_blog_header = get_theme_mod( 'bbank_blog_header', 'center');
$bbank_classic_categories_list = get_the_category_list( esc_html__( ', ', 'blog-bank-classic' ) );
$bbank_classic_tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'blog-bank-classic' ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	      <header class="<?php if(!is_single()): ?>bfade<?php endif; ?> text-header text-<?php echo esc_attr($bbank_classic_blog_header); ?> bbl-header"> 
                                <?php if($bbank_classic_categories_list && 'post' === get_post_type()): ?>
                                    <div class="post-meta">
                                        <span class="post-cat"><i class="fa fa-book"></i> <?php echo wp_kses_post($bbank_classic_categories_list); ?></span>
                                    </div>
                                    <?php endif; ?>
                                <?php if ( is_singular() ) :
			the_title( '<h2>', '</h2>' );
		else :
			the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
                            <?php if ( 'post' === get_post_type() ) : ?>
                                <div class="post-meta"> 
                                   <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><span class="post-author"><i class="zmdi zmdi-account-circle"> <?php echo esc_html(get_the_author_meta( 'display_name')); ?></i></span></a>
                                   
                                  <?php blog_bank_comment_post(); ?> 
                                </div>
                            <?php endif; ?>
                            </header>
                             <div class="<?php if(!is_single()): ?>bfade<?php endif; ?> content-media"> 
                                <?php if(has_post_thumbnail()): ?>
                                <?php blog_bank_post_thumbnail(); ?>
                                
                            <?php endif; ?>
                            </div>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="redmore"><?php esc_html_e('Continue Reading...','blog-bank-classic'); ?></a>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
