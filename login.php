<?php
require 'config.php';

$params = [
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'response_type' => 'code',
    'scope' => 'https://www.googleapis.com/auth/drive',
    'access_type' => 'offline',
    'prompt' => 'consent'
];

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?' . http_build_query($params);

header('Location: ' . $login_url);
exit;
?>
