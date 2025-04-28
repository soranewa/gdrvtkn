<?php
require 'config.php';

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $post_fields = [
        'code' => $code,
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'grant_type' => 'authorization_code'
    ];

    $ch = curl_init('https://oauth2.googleapis.com/token');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_fields));
    $response = curl_exec($ch);
    curl_close($ch);

    $token_data = json_decode($response, true);

    echo "<h2>Access Token Info</h2><pre>";
    print_r($token_data);
    echo "</pre>";
} else {
    echo "Authorization code not found.";
}
?>
