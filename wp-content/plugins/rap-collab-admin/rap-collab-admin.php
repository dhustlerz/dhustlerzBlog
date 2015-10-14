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

  $output.='<table class=" widefat datatable table table-striped footer">';
         $output.='<thead>
         <tr>
          <th style="width:20%">YouTube</th>
          <th style="width:20%">Name</th>
          <th style="width:20%">IP</th>
          <th style="width:20%">Likes</th>
          <th style="width:20%">Status</th>
        </tr>
         </thead>';

        $output.='<tbody  class="font-size-12 schedular-speaker-select">';
        // filter: using meeting.speakerFilter instead of sourcedata.users.speaker.user
          $output .= '<tr data-ng-repeat="speaker in meeting.speakerFilter" class="">';
              $output .= '<td style="width:20%">Link</td>';
              $output .= '<td style="width:20%">test</td>';
              $output .= '<td style="width:20%">192.168.1.1</td>';
              $output .= '<td style="width:20%">500</td>';
              $output .= '<td style="width:20%">approved</td>';
          $output .= '</tr>';
        $output.='</tbody>';

      $output.='</table>';

  print($output);
 }
?>
