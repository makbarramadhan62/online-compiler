<?php

namespace App\Services\judge0;

use App\Services\ServiceHandler;
use App\Services\ServiceHelper;

class Languages
{
    const PATH = "/languages";

    public function list($all = true) {
        $url = ServiceHelper::createUrl($all ? self::PATH : self::PATH . "/all");
        return ServiceHandler::request(ServiceHelper::METHOD_GET, $url);
    }

    public function detail($languageid) {
        $url = ServiceHelper::createUrl(self::PATH . "/" . $languageid);
        return ServiceHandler::request(ServiceHelper::METHOD_GET, $url);
    }
}
