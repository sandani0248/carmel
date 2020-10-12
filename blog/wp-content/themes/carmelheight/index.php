<?php get_header(); ?>
	<section id="blog" style="background-color: #f9f9f9">
		<div id="0" class="container">
		    <div class="row">
                     <div class="col-sm-12">
                        <h2 class="text-center padding-top-0">THE BLOG</h2>
                     </div>
                  </div>
			<div class="row card-container">
				<div class="col-md-8">
					<div class="row">
					<?php if ( get_query_var('paged') ) { 
						$paged = get_query_var('paged'); 
					} else if ( get_query_var('page') ) {
						$paged = get_query_var('page'); 
					} else {
						$paged = 1; 
					}
					$temp = $wp_query;  // re-sets query
					$wp_query = null;   // re-sets query
					$args = array (
						'post_type' => 'post',
						'posts_per_page' =>9,
						'paged' => $paged,
						'order' => 'DESC'

					
					); 									  
					$wp_query = new WP_Query($args);
					if ( $wp_query->have_posts() ) {			
				    $i = 1; 
				    while($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="col-md-6 col-sm-6 col-xs-12 blogcard">
						<div class="a-post a-post-<?php echo $counter; ?>">
						
						
							
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<div class="box"> 
							<?php if($image[0]!='') { ?>
								<div class="gallery-thumb" style="background-image:url('<?php echo $image[0]; ?>');background-size: cover; height:230px; border-radius: 6px;box-shadow: 0 2px 15px 0 rgba(0,0,0,0.15);"></div> <?php } ?> 
								<!--<?php// echo do_shortcode('[supsystic-social-sharing id="1"]') ?>-->
								
								
									<div class="box-body white-bg">
									    	<h4 class="padding-bottom-15"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
									       <p class=""> 					       
								         <?php
												$char_limit = 100; //character limit
												$content = $post->post_content; //contents saved in a variable
												echo substr(strip_tags($content), 0, $char_limit);
												?>
									       </p>
									       	<hr>	
									       <div class="row">
                              <div class="col-sm-6">
                                 <span class="pull-left dateofpublish"> <i class="fa fa-calendar"></i>  <?php echo the_date();?></span>
                              </div>
                              <div class="col-sm-6" style="display: flex">
                                 <span class="pull-right social-links">
                                 <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                 <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                 <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                 </span>
                              </div>
                           </div>
									 
										
								</div>
							</div>
						</div>
					</div>
					<?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } 
					$i++; 
				    endwhile; ?>		
					</div>
					<nav class="pagination">
						<?php echo paginate(); 
						$wp_query = null;
						$wp_query = $temp; // Reset
						?>
					</nav>
			<?php } ?>		
				</div>
			    <div class="col-md-4"></div>
		    </div>								
        </div>		
	</section>
<?php get_footer(); ?>
 
