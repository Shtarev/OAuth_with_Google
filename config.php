require_once 'vendor/autoload.php';

$client = new Google\Client();
$client->setClientId('<Client ID>');
$client->setClientSecret('<Client secret>');
$client->setApplicationName('My Project');
$client->setRedirectUri('https://yousite.com/redirect.php');
$client->addScope('https://www.googleapis.com/auth/plus.login', 'https://www.googleapis.com/auth/userinfo.email');
