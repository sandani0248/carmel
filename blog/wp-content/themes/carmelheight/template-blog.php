<?php
/*Template Name: Blog Home Template
*/

get_header();

?>



	<section id="blog" class="">
		<div id="0" class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
					<?php if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
					$temp = $wp_query;  // re-sets query
					$wp_query = null;   // re-sets query
					$args = array (
						'post_type' => 'post',
						'posts_per_page' =>6,
						'paged' => $paged,
						'order' => 'ASC'

					
					); 									  
					$wp_query = new WP_Query($args);
					if ( $wp_query->have_posts() ) {			
				    $i = 1; while($wp_query->have_posts()) : $wp_query->the_post();?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 news col-centered">
						<div class="a-post a-post-<?php echo $counter; ?>">
						     
						
							<br/>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<div class=""> 
							<?php if($image[0]!='') { ?>
								<div class="gallery-thumb" style="background-image:url('<?php echo $image[0]; ?>');background-size: cover; height: 300px;background-position:85%"></div> <?php } ?>
								<div class="box_blog">
								    	<p class="publish_date"><i class="fa fa-calendar" style="padding-right:5px"></i><?php echo the_date();?> </p>
									<h4><?php the_title(); ?></h4>
						
								<!--<?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?>-->
									<div class="box-body">
									    <?php $content = get_the_excerpt();
									
echo mb_strimwidth($content, 0,100, "...");

?> 
									  <a class="btn  btn-sm read-more-btn" href="<?php the_permalink(); ?>">Read More
									  <span class="plus_read_more" style="padding-left:10px"><i class="fa fa-plus-circle "></i></span>
									  </a>
									
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } 
					$i++; endwhile; ?>		
					</div>
					<nav class="pagination">
						<?php echo paginate(); 
						$wp_query = null;
						$wp_query = $temp; // Reset
						?>
					</nav>
			<?php } ?>		
				
		    </div>								
        </div>		
	</section>
	<script>
	     $(document).ready(function(e){
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
     alert();
        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        e(".button-dropdown .dropdown-menu").hide();
        e(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
      
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
    })

     
    
              window.onscroll = function() {myFunction()};
         
         var header = document.getElementById("header");
         var sticky = header.offsetTop;
         
         function myFunction() {
          
           if (window.pageYOffset > sticky) {
            $("#header").addClass("sticky");
           } else {
              $("#header").removeClass("sticky");
           }
         }
         
          $(".main-menu-toggle").click(function()
          {
         
             $(".main-menu-items").toggle();
             var elem = $(this);
         if (elem.hasClass('open')) {
         $("#menu-overlay").removeClass('showoverlay');
         $("#mobile-main-menu").removeClass('show');
         $('.main-menu-toggle').removeClass('open');
         }
         else {
         $("#mobile-main-menu").addClass('show');
         $('.main-menu-toggle').addClass('open');
         $("#menu-overlay").addClass('showoverlay');
         }
          });
         
          (".main-menu-toggle").click(function () {
         
         alert();
         
         });
            // body...
         })
	</script>
<?php
get_footer();
?>

