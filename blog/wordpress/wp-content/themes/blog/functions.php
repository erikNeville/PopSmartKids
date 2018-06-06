<?php
function base_pagination() {
    global $wp_query;

    $big = 999999999; // This needs to be an unlikely integer

    // For more options and info view the docs for paginate_links()
    // http://codex.wordpress.org/Function_Reference/paginate_links
    $paginate_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'mid_size' => 5,
		'prev_text'          => __('Previous   '),
		'next_text'          => __('   Next')
    ) );

    // Display the pagination if more than one page is found
    if ( $paginate_links ) {
        echo $paginate_links;
    }
}
function randomPost() { 
	$id = get_the_ID();
	$args = array(
		'post_type' => 'post',
		'orderby'   => 'rand',
		'post__not_in' => array($id),
		'posts_per_page' => 3, 
		);
	 
	$the_query = new WP_Query( $args );
	 
	if ( $the_query->have_posts() ) {
	 
	$string .= '<div class="row" id="blogRow">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$string .= '<div class="col-md-4 randomBlog">
							<div class="row">
								<div class="col-md-12">'.get_the_post_thumbnail().'
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 randomBlogTop">
								<h2 name="top">
									<a href='. get_permalink() .'>'.get_the_title() .'</a>
								</h2>
								</div>
							</div>
						</div>';
		}
		$string .= '</div>';
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
	 
	$string .= 'no posts found';
	}
	 
	return $string; 
} 
 
add_shortcode('wpb-random-posts','wpb_rand_posts');
add_filter('widget_text', 'do_shortcode'); 
function headerStyles(){
	wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0.2', 'all');
	wp_enqueue_style('websiteStyle1', 'http://smart2.icoolshow.net/css/style.css', array(), '1.0.1', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/blogstyle.css', array(), '1.0.9', 'all');	
}

function footerStyles(){	
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.0.1', true);
	wp_enqueue_script('blogJs', get_template_directory_uri().'/js/blogjs.js', array(), '1.0.0', 'all');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.0', true);	
}
add_action('wp_enqueue_scripts', 'headerStyles');
add_action('wp_enqueue_scripts', 'footerStyles');
add_theme_support( 'post-thumbnails' );
add_theme_support('html5',array('search-form')); 
remove_filter( 'the_content', 'wpautop' );

?>