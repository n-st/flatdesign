<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="ninecol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
									<time class="updated article-date" datetime="<?=get_the_time('Y-m-j')?>" pubdate>
										<span class="article-date-day"><?=get_the_time('j')?></span>
										<span class="article-date-month"><?=get_the_time('M')?></span>
										<span class="article-date-year"><?=get_the_time('Y')?></span>
									</time>

								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer clearfix">
									<div class="categories first">
										<span class="categories-title"> <?php echo __('Categories', 'bonestheme') ?>:</span>
										<span class="the-categories"> <?php echo get_the_category_list(', ') ?></span>
									</div>
									<div class="tags last">
										<span class="tags-title"><?php echo __('Tags', 'bonestheme') ?>:</span>
										<span class="the-tags"> <?php echo get_the_tag_list('', ', ', '') ?></span>
									</div>
								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

							</article> <!-- end article -->

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p></p>
									</footer>
							</article>

						<?php endif; ?>

					</div> <!-- end #main -->

					<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
