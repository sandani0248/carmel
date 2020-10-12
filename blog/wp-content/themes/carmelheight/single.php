<?php
   get_header();
   ?>
  
<section class="p-0">
   <div class="container blog_detail">
      <div class="row">
         <div class="col-sm-12">
             	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
             	
            <h2><?php echo the_title(); ?></h2>
            	<?php if($image[0]!='') { ?>
           <!--  <div class="gallery-thumb" style="background-image:url('<?php echo $image[0]; ?>');background-size: cover;height:80vh"></div> -->
             
             <img class="img-responsive" src="<?php echo $image[0];?>">

            <?php } ?> 
          
            <div >
            <div class="blog_strip" style="background-color:#1F3C64;">
                 <div style="width: 100%">
                <div class="row">
                                    <div class="col-xs-12 social_user " style="color:#fff;padding:20px 30px">
                                        
                                       <i class="fa fa-user"></i> 
                                       <span > Admin </span> 
                                       <i class="fa fa-calendar" ></i> 
                                      <span>  <?php echo get_the_date();?>  </span>
                                    </div>
                            
                                 </div>
                                 
                                 </div>
            </div>
             <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    setPostViews(get_the_ID());
                    $M = get_post_meta(get_the_ID(), 'M', true);
                    $d = get_post_meta(get_the_ID(), 'd', true);
            ?>
                <br>
                 <div class="article-content">
            <?php
               if (the_content() != "")
                   echo the_content();
               ?>
            <?php //comments_template();  
               ?>
         </div>
         
          <button class="btn btn-back"><a href="https://carmelheights.in/blog/" >
                           <i class="fa fa-arrow-left"></i>
          Back to Blogs</a></button>
                           
               <?php
         endwhile;
         endif;
         ?>
      <?php
         global $post;
         ?>
            
            </div>
         </div>
      </div>
   </div>
</section>

<?php
   get_footer();
   ?>