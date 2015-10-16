<?php

$lang = array(

    // Error message to user if they are banned from the system
    'access_denied' => 'You have been banned from using the appeals system, please contact a Project Manager for more information',
    // Error message if appeal has been decided upon and user attempts to submit a message to appeal
    'closed' => 'Appeal has been closed and you can not comment on it anymore',

    // Confirmation message to admin when accepting an appeal
    'accepted' => 'Appeal accepted!',
    // Confirmation message to admin when declining an appeal
    'declined' => 'Appeal declined!',
    // Header of page when editing a ban in response to appeal, place :reason where reason should appear and :username where the user's name should appear
    'modified' => "Editing ban :reason for :username's appeal",
    // Confirmation to admin when disabling appeals module access for a user
    'disabled' => 'Appeals disabled for user',
    // Confirmation to admin when enabling appeals module access for a user
    'enabled' => 'Appeals enabled for user',
    // Button for disabling appeals system for user
    'disable_access' => 'Disable appeals system for user',
    // Button for accepting appeal
    'accept' => 'Accept',
    // Button for modifying ban from appeal
    'modify' => 'Modify',
    // Button for declining appeal
    'decline' => 'Decline',
    // Label above comment box
    'comment' => 'Comment',
    // Label for dropdown for selecting comment visibility
    'visibility' => 'Visibility of comment',
    // Label for dropdown element
    'public' => 'Public',
    // Label for dropdown element
    'private' => 'Private',
    // Button for submitting comment
    'submit_comment' => 'Submit comment',

    // table header listing appeals
    'ban_reason' => 'Ban Reason',
    // table header listing appeals
    'user' => 'User',
    // table header listing appeals
    'status' => 'Status',
    // table header listing appeals
    'updated' => 'Updated',

    // Link for viewing appeal
    'view_appeal' => 'View Appeal',

    // Appears on top when user first creates an appeal
    'ban_details' => 'Ban details',
    // Appears during appealing a ban
    'reason' => 'Reason',
    // Appears during appealing a ban
    'admin' => 'Admin',
    // Appears during appealing a ban
    'expires' => 'Expires',
    // Label above comment field during appealing a ban
    'explain' => 'Explain for us why you should be unbanned?',
    // Button for submitting appeal
    'submit' => 'Submit appeal',

    // Link for creating appeal
    'new_appeal' => 'Appeal this ban',
    // Text if ban is too recent, don't change :date and include Timezone denotation UTC where appropriate
    'ban_too_new' => 'Please wait until :date UTC to create an appeal.',
    // Text if no bans present
    'no_active_bans' => 'You got no active bans',
);

return $lang;