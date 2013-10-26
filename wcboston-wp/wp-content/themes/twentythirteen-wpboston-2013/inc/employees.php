<?php

add_action( 'init', 'register_cpt_employees' );

function register_cpt_employees() {

    $labels = array( 
		'name'               => __( 'Employees', 'test site' ),
		'singular_name'      => __( 'Employee', 'test site' ),
		'add_new'            => _x( 'Add New Employee', 'Employee', 'test site' ),
		'add_new_item'       => __( 'Add New Employee', 'test site' ),
		'edit_item'          => __( 'Edit Employee', 'test site' ),
		'new_item'           => __( 'New Employee', 'test site' ),
		'view_item'          => __( 'View Employee', 'test site' ),
		'search_items'       => __( 'Search Employees', 'test site' ),
		'not_found'          => __( 'No Employees found', 'test site' ),
		'not_found_in_trash' => __( 'No Employees found in Trash', 'test site' ),
		'parent_item_colon'  => __( 'Parent Employee:', 'test site' ),
		'menu_name'          => __( 'Employees', 'test site' ),
    );

    $args = array( 
		'labels'              => $labels,
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post', 
		'supports'            => array( 
									'title', 'editor', 'thumbnail'
								),
    );

    register_post_type( 'employees', $args );

}

add_action( 'add_meta_boxes', 'title_meta_box' );
add_action( 'add_meta_boxes', 'phone_meta_box' );

function title_meta_box() {
	add_meta_box( 'title_id', 'Employee Title', 'title_box', 'employees', 'normal', 'high' );
}

function title_box( $post ) {
$values = get_post_custom( $post->ID );
$title = isset( $values['title_text_box'] ) ? esc_attr( $values['title_text_box'][0] ) : '';
?>
<p>
  <label for="title_text_box">Position</label>
  <input type="text" name="title_text_box" id="title_text_box" value="<?php if(empty($title)) { /* do nothing */ } else { echo $title; }; ?>" />
</p>
<?php
}

function phone_meta_box() {
	add_meta_box( 'phone_id', 'Employee phone', 'phone_box', 'employees', 'normal', 'high' );
}

function phone_box( $post ) {
$values = get_post_custom( $post->ID );
$phone = isset( $values['phone_text_box'] ) ? esc_attr( $values['phone_text_box'][0] ) : '';
?>
<p>
  <label for="phone_text_box">Position</label>
  <input type="text" name="phone_text_box" id="phone_text_box" value="<?php if(empty($phone)) { /* do nothing */ } else { echo $phone; }; ?>" />
</p>
<?php
}






// Saves the content of our meta box
add_action( 'save_post', 'save_meta_details_employees' );
 
// WP meta box attributes
function save_meta_details_employees() {
    global $post;
    // Skip auto save
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }
	// Check for your post type
    if( $post->post_type == 'employees' ) {
        if( isset($_POST['title_text_box']) ) { update_post_meta( $post->ID, 'title_text_box', $_POST['title_text_box'] );}
        if( isset($_POST['phone_text_box']) ) { update_post_meta( $post->ID, 'phone_text_box', $_POST['phone_text_box'] );}
    }
}
?>
