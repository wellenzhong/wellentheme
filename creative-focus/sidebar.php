
				<!-- <div class="side-box side-hotnews">
					https://www.ludou.org/create-wordpress-themes-sidebar.html
                    <h3 class="module-title">最新文章</h3>
                    <ol>
						<?php get_archives("postbypost", 10); ?>
                    </ol>
				</div> -->
				<div class="side-box side-hotnews">
				<?php if ( !function_exists('dynamic_sidebar') 
                            || !dynamic_sidebar('Second_sidebar') ) : ?>        
						<h3 class="module-title">最新文章</h3>
						<ol>
							<?php
								$posts = get_posts('numberposts=6&orderby=post_date');
								foreach($posts as $post) {
									setup_postdata($post);
									echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
								}
								$post = $posts[0];
							?>
						</ol>
					<?php endif; ?>
				</div>
				<div class="side-box side-hotnews">
                    <h3 class="module-title">热门文章排行</h3>
                    <ol>
						<?php 
						$hot_posts=get_posts('numberposts=10&order=ASC&orderby=comment_count');
						foreach( $hot_posts as $post ) : 
						?> 
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
						<?php endforeach; ?> 
                    </ol>
                </div>
                <div class="side-box side-meta clearfix">
                    <h3 class="module-title">热门话题</h3>
                    <ul>
                        <li><a href="#">互联网</a></li>
                        <li><a href="#">javascript</a></li>
                        <li><a href="#">hello</a></li>
                        <li><a href="#">html</a></li>
                        <li><a href="#">互联网</a></li>
                        <li><a href="#">互联网</a></li>
                        <li><a href="#">互联网</a></li>
                        <li><a href="#">互联网</a></li>
                        <li><a href="#">互联网</a></li>
                        <li><a href="#">互联网</a></li>
                    </ul>
                </div>
                <div class="side-box side-recommand clearfix">
                    <h3 class="module-title">推荐资讯</h3>
                    <ul>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                        <li>
                            <div class="img"><img src="./assets/images/5b95d6824474f.jpg" alt=""></div>
                            <div class="text"><a href="#">全球手机市场尽显萧条之像，国产手机厂商如何逆流而上？</a></div>
                        </li>
                    </ul>

                </div>
