<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function getAllSubjects()
    {
    	$subjects = Subject::whereNull('deleted_at')->get();
        return $this->sendResponse($subjects,"Successful.");
    }
}
