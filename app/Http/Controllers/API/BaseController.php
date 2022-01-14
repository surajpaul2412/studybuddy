<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LanguageLevel;
use App\Models\Language;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result, $message)
    {
    	$response = [
            'success' => true,
            'code' => 200,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 400)
    {
    	$response = [
            'success' => false,
            'code' => $code,
            'message' => $error,
        ];
        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    public function getAllLanguages(){
        
        $result = Language::all();

        $response = [
            'success' => true,
            'data'    => $result,
            'message' => "Success.",
        ];

        return response()->json($response, 200);
    }

    public function getAllLanguageLevels(){
        
        $result = LanguageLevel::all();

        $response = [
            'success' => true,
            'data'    => $result,
            'message' => "Success.",
        ];

        return response()->json($response, 200);
    }
}
