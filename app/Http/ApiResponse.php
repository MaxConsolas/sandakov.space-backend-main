<?php

namespace App\Http;

use Illuminate\Http\JsonResponse;

class ApiResponse extends JsonResponse
{

    public function __construct($data = null, $status = 200, $headers = [], $options = JSON_PRETTY_PRINT, $json = false)
    {
        $this->encodingOptions = $options;

        if ($data !== null) {
            $data = [
                'status' => 'success',
                'data' => $data,
            ];
        }

        parent::__construct($data, $status, $headers, $json);
    }
}
