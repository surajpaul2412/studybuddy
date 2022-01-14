<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\College;

class UniversityController extends Controller
{
    public function getAllUniversities()
    {
    	$universities = User::whereRoleId(2)->whereStatus(1)->whereDeletedAt(null)->get();
        return $this->sendResponse($universities,"Successful.");
    }

    public function getAllColleges()
    {
        $colleges = College::whereDeletedAt(null)->with('university')->get();
        return $this->sendResponse($colleges,"Successful.");
    }
}
