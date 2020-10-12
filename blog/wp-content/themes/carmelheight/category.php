<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 <section class="p-0 home-slider home-slider-panel">
         <div>
            <div class="slider-wrapper slider-2" style="background: url(<?php echo get_template_directory_uri();?>/img/InAcres-story-banner.png);background-size:cover;min-height: 519px;background-position: right">
            </div>
         </div>
      </section>
        <section class="breadcrumbs">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <ul class="breadcrumbs-pts text-darkgreen">
                    
                     
                     <li> Blog </li> //
                      <li>Blog Category</li>
                  </ul>
               </div>
            </div>
         </div>
           <img src="<?php echo get_template_directory_uri();?>/img/straight-line.png" class="img-fluid">
      </section>
<section id="primary" class="site-content">
    <div class="container">
<div id="content" role="main">

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
<div class="archive-header">
<h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>
 
 
<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</div>
 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" style="color:#4f8039"><?php the_title(); ?></a></h2>
<p><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> </p>
 
<div class="entry">
<?php the_content(); ?>
 
 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>
 
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</div>
</section>
 
 

<?php get_footer(); ?>