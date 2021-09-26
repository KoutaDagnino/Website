<?php
/**
 * Filter the mail content type.
 */
function wpdocs_set_html_mail_content_type() {
    return 'text/html';
}
add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

$message = '<p>name:' . $_POST['Name'] . '</p><p>email:' . $_POST['email'] .'</p>;
$result = wp_mail('akd95@ou.ac.uk', 'New mail', $message);
if ($result ) {
    // Do something here
}
// Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
?>
