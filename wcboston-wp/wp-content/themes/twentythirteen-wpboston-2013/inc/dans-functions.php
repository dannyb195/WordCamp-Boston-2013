<?php
//include 'employees.php';

// add_action( 'init', 'register_cpt_example_cpt' );

// function register_cpt_example_cpt() {

// 	$labels = array( 
// 		'name'               => __( 'Example CPTs', 'wordcamp boston 2013' ),
// 		'singular_name'      => __( 'Example CPT', 'wordcamp boston 2013' ),
// 		'add_new'            => _x( 'Add New CPT', 'I am Meta Box', 'wordcamp boston 2013' ),
// 		'add_new_item'       => __( 'Add New CPT', 'wordcamp boston 2013' ),
// 		'edit_item'          => __( 'Edit CPT', 'wordcamp boston 2013' ),
// 		'new_item'           => __( 'New CPT', 'wordcamp boston 2013' ),
// 		'view_item'          => __( 'View CPT', 'wordcamp boston 2013' ),
// 		'search_items'       => __( 'Search Example CPT', 'wordcamp boston 2013' ),
// 		'not_found'          => __( 'No Example CPT found', 'wordcamp boston 2013' ),
// 		'not_found_in_trash' => __( 'No Example CPT found in Trash', 'wordcamp boston 2013' ),
// 		'parent_item_colon'  => __( 'Parent CPT:', 'wordcamp boston 2013' ),
// 		'menu_name'          => __( 'Example CPT', 'wordcamp boston 2013' ),
// 		);

// 	$args = array( 
// 		'labels'              => $labels,
// 		//'hierarchical'        => false,
// 		// 'description'         => 'description',
// 		// 'taxonomies'          => array( 'category' ),
// 		'public'              => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		// 'menu_position'       => 5,
// 		//'menu_icon'         => '',
// 		'show_in_nav_menus'   => true,
// 		'publicly_queryable'  => true,
// 		'exclude_from_search' => false,
// 		'has_archive'         => true,
// 		'query_var'           => true,
// 		'can_export'          => true,
// 		'rewrite'             => true,
// 		'capability_type'     => 'post', 
// 		'supports'            => array( 
// 			'title', 'editor', 'author', 'thumbnail', 'revisions'
// 			),
// 		);

// 	register_post_type( 'example_cpt', $args );

// }


// add_action( 'add_meta_boxes', 'example_meta_box' );
// function example_meta_box() {
// 	add_meta_box( 'example_id', 'example meta box', 'example_box', 'example_cpt', 'normal', 'high' );
//}

function example_box( $post ) {
	$values = get_post_custom( $post->ID );
	$text = isset( $values['example_text'] ) ? esc_attr( $values['example_text'][0] ) : ”;
	?>
	<p>
		<label for="example_text">This is fun</label>
		<input type="text" name="example_text" id="example_text" value="<?php $example_text = get_post_meta(get_the_ID(),'example_text', true); if(empty($example_text)) { ?><?php } else { ?><?php echo $text; ?><?php } ?>" />
	</p>
	<?php
}


// add_action( 'add_meta_boxes', 'wc_example_meta_box' );
// function wc_example_meta_box() {
// 	add_meta_box( 'wc_example_id', 'WC TITLE', 'wc_example_box', 'product', 'normal', 'high' );
// }

function wc_example_box( $post ) {
	$values = get_post_custom( $post->ID );
	$text = isset( $values['wc_text_box'] ) ? esc_attr( $values['wc_text_box'][0] ) : ”;
	?>
	<p>
		<label for="wc_text_box">I am a custom meta box</label>
		<input type="text" name="wc_text_box" id="wc_text_box" value="<?php $wc_text_box = get_post_meta(get_the_ID(),'wc_text_box', true); if(empty($wc_text_box)) { ?><?php } else { ?><?php echo $text; ?><?php } ?>" />
	</p>
	<?php
}
?>


<?php
// Saves the content of our meta box
add_action( 'save_post', 'save_meta_details' );

// WP meta box attributes
function save_meta_details() {
	global $post;
    // Skip auto save
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// Check for your post type
	if( $post->post_type == 'example_cpt' ) {
		if( isset($_POST['example_text']) ) { update_post_meta( $post->ID, 'example_text', $_POST['example_text'] );}
	}

	if( $post->post_type == 'product' ) {
		if( isset($_POST['wc_text_box']) ) { update_post_meta( $post->ID, 'wc_text_box', $_POST['wc_text_box'] );}
	}
}
?>