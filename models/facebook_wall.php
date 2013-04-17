<?php

class FacebookWallModel {
    const access_token_api_url = "https://graph.facebook.com/oauth/access_token";

    function __construct(){
        $db = Loader::db();
        $this->settings = $db->GetRow('SELECT * FROM btFacebookWall');
    }

    public function getSetting($setting) {
        return $this->settings[$setting];
    }

    public function getAccessToken() {
        $url = sprintf(self::access_token_api_url . "?client_id=%s&client_secret=%s&grant_type=client_credentials",
                        $this->getSetting('app_id'),
                        $this->getSetting('app_secret'));

        return file_get_contents($url);
    }

    public function getFacebookStreamJson() {
        $url = $this->getSetting('feed_url') . "?" . $this->getAccessToken();
        $json = file_get_contents($url);
        return json_decode($json);

    }
}