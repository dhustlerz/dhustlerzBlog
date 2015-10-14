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

  $output.='<table class="widefat datatable table table-striped footer">';
         $output.='<thead>
         <tr>
          <th>YouTube</th>
          <th>Name</th>
          <th>IP</th>
          <th>Likes</th>
          <th>Status</th>
        </tr>
         </thead>';

        $output.='<tbody>';
         global $wpdb;

  $participants = $wpdb->get_results(
    'SELECT name, email, url, ip, like_count FROM wp_raphunt_2015'
    );
  //$results = $wpdb->get_results( 'SELECT * FROM wp_options WHERE option_id = 1', OBJECT );
  if($participants){
    echo 'working';
      }

          foreach ($participants as $participant) {
              $output .= '<tr>';
              $output .= '<td>'.$participant->url.'</td>';
              $output .= '<td>'.$participant->name.'</td>';
              $output .= '<td>'.$participant->ip.'</td>';
              $output .= '<td>'.$participant->like_count.'</td>';
              $output .= '<td>approved</td>';
              $output .= '</tr>';
          }

        $output.='</tbody>';

      $output.='</table>';

  print($output);
 }
?>
