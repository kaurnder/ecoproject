<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  
add_action( 'wp_enqueue_scripts', 'astra_child_style' );
    function astra_child_style(){
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
        wp_enqueue_style('style', get_stylesheet_directory_uri().'/css/style.css?' . strtotime('now'));
        wp_enqueue_style('Bootstrap-style',get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array('child-style'));
        wp_enqueue_style('font-awesome-style', get_stylesheet_directory_uri() . '/css/font-awesome.css', array('child-style'));
        wp_enqueue_script('Bootstrap-js', get_stylesheet_directory_uri(). '/js/bootstrap.js', array(), false, true);

        //ajax form submit 
        wp_enqueue_script('jquery');
        wp_enqueue_script('ajax', get_stylesheet_directory_uri() . '/js/ajaxf.js?' . strtotime('now'));
        wp_localize_script('ajax', 'ajaxurl', admin_url('admin-ajax.php'));
       } 
       add_action('wp_ajax_update_user_profile', 'update_user_profile');
       add_action('wp_ajax_nopriv_update_user_profile', 'update_user_profile');

      function update_user_profile(){
        $user_id = get_current_user_id();
         // Validation example (check if name fields are empty)
            if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['display_name'])) {
                wp_send_json_error(array(
                    'message' => 'All fields are required.'
                ));
                wp_die();
            }
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';
        require_once ABSPATH . 'wp-admin/includes/media.php';
    
        if (!empty($_FILES['img'])) {
            $uploaded = media_handle_upload('img', 0);
            if (!is_wp_error($uploaded)) {
                update_user_meta($user_id, 'profile_picture',$uploaded);
            } else{
                wp_send_json_error(array(
                    'message' => 'Error uploading image:' . $uploaded->get_error_message() . ''
                ));
            }
        }
        wp_update_user([
            'ID'           => $user_id,
            'first_name'   => sanitize_text_field($_POST['first_name']),
            'last_name'    => sanitize_text_field($_POST['last_name']),
            'display_name' => sanitize_text_field($_POST['display_name']),
        ]);

       wp_send_json_success(array('message' => 'profile sucessfully update'));
        wp_die(); // End AJAX request properly
    }


    //update user password
    add_action('wp_ajax_reset_user_password', 'reset_user_password');
    add_action('wp_ajax_nopriv_reset_user_password', 'reset_user_password'); // Allow guests

    function reset_user_password() {
    $user_id = get_current_user_id();

    // Retrieve passwords from AJAX request
    $current_password = sanitize_text_field($_POST['current_password']);
    $new_password = sanitize_text_field($_POST['new_password']);
    $confirm_password = sanitize_text_field($_POST['confirm_password']);

    // Validate passwords
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        wp_send_json_error(['message' => 'All fields are required.']);
        wp_die();
    }

    if ($new_password !== $confirm_password) {
        wp_send_json_error(['message' => 'New password and confirmation do not match.']);
        wp_die();
    }

    // Verify current password
    $user = get_user_by('ID', $user_id);
    if (!wp_check_password($current_password, $user->user_pass, $user_id)) {
        wp_send_json_error(['message' => 'Current password is incorrect.']);
        wp_die();
    }

    // Update password
    wp_set_password($new_password, $user_id);
    wp_send_json_success(['message' => 'Password updated successfully.']);
    wp_die();
}
function create_custom_post_type() {
    $args = array(
        'labels'      => array(
            'name'          => 'Projects',  // Name in Admin
            'singular_name' => 'Project',
        ),
        'public'      => true,  // Make it visible
        'has_archive' => true,  // Enable archives
        'supports'    => array('title', 'editor', 'thumbnail'), // Enable features
        'menu_icon'   => 'dashicons-portfolio', // Icon in Admin
    ); 

    register_post_type('projects', $args);
}

add_action('init', 'create_custom_post_type');

function register_category_taxonomy() {
    register_taxonomy('category', array('projects'), array(
        'hierarchical' => true, // true = category-style, false = tag-style
        'label' => 'Categories',
        'singular_label' => 'Category',
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'category'),
        'show_in_rest' => true, // optional: enables Gutenberg & REST support
    ));
}
add_action('init', 'register_category_taxonomy');



function register_Types_taxonomy() {
    register_taxonomy('Type', array('projects'), array(
        'hierarchical' => true, // true = category-style, false = tag-style
        'label' => 'Types',
        'singular_label' => 'Types',
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'Types'),
        'show_in_rest' => true, // optional: enables Gutenberg & REST support
    ));
}
add_action('init', 'register_Types_taxonomy');

function register_Experience_Level_taxonomy() {
    register_taxonomy('Experienc-Level', array('projects'), array(
        'hierarchical' => true, // true = category-style, false = tag-style
        'label' => 'Experience-Level',
        'singular_label' => 'Experience_Level',
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'experience_level'),
        'show_in_rest' => true, //optional: enables Gutenberg & REST support
    ));
}
add_action('init', 'register_Experience_Level_taxonomy');


//create new col in custom post type
add_filter('manage_projects_posts_columns', 'add_location_columns');
function add_location_columns($columns) {
    $columns['job_location'] = 'Remote_status'; // Add your new column
    return $columns;
}

//show data in column 
function show_event_column_data($column, $post_id) {
    if ($column === 'job_location') {
        $location = get_post_meta($post_id, 'remote_status', true);
        echo esc_html($location ? $location : '—');
    }
}
add_action('manage_projects_posts_custom_column', 'show_event_column_data', 10, 2);


//get unique value of custom post data
function get_meta_values($meta_key) {
    global $wpdb;
    $results = $wpdb->get_col($wpdb->prepare("
        SELECT DISTINCT meta_value 
        FROM {$wpdb->postmeta} 
        WHERE meta_key = %s 
        AND meta_value != ''
    ", $meta_key));

    return $results;
}


//add dropdown selector to display meta value
function add_custom_filter_dropdown() {
    global $typenow;
    
    if ($typenow === 'projects') { // Ensure correct CPT
        $meta_key = 'remote_status'; // Replace with your actual meta key
        $values = get_meta_values($meta_key);
        
        if (!empty($values)) {
            echo '<select name="' . esc_attr($meta_key) . '" id="filter-by-meta">';
            echo '<option value="">' . __('Filter Remote_status', 'textdomain') . '</option>';

            foreach ($values as $value) {
                $selected = (isset($_GET[$meta_key]) && $_GET[$meta_key] == $value) ? 'selected' : '';
                echo '<option value="' . esc_attr($value) . '" ' . $selected . '>' . esc_html($value) . '</option>';
            }
            echo '</select>';
        }
    }
}
add_action('restrict_manage_posts', 'add_custom_filter_dropdown');

//filter this selector using get-pre 
function filter_posts_by_meta($query) {
    global $pagenow;
    
    if ($pagenow == 'edit.php' && isset($_GET['remote_status']) && $_GET['remote_status'] != '') {
        $query->query_vars['meta_query'] = array(
            array(
                'key'   => 'remote_status',
                'value' => sanitize_text_field($_GET['remote_status']),
                'compare' => '='
            )
        );
    }
}
add_action('pre_get_posts', 'filter_posts_by_meta');

function remove_custom_post_type_category_column($columns) {
    unset($columns['categories']); // Removes default categories column
    unset($columns['taxonomy-Type']); 
    // unset($columns['taxonomy-Experienc-Level']); 
    return $columns;
}
add_filter('manage_edit-projects_columns', 'remove_custom_post_type_category_column');

//create meta box
add_action('add_meta_boxes', 'create_custom_meta_box');
function create_custom_meta_box() {
    add_meta_box(
        'custom_meta_box', 
        'Custom Data', 
        'display_custom_meta_box', 
        'projects', // Change 'post' to 'your_custom_post_type' if needed
        'normal',
        'high'
    );
}

function display_custom_meta_box($post) {
    $custom_value = get_post_meta($post->ID, '_custom_key', true); // Fetch existing data
    echo '<label for="custom_data">Enter Custom Data:</label>';
    echo '<input type="text" id="custom_data" name="custom_data" value="' . esc_attr($custom_value) . '" />';
}


echo "Have a nice day";
echo "inderjeet kaur ";
echo "have a great day";
echo "jhgjrt";
echo "hlo njuy";








    

