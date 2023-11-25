<?php

namespace App\Services;


class ServiceHelper
{
    const METHOD_POST = "POST";
    const METHOD_GET = "GET";
    const METHOD_PUT = "PUT";

    public static function createUrl($path = "") {
        return config("services.compiler.protocol") . "://" . config("services.compiler.host") . ":" . config("services.compiler.port") . $path;
    }
}
