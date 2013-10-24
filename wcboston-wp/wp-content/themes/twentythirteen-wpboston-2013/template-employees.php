<?php
//Template Name: Employees

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
						$employee_args = array(
							'post_type' => 'employees',
							'posts_per_page' => -1
							);
							?>

							<?php $loop = new WP_Query( $employee_args );
							while ( $loop->have_posts() ) : $loop->the_post();?>
							<!--do stuff here-->
							<div class="alignleft half">
								<h2><?php the_title(); //the cpt title?></h2>
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="alignleft half">
								<section class="title meta">
									<?php
									$title_text = get_post_meta(get_the_ID(),'title_text_box', true);
									$phone_text = get_post_meta(get_the_ID(),'phone_text_box', true);
									?>
									<h3><?php echo $title_text; ?></h3>
									<strong><?php echo $phone_text; ?></strong>
								</section>
								<section class="content">
									<?php the_content(); //the cpt content?>
								</section>
							</div>
						<?php endwhile; ?>
						<?php //wp_reset_postdata(); ?>
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