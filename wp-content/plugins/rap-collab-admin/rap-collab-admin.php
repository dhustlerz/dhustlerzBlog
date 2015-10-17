<?php
/**
* Plugin Name: Rap Collab Admin
* Plugin URI: http://dhustlerz.com/
* Description: Admin Control Rap collab hunt 2015
* Author: Jashanpreet singh (D-Hustlerz)
* Author URI: http://dhustlerz.com/
* License: Personal
*/

add_action ('admin_menu', 'rap_collab_admin_actions');
function rap_collab_admin_actions() {
  add_menu_page('rapCollabAdmin','rapCollabAdmin', 'manage_options', '__FILE__', 'rap_collab_admin' );
}
 function rap_collab_admin() {
  $output = '';
  $output .= '<div class="wrap">';
    $output .= '<h4>Rap Collab Admin</h4>';
  $output .= '</div>';

  $output.='<table class="widefat datatable table table-striped footer">';
         $output.='<thead>';
         $output .= '<tr>';
          $output .= '<th> </th>';
          $output .= '<th>YouTube</th>';
          $output .= '<th>Name</th>';
          $output .= '<th>IP</th>';
          $output .= '<th>Likes</th>';
          $output .= '<th>Status</th>';
          $output .= '<th>Action</th>';
        $output .= '</tr>';
         $output .= '</thead>';

        $output.='<tbody>';
         global $wpdb;

  $participants = $wpdb->get_results(
    'SELECT id, name, email, url, ip, status, like_count FROM wp_raphunt_2015'
    );
      if($participants){
        foreach ($participants as $participant) {
            $output .= '<tr>';
            $vid= substr($participant->url,32);
            $output .= '<td style="min-width: 50px;"> </td>';
            $output .= '<td style="min-width: 100px;"><iframe width="200px" height="168px" src="//www.youtube.com/embed/'.$vid.'" frameborder="0" allowfullscreen></iframe></td>';
            //$output .= '<td>'.$participant->url.'</td>';
            $output .= '<td style="line-height: 8;">'.$participant->name.'</td>';
            $output .= '<td style="line-height: 8;">'.$participant->ip.'</td>';
            $output .= '<td style="line-height: 8;">'.$participant->like_count.'</td>';
            if ($participant->status == 1) {
              $output .= '<td id="rap-collab-participant-status-'.$participant->id.'" style="line-height: 8; color:green; font-weight:bold;">APPROVED</td>';
            } else if ($participant->status == 0) {
              $output .= '<td id="rap-collab-participant-status-'.$participant->id.'" style="line-height: 8; color:red; font-weight:bold;">NOT APPROVED</td>';
            }else if ($participant->status == 2) {
              $output .= '<td id="rap-collab-participant-status-'.$participant->id.'" style="line-height: 8; color:red; font-weight:bold;">DISQUALIFIED</td>';
            }

            $output .= '<td style="line-height: 8;">';
            $output .= '<button class="rap-collab-approval" id="rap-collab-participant-approved-'.$participant->id.'"> YES </button> ';
            $output .= '<button class="rap-collab-approval" id="rap-collab-participant-notApproved-'.$participant->id.'"> NO </button> ';
            $output .= '<button class="rap-collab-approval" id="rap-collab-participant-disqualified-'.$participant->id.'"> DQF </button>';
            $output .= '</td>';

            $output .= '</tr>';
        }
      }

        $output.='</tbody>';

      $output.='</table>';

  print($output);
 }



  add_action( 'admin_enqueue_scripts', 'rap_collab_admin_scripts' );
  function rap_collab_admin_scripts() {
    global $wp_version;
      wp_enqueue_style( 'rap-collab-admin-stylesheet', plugins_url( 'css/rap-collab-style-admin.css', __FILE__ ) );
      wp_enqueue_script( 'rap_collab_admin_script', plugins_url( 'js/rap-collab-style-admin.js' , __FILE__ ) );

  }

/*
 * update participants status
 */
add_action( 'wp_ajax_rap_collab_admin_approval', 'rap_collab_admin_approval_callback' );
function rap_collab_admin_approval_callback() {
  global $wpdb; // this is how you get access to the database
  $particpantApproval =  $_POST['actionParticipantApproval'];
  $particpantId =  $_POST['actionParticipantId'];

  // check status of participant
  if($particpantApproval == 'approved') {
    $status = 1;
  } else if($particpantApproval == 'notApproved') {
    $status = 0;
  } else if($particpantApproval == 'disqualified') {
    $status = 2;
  } else {
    wp_die();
  }
  $wpdb->update(
    'wp_raphunt_2015',
    array( 'status' => $status ),
    array( 'id' => $particpantId ),
    array( '%d' ),
    array( '%d' )
  );
  echo $particpantId.'-'.$particpantApproval.'-'.$status;
  wp_die(); // this is required to terminate immediately and return a proper response
}
?>
