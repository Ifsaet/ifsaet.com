<?php
require_once __DIR__ . '/../vendor/autoload.php';

class GoogleLogin {
    private $client;
    public function __construct($clientId, $clientSecret, $redirectUri) {
        $this->client = new Google_Client();
        $this->client->setClientId($clientId);
        $this->client->setClientSecret($clientSecret);
        $this->client->setRedirectUri($redirectUri);
        $this->client->addScope("email");
        $this->client->addScope("profile");
    }
    public function getLoginUrl() {
        return $this->client->createAuthUrl();
    }
    public function handleCallback() {
        if (isset($_GET['code'])) {
            $token = $this->client->fetchAccessTokenWithAuthCode($_GET['code']);
            $this->client->setAccessToken($token);

            $google_oauth = new Google_Service_Oauth2($this->client);
            $google_account_info = $google_oauth->userinfo->get();
            return [
                'name' => $google_account_info->name,
                'email' => $google_account_info->email
            ];
        } else {
            throw new Exception("No code received from Google");
        }
    }
}
$google = new GoogleLogin("56475773946-99k4nis4f3587tkn7qmjvt8kfgrc4t6q.apps.googleusercontent.com", "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", "http://localhost/ifsa/hash/google-callback");

?>
<style>
    .profile{
        border: 3px solid #B7B7B7;
        padding: 10px;
        margin-top: 10px;
        width: 350px;
        background-color: #F7F7F7;
        height: 160px;
    }
    .profile p{margin: 0px 0px 10px 0px;}
    .head{margin-bottom: 10px;}
    .head a{float: right;}
    .profile img{width: 100px;float: left;margin: 0px 10px 10px 0px;}
    .proDetails{float: left;}
</style>
<meta name="google-signin-client_id" content="56475773946-99k4nis4f3587tkn7qmjvt8kfgrc4t6q.apps.googleusercontent.com.apps.googleusercontent.com">
<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
<!-- HTML for render Google Sign-In button -->
<div id="gSignIn"></div>
<!-- HTML for displaying user details -->
<div class="userContent"></div>
<script>
    function onSuccess(googleUser) {
        var profile = googleUser.getBasicProfile();
        gapi.client.load('plus', 'v1', function () {
            var request = gapi.client.plus.people.get({
                'userId': 'me'
            });
            //Display the user details
            request.execute(function (resp) {
                var profileHTML = '<div class="profile"><div class="head">Welcome '+resp.name.givenName+'! <a href="javascript:void(0);" onclick="signOut();">Sign out</a></div>';
                profileHTML += '<img src="'+resp.image.url+'"/><div class="proDetails"><p>'+resp.displayName+'</p><p>'+resp.emails[0].value+'</p><p>'+resp.gender+'</p><p>'+resp.id+'</p><p><a href="'+resp.url+'">View Google+ Profile</a></p></div></div>';
                $('.userContent').html(profileHTML);
                $('#gSignIn').slideUp('slow');
            });
        });
    }
    function onFailure(error) {
        alert(error);
    }
    function renderButton() {
        gapi.signin2.render('gSignIn', {
            'scope': 'profile email',
            'width': 240,
            'height': 50,
            'longtitle': true,
            'theme': 'dark',
            'onsuccess': onSuccess,
            'onfailure': onFailure
        });
    }
    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            $('.userContent').html('');
            $('#gSignIn').slideDown('slow');
        });
    }
</script>