<?php

return [
    'log_user_ip' => true,        // Whether to log user IP addresses
    'track_login' => true,        // Whether to track user login events
    'log_actions' => ['page_visit', 'form_submission'], // Actions to log
    'anonymize_data' => true,     // Whether to anonymize sensitive user data (IP, email, etc.)
];
