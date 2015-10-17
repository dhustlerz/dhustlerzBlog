jQuery( document ).ready(function() {
  /*
   * Approve participant
   */

   jQuery('.rap-collab-approval').on('click', function() {
    var participantHtmlId = this.id;
    var arr = participantHtmlId.split('-');
    var participantApproval = arr[3];
    var participantDatabaseId = arr[4];
    //alert(participantApproval);
    var data = {
      'action': 'rap_collab_admin_approval',
      'actionParticipantApproval': participantApproval,
      'actionParticipantId': participantDatabaseId,

      //'participantDatabaseId': participantDatabaseId
    };

    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    jQuery.post(ajaxurl, data, function(response) {
      //alert(response);
      var arr = response.split('-');
      // particpantId.'-'.$particpantApproval.'-'.$status;
      var particpantId = arr[0];
      var participantStatus = arr[2];
      if(participantStatus == 1) {
      participantStatusHtmlId = '#rap-collab-participant-status-'+particpantId;
      jQuery(participantStatusHtmlId).html("APPROVED").css('color','green');

      } else if(participantStatus == 0) {
      participantStatusHtmlId = '#rap-collab-participant-status-'+particpantId;
      jQuery(participantStatusHtmlId).html("NOT APPROVED").css('color','red');

      } else if(participantStatus == 2) {
      participantStatusHtmlId = '#rap-collab-participant-status-'+particpantId;
      jQuery(participantStatusHtmlId).html("DISQUALIFIED").css('color','red');

      }


    });
  });





});
