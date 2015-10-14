<?php
/**
* Plugin Name: Rap Collab Admin
* Plugin URI: http://dhustlerz.com/
* Description: Admin Control Rap collab hunt
* Author: Jashanpreet singh
* Author URI: http://dhustlerz.com/
* License: Personal
*/

add_action ('admin_menu', 'rap_collab_admin_actions');
function rap_collab_admin_actions() {
  add_options_page('rapCollabAdmin','rapCollabAdmin', 'manage_options', '__FILE__', 'rap_collab_admin' );
}
 function rap_collab_admin() {
  $output = '';
  $output .= '<div class="wrap">';
    $output .= '<h4>Rap Collab Admin</h4>';
  $output .= '</div>';
  print($output);
 }
?>
