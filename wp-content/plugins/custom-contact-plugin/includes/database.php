<?php
// database.php
 
// Create database table on plugin activation
function custom_contact_plugin_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contacts';
    $table_name1 = $table_name;
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        address VARCHAR(255) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
    echo "<h1>created</h1>";
}

// Hook to create database table on plugin activation
register_activation_hook( __FILE__, 'custom_contact_plugin_create_table' );
 
// Function to handle form submission and save contact information to database
function custom_contact_plugin_save_contact() {
    if ( isset( $_POST['submit_contact'] ) ) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'contacts';
        $name = sanitize_text_field( $_POST['name'] );
        $address = sanitize_text_field( $_POST['address'] );
        $phone = sanitize_text_field( $_POST['phone'] );
        $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'address' => $address,
                'phone' => $phone,
            )
        );
    }
}

// Hook to handle form submission
add_action( 'init', 'custom_contact_plugin_save_contact' );
