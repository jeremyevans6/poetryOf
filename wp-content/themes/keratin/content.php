<?php
/**
 * @package Keratin
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

	<?php keratin_post_thumbnail(); ?>

	<?php if ( 'post' == get_post_type() ) : ?>
	<div class="entry-meta entry-meta-header">
		<ul>
			<li><i class="fa fa-clock-o"></i> <?php keratin_posted_on(); ?></li>
			<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<li><i class="fa fa-thumb-tack"></i> <span class="entry-featured"><?php esc_html_e( 'Featured', 'keratin' ); ?></span></li>
			<?php endif; ?>
		</ul>
	</div><!-- .entry-meta -->
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<a class="toPoem" href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	</a>
</article><!-- #post-## -->