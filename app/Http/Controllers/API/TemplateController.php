<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Auth;

class TemplateController extends Controller
{
    public function index(){
    	$user = Auth::user();
    	if($user){
    		$pages = Page::all();
    		return $this->sendResponse($pages,"Successful.");
    	}
    }
}
