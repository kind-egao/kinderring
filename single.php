<?php get_header(); ?>


      <p class="pageTitle">クリニックだより</p>
      <div class="inner">
	      
	      

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article>
				

          <h1 class="subTitle">
	          <span><?php the_time('Y年n月j日（D）'); ?></span>
	          <br><?php the_title(); ?></h1>
		
				<p class="txt"><?php echo nl2br(get_the_content()); ?></p>
			</article>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

<!--
	<div class="pagenation">
		<div class="prev"><?php previous_post_link("%link","&lt; 前へ",false); ?></div>
		<div class="next"><?php next_post_link("%link","次へ &gt;",false); ?></div>
	</div>
-->


        <aside class="side-area">
          <div class="sinner">
            <div class="sec-side">
              <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">クリニックだより一覧</a></h2>
              <ul class="recent-list">
               
				<?php query_posts('post_type=post&showposts=-1'); ?>		
				<?php if (have_posts()):while(have_posts()):the_post(); ?>		
				<li>		
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">	
				<time><?php the_time('Y年n月j日（D）'); ?></time>
				<h3><?php the_title(); ?></h3>						
				</a>
				</li>		
				<?php endwhile; endif; ?>		
				<?php query_posts($query_string); ?>		

              </ul>
            </div>
          </div>
        </aside>
</div>
<!-- inner -->
<?php get_footer(); ?>