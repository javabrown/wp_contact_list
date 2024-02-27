<?php
// shortcode.php

// Shortcode function to display contact information
function custom_contact_plugin_display_contacts( $atts ) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contacts';
    $contacts = $wpdb->get_results( "SELECT * FROM $table_name" );
    ob_start();
    ?>
    <ul>
        <?php foreach ( $contacts as $contact ) : ?>
            <li><?php echo $contact->name; ?> - <?php echo $contact->address; ?> - <?php echo $contact->phone; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php
    return ob_get_clean();
}

// Register shortcode
add_shortcode( 'display_contacts', 'custom_contact_plugin_display_contacts' );
