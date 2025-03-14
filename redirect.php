<?php
require_once 'config.php';

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    $oAuth = new Google_Service_Oauth2($client);
    $data = $oAuth->userinfo_v2_me->get();

    echo '<pre>';
    print_r($data);
    echo '<pre>';
}
$loginUrl = $client->createAuthUrl();
?>

<input type="button" onclick="window.location='<?php echo $loginUrl;?>'" value="Button">
