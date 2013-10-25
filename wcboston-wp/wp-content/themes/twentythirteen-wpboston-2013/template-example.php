<?php
//Template Name: CPT Example

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">


		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry-content">
					<h1><?php the_title(); //the page title?></h1>
					<?php the_content(); //the page content?>


					<div class="cpt-contain">
						<?php
						$example_args = array(
							'post_type' => 'example_cpt',
							'posts_per_page' => -1
							);
							?>

							<?php $loop = new WP_Query( $example_args );
							while ( $loop->have_posts() ) : $loop->the_post();?>
								<!--do stuff here-->
								<h2><?php the_title(); //the cpt title?></h2>
								<section class="content"><?php the_content(); //the cpt content?></section>
								<section class="meta_one">
									<?php $example_text = get_post_meta(get_the_ID(),'example_text', true);
									echo $example_text;
									?>
								</section>
							<?php endwhile; ?>
					</div>
				</div><!-- .entry-content -->

			<?php endwhile; ?>


			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</article><!-- #post -->

		<?php comments_template(); ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>