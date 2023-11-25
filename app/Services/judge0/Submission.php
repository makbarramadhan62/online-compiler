<?php

namespace App\Services\judge0;

use App\Services\ServiceHandler;
use App\Services\ServiceHelper;

class Submission
{
    const PATH = "/submissions";

    public function create($params) {
        $url = ServiceHelper::createUrl(self::PATH);
        return ServiceHandler::request(ServiceHelper::METHOD_POST, $url, $params);
    }
}
