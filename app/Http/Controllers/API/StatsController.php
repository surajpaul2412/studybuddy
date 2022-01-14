<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Visitor;
use Carbon\carbon;
use Auth;

class StatsController extends Controller
{
    public function chart(){
    	$user = Auth::user();
    	if($user){
    		$user_session = [];
    		$sessions = Session::whereTutorId($user->id)->whereStatus(3)->get();
    		$offline_sessions_count = Session::whereTutorId($user->id)->whereStatus(3)->whereType(0)->count();
    		$online_sessions_count = Session::whereTutorId($user->id)->whereStatus(3)->whereType(1)->count();

    		// Offline
            if($offline_sessions_count) {
                $color_offline = '#6EC9B7';
                $legendFontColor_offline = '#3F414E';
                $name_offline = 'Offline';
			    $population_offline = ($offline_sessions_count/count($sessions))*100;
            }
            $customStyle_offline = array(
            	'name' => $name_offline??'Offline',
			    'population' => $population_offline??0,
			    'color' => $color_offline??'#6EC9B7',
			    'legendFontColor' => $legendFontColor_offline??'#3F414E',
			    'legendFontSize' => '14',
            );

            // Online
            if($online_sessions_count){
                $color_online = '#FD7441';
                $legendFontColor_online = '#3F414E';
                $name_online = 'Online';
			    $population_online = ($online_sessions_count/count($sessions))*100;
            }
            $customStyle_online = array(
            	'name' => $name_online??'Online',
			    'population' => $population_online??0,
			    'color' => $color_online??'#FD7441',
			    'legendFontColor' => $legendFontColor_online??'#3F414E',
			    'legendFontSize' => '14',
            );

            $user_session[] = $customStyle_offline;
            $user_session[] = $customStyle_online;
            return $this->sendResponse($user_session,"Successful.");
    	}
    }

    public function visitor(){
        $user = Auth::user();
        if($user){
            $labels = [];
            $labelsValue = [];
            foreach (range(0, 5) as $key => $months) {
                $labels[] = $this->prev_month($key);
                $labelsValue[] = $this->prev_month_visitors($key, $user);
            }

            $data['data'] = $labelsValue;
            $data['strokeWidth'] = 1;

            $result = array(
                'labels' => $labels,
                'visitor_count' => $user->visitors->count(),
                'datasets' => [$data],
            );
            return $this->sendResponse($result,"Successful.");
        }
    }

    public function graph(){
    	$user = Auth::user();
    	if($user){
    		$labels = [];
    		$labelsValue = [];
    		foreach (range(0, 5) as $key => $months) {
			    $labels[] = $this->prev_month($key);
			    $labelsValue[] = $this->prev_month_income($key, $user);
			}

            $data['data'] = $labelsValue;
            $data['color'] = "#FD7441";
            $data['strokeWidth'] = 1;

    		$result = array(
                'labels' => $labels,
    			'visitor_count' => $user->visitors->count(),
    			'datasets' => [$data],
            );

    		return $this->sendResponse($result,"Successful.");
    	}
    }

    public function prev_month($prev){
    	$res = '';
    	$res = Carbon::now()->subMonth($prev)->format('M');
    	return $res;
    }

    public function prev_month_income($prev, $user){
    	$start = ''; $end = ''; $income = [];
    	$start = Carbon::now()->startOfMonth()->subMonth($prev)->toDateString();
    	$end = Carbon::now()->endOfMonth()->subMonth($prev)->toDateString();

    	$income = Session::whereTutorId($user->id)->whereStatus(3)->whereBetween('start_date_time', [$start, $end])->pluck('income')->toArray();
        $income = array_sum($income);
    	return $income;
    }

    public function prev_month_visitors($prev, $user){
        $start = ''; $end = ''; $visitors = [];
        $start = Carbon::now()->startOfMonth()->subMonth($prev)->toDateString();
        $end = Carbon::now()->endOfMonth()->subMonth($prev)->toDateString();

        $visitors[] = Visitor::whereUserId($user->id)->whereBetween('created_at', [$start, $end])->count();
        $visitors = array_sum($visitors);
        return $visitors;
    }
}
