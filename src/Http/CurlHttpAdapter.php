<?php

namespace App\Http;

class CurlHttpAdapter implements HttpAdapter
{

    public function post(string $url, array $data = [])
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST);
//        enviando fodase
    }
}
