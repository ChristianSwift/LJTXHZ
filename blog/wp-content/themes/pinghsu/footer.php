<footer id="footer" class="footer ">
<div class="footer-social">
	<div class="footer-container clearfix">
		<div class="social-list">
			<?php $menuParameters = array('container'	=> false,'echo'	=> false,'items_wrap' => '%3$s','depth'	=> 0,'theme_location' => 'nav2',);echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );?>
		</div>
	</div>
</div>
<div class="footer-meta">
	<div class="footer-container">
		<div class="meta-item meta-copyright">
			<div class="meta-copyright-info">
				<a onclick="location='http://www.ljtxhz.com'" href="#" class="info-logo"><?php if ( !get_option('footer_logo_image') ) { bloginfo( 'name' ); } else { echo '<img src="' . get_option('footer_logo_image') .'">';} ?></a>
				<div class="info-text">
					<p id="chakhsu"></p>
					<p class="f_bq">
						Powered by 
						<a href="http://www.dingnaiwen.xyz" target="_blank" rel="nofollow" class="banquan">ChristianSwift</a>
					</p>
					<p>&copy; <?php esc_attr_e(date('Y')); ?> ♥ <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
				</div>
			</div>
		</div>
		<div class="meta-item meta-posts">
			<h3 class="meta-title">最近文章</h3>
			<?php $rand_posts = get_posts('numberposts=5&orderby=date');foreach($rand_posts as $post) : ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endforeach;?>
		</div>
		<div class="meta-item meta-comments">
			<h3 class="meta-title">最近评论</h3>
			<?php
			$comments = get_comments('status=approve&number=5&order=asc');
			foreach($comments as $comment) :
				$output =  '<li><a href="' . esc_url( get_comment_link($comment->comment_ID) ) . '">' . $comment->comment_content . '</a></li>';
			echo $output;
			endforeach;?>
		</div>
	</div>
</div>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/js/headroom.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/instantclick.min.js"></script>
<script data-no-instant>InstantClick.on('change',function(isInitialLoad){var blocks=document.querySelectorAll('pre code');for(var i=0;i<blocks.length;i++){hljs.highlightBlock(blocks[i])}if(isInitialLoad===false){if(typeof ga!=='undefined')ga('send','pageview',location.pathname+location.search);if(typeof MathJax!=='undefined'){MathJax.Hub.Queue(["Typeset",MathJax.Hub])}}});InstantClick.init('mousedown');</script>
<?php wp_footer(); ?>
</body>
</html>