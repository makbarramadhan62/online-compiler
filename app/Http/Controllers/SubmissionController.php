<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\judge0\Submission;

class SubmissionController extends Controller
{
    public function create(Request $request)
    {
        $sourceCode = $request->input('source_code');
        $languageId = $request->input('language_id');

        $submission = new Submission();
        $params = [
            'source_code' => $sourceCode,
            'language_id' => $languageId,
        ];
        $response = $submission->create($params);

        return response()->json($response);
    }
}
