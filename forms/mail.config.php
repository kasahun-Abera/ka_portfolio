<?php
/**
 * Mail configuration.
 * Kept out of contact.php so credentials are not mixed with application logic.
 * Override any value with environment variables when available.
 *
 * SECURITY: Rotate the Gmail app password if this file was ever committed to a public repo.
 */
return [
    'recipient' => getenv('MAIL_RECIPIENT') ?: 'kasahunabera81@gmail.com',
    'host'      => getenv('MAIL_HOST') ?: 'smtp.gmail.com',
    'port'      => (int) (getenv('MAIL_PORT') ?: 587),
    'username'  => getenv('MAIL_USERNAME') ?: 'lilkasabera@gmail.com',
    'password'  => getenv('MAIL_PASSWORD') ?: 'ghjjfekzntuqjzra',
    'encryption' => 'tls',
];
