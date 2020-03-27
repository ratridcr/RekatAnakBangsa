<?php

// matiin jquery bawaan wordpress di frontend
function dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            [ 'jquery-migrate' ]
        );
    }
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );

// insert js and css wordpress
function rekat_script()
{
  wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
  wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
  wp_enqueue_style( 'fa-style', get_template_directory_uri() . '/additionals/font-awesome/css/all.min.css');
  wp_enqueue_style( 'swipper-style', get_template_directory_uri() . '/additionals/swiper/css/swiper.min.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/additionals/css/style.css');
  wp_enqueue_script( 'jquery-new', 'https://code.jquery.com/jquery-3.4.1.min.js');
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');

  wp_enqueue_script( 'fa', get_template_directory_uri() . '/additionals/font-awesome/js/all.min.js');
  wp_enqueue_script( 'swipper', get_template_directory_uri() . '/additionals/swiper/js/swiper.min.js');
  wp_enqueue_script( 'mustache', get_template_directory_uri() . '/js/mustache.js', array(), '0.1' );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/additionals/js/script.js');

}

add_action( 'wp_enqueue_scripts', 'rekat_script' );

// hide not important
function remove_posts_menu() {
    remove_menu_page('edit.php');
    remove_menu_page('edit.php?post_type=page');
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_posts_menu');

add_filter('show_admin_bar', '__return_false');

// projects
function projects() {
  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Project', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Project' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No projects found' ),
    'not_found_in_trash' => __( 'No projects found in the Trash' ),
    'menu_name'          => 'Projects'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our project and project specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'thumbnail'),
    'has_archive'   => true,
  );
  register_post_type( 'project', $args ); 
}

add_action( 'init', 'projects' );


function project_field_render() {
    add_meta_box( 'custom_field', __( 'Data', 'data' ), 'project_field_callback', 'project' , 'normal', 'high');
}

add_action( 'add_meta_boxes', 'project_field_render' );

function project_field_callback( $post ) {
    include plugin_dir_path( __FILE__ ) . './form/project.php';
}


add_action('save_post_project', function ($post_id) {
  if (isset($_POST['image_project'])){
    update_post_meta($post_id, 'image_project', $_POST['image_project']);
  }
});

// end projects



// teams
function mustache_script( $hook ) {

  wp_enqueue_script( 'mustache', get_template_directory_uri() . '/js/mustache.js', array(), '0.1' );
}

add_action( 'admin_enqueue_scripts', 'mustache_script' );


function teams() {
  $labels = array(
    'name'               => _x( 'Teams', 'post type general name' ),
    'singular_name'      => _x( 'Team', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Team' ),
    'edit_item'          => __( 'Edit Team' ),
    'new_item'           => __( 'New Team' ),
    'all_items'          => __( 'All Teams' ),
    'view_item'          => __( 'View Team' ),
    'search_items'       => __( 'Search Teams' ),
    'not_found'          => __( 'No Teams found' ),
    'not_found_in_trash' => __( 'No Teams found in the Trash' ),
    'menu_name'          => 'Teams'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Team and Team specific data',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title'),
    'has_archive'   => true,
  );
  register_post_type( 'team', $args ); 
}

add_action( 'init', 'teams' );


function team_field_render() {
    add_meta_box( 'custom_field', __( 'Data', 'data' ), 'team_field_callback', 'team' , 'normal', 'high');
}

add_action( 'add_meta_boxes', 'team_field_render' );

function team_field_callback( $post ) {
  include plugin_dir_path( __FILE__ ) . './form/team.php';
}

add_action('save_post_team', function ($post_id) {
  if (isset($_POST['name'])){
    update_post_meta($post_id, 'name', $_POST['name']);
  }

  if (isset($_POST['dob'])) {
    update_post_meta($post_id, 'dob', $_POST['dob']);
  } 

  if (isset($_POST['image_team'])) {
    update_post_meta($post_id, 'image_team', $_POST['image_team']);
  }

  if (isset($_POST['value'])) {
    // filter data

    $dataInsert = array();


    // var_dump($_POST['value']);
    foreach ($_POST['value'] as $key => $value) {
        if ( empty($value['jabatan'])) {
            continue;
        }

        if (empty($value['deskripsi'])) {
            continue;
        }
        $dataInsert[] = $value;
    }


    update_post_meta($post_id, 'value', serialize($dataInsert));

  }
});

// end teams


// visi misi
function vision() {
  $labels = array(
    'name'               => _x( 'Visi Misi', 'post type general name' ),
    'singular_name'      => _x( 'Visi Misi', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Visi Misi' ),
    'edit_item'          => __( 'Edit Visi Misi' ),
    'new_item'           => __( 'New Visi Misi' ),
    'all_items'          => __( 'All Visi Misi' ),
    'view_item'          => __( 'View Visi Misi' ),
    'search_items'       => __( 'Search Visi Misi' ),
    'not_found'          => __( 'No Visi Misi found' ),
    'not_found_in_trash' => __( 'No Visi Misi found in the Trash' ),
    'menu_name'          => 'Visi Misi'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Visi Misi and Visi Misi specific data',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor'),
    'has_archive'   => true,
  );
  register_post_type( 'vision', $args ); 
}

add_action( 'init', 'vision' );

// visi misi end


// visi misi
function service() {
  $labels = array(
    'name'               => _x( 'Service', 'post type general name' ),
    'singular_name'      => _x( 'Service', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Service' ),
    'edit_item'          => __( 'Edit Service' ),
    'new_item'           => __( 'New Service' ),
    'all_items'          => __( 'All Service' ),
    'view_item'          => __( 'View Service' ),
    'search_items'       => __( 'Search Service' ),
    'not_found'          => __( 'No Service found' ),
    'not_found_in_trash' => __( 'No Service found in the Trash' ),
    'menu_name'          => 'Service'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Service and Service specific data',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title'),
    'has_archive'   => true,
  );
  register_post_type( 'service', $args ); 
}

add_action( 'init', 'service' );

// visi misi end

// general settings

// create custom plugin settings menu
add_action('admin_menu', 'general_menu');

function general_menu() {

  //create new top-level menu
  add_menu_page('General Setting', 'General', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , '', 9 );

  //call register settings function
  add_action( 'admin_init', 'register_general_menu' );
}


function register_general_menu() {
  //register our settings
  register_setting( 'general-settings-group', 'blogname' );
  register_setting( 'general-settings-group', 'blogdescription' );
  register_setting( 'general-settings-group', 'image_logo' );
  register_setting( 'general-settings-group', 'first_line' );
  register_setting( 'general-settings-group', 'second_line' );
  register_setting( 'general-settings-group', 'third_line' );


  register_setting( 'general-settings-group', 'image_1' );
  register_setting( 'general-settings-group', 'image_2' );
  register_setting( 'general-settings-group', 'image_3' );
  register_setting( 'general-settings-group', 'history_title' );
  register_setting( 'general-settings-group', 'history_sub_title' );
  register_setting( 'general-settings-group', 'history_description' );

  register_setting( 'general-settings-group', 'vision_title' );
  register_setting( 'general-settings-group', 'vision_sub_title' );
  register_setting( 'general-settings-group', 'vision_description' );

  register_setting( 'general-settings-group', 'service_title' );
  register_setting( 'general-settings-group', 'service_sub_title' );
  register_setting( 'general-settings-group', 'service_description' );

  register_setting( 'general-settings-group', 'project_title' );
  register_setting( 'general-settings-group', 'project_sub_title' );

  register_setting( 'general-settings-group', 'team_title' );
  register_setting( 'general-settings-group', 'team_sub_title' );

  register_setting( 'general-settings-group', 'phone' );
  register_setting( 'general-settings-group', 'address' );
  register_setting( 'general-settings-group', 'email' );
  register_setting( 'general-settings-group', 'facebook' );
  register_setting( 'general-settings-group', 'instagram' );
  register_setting( 'general-settings-group', 'twitter' );



}

function my_cool_plugin_settings_page() {
  include plugin_dir_path( __FILE__ ) . './form/general.php';
}



function SortByKeyValue($data, $sortKey, $sort_flags=SORT_ASC)
{
    if (empty($data) or empty($sortKey)) return $data;

    $ordered = array();
    foreach ($data as $key => $value)
        $ordered[$value[$sortKey]] = $value;

    ksort($ordered, $sort_flags);

    return array_values($ordered);
}