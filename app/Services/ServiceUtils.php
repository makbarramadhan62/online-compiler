<?php


namespace App\Services;

use GuzzleHttp\Client;
use App\Exceptions\APIResponseException;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ServiceUtils
{
    private $client;

    function __construct()
    {
        $this->client = app('GuzzleClient')([
            'base_uri' => ServiceHelper::createUrl(),
//            'base_uri' => "http://libra.akhdani.net:2358",
            'http_errors' => false
        ]);
    }

    function clearScriptTags($s){
        return preg_replace('/<[^>]*>/', '', $s);
    }

    function doRequest($method, $uri, $param = null, $clearScriptTags = true){
        try {
            // encrypt url request
            $uri_segment = parse_url($uri);
            $query_string = "";
            if (array_key_exists("query", $uri_segment)){
                parse_str($uri_segment['query'], $_params);

                $qs = array();
                foreach ($_params as $key => $value){
                    if ($clearScriptTags) {
                        array_push($qs, $key . "=" . $this->clearScriptTags($value));
                    } else {
                        array_push($qs, $key . "=" . $value);
                    }
                }

                $query_string = join("&", $qs);
            }

            $uri = $uri_segment['path'];

            if ($query_string != ""){
                $uri .= "?" . $query_string;
            }

            $headers = isset($param["headers"]) ? $param["headers"] : [];

            if ($token = session('token')) {
                $headers['Authorization'] = $token;
            }

            $param["headers"] = $headers;

            if (is_null($param)){
                $response = $this->client->request($method,$uri,$param);
            } else {
                // encrypt post body
                if (array_key_exists("form_params", $param)){
                    $enc_form_params = array();
                    foreach ($param["form_params"] as $key => $value){
                        if ($clearScriptTags) {
                            $enc_form_params[$key] = $this->clearScriptTags($value);
                        } else {
                            $enc_form_params[$key] = $value;
                        }
                    }

                    $param["form_params"] = $enc_form_params;
                }

                $response = $this->client->request($method,$uri, $param);
            }
        } catch (ConnectException $connectException) {
            throw new \Exception('Terjadi kesalahan, gagal terhubung dengan server. Silahkan coba kembali');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        $statusCode = $response->getStatusCode();

        $body = $response->getBody();
        $result = json_decode(trim($body));
        Log::debug($uri);
        Log::debug($statusCode);
        Log::debug($result);
        if ($statusCode !== 200) {
            throw new APIResponseException($result->message, $statusCode);
        }

        return $result;
    }
}
