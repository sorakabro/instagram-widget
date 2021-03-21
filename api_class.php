<?php

class InstagramApi
{

    public function instagram_api_request() {

        $amountOfImages = 12;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.instagram.com/me/media?fields=id,caption,media_url,permalink&limit='.$amountOfImages.'&access_token=IGQVJYMGhCRTBWVkJTOTdGMjl2emw1UDRLREtrY2JHRDVtWTBQU1dGTFYtejgyZAHVjMUVINThVUGpxTk42SlpCb3dmYkVmemduZAUFaQnY1QVVzdUIteTNXRDRDUi1MVXpZAZA2pUSEpoTXY4ZATc5ZATJWUwZDZD',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        $jsonArrayResponse = json_decode($response);

        curl_close($curl);

        return $jsonArrayResponse;
    }

}