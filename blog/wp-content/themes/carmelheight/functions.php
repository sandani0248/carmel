<?php
register_sidebar(array(
	'name'          => __( 'Sidebar', 'new' ),
	'id'            => 'sidebar-1',
	'description'   => 'Global Sidebar through out the website.',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ));

//hide unwanted profile fields for users
add_filter('user_contactmethods','hide_profile_fields',10,1);
function hide_profile_fields( $contactmethods ) {
	unset($contactmethods['aim']);
	unset($contactmethods['jabber']);
	unset($contactmethods['yim']);
	return $contactmethods;
}

//display thumbnails in rss feed
function rss_post_thumbnail($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
	$content = '<p>' . get_the_post_thumbnail($post->ID) .
	'</p>' . get_the_content();
	}
	return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
 
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
 
// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}

function paginate() {
		global $wp_query, $wp_rewrite;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

		$pagination = array(
		    'base' => @add_query_arg('page','%#%'),
		    'format' => '',
		    'total' => $wp_query->max_num_pages,
		    'current' => $current,
		    'show_all' => true,
		    'type' => 'list',
		    'next_text' => '►',
		    'prev_text' => '◄'
		    );

		if( $wp_rewrite->using_permalinks() )
		    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 'page', get_pagenum_link( 1 ) ) ) . '?page=%#%/', 'paged' );


		if( !empty($wp_query->query_vars['s']) )
		    $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

		echo paginate_links( $pagination );
	}


	$texturized_text = array(
    'comment_author', 'term_name', 'link_name', 'link_description', 'link_notes', 'bloginfo', 'wp_title', 'widget_title',
    'single_post_title', 'single_cat_title', 'single_tag_title', 'single_month_title', 'nav_menu_attr_title', 'nav_menu_description',
    'term_description', 'the_title', 'the_content','the_excerpt', 'comment_text', 'list_cats'
);
foreach ( $texturized_text as $text ) {
    remove_filter( $text, 'wptexturize' );
}



/*adding bootstrap image class to all images*/
function add_bootstrap_image_class($attr) {
  remove_filter('wp_get_attachment_image_attributes','add_bootstrap_image_class');
  $attr['class'] .= ' img-responsive';
  return $attr;
}
add_filter('wp_get_attachment_image_attributes','add_bootstrap_image_class');

/*remove [...] in excerpt*/
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_theme_support( 'post-thumbnails' );

add_filter('get_image_tag_class','wpse302130_add_image_class'); function wpse302130_add_image_class ($class){ $class .= ' img-fluid'; return $class; }
