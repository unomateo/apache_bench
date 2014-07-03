<?php

include("ZillowRealEstateServiceAuthenticatorProfile.php");

class ZillowRealEstateServiceAuthenticator {

    public static function getApiKey() {
        $apiKey = ZillowRealEstateServiceAuthenticatorProfile::getApiKey();
        if ($apiKey == null || $apiKey == "") {
            throw new Exception("Please specify your api key in the apikey.php file.");
        }
        return $apiKey;
    }

}

?>
