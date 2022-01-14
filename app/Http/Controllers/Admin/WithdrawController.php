<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use Auth;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdraws = Withdraw::with('user')->get();
        $withdrawJSON = json_encode($withdraws);
        return view('admin.withdraw.index',compact('withdraws','withdrawJSON'));
    }

    public function changeStatus(Request $req, Withdraw $withdraw)
    {   
        // dd($req->all());
        if ($withdraw->status == 3) {
            return redirect()->back()->with('error', 'Withdraw request is cancelled this action can not be performed!');
        }
        if ($withdraw->status == 2) {
            return redirect()->back()->with('error', 'Withdraw request is completed this action can not be performed!');
        }
        $rules = [
            'change_status' => 'required|integer|in:0,1,2,3',
        ];
        if ($req->change_status && $req->change_status == 3) {
            $rules['rejected_reason'] = 'required|string';
        }
        $this->validate($req, $rules);
        $data = $req->all();
        $withdraw->status = (int) $req->change_status;
        $withdraw->rejected_reason = $req->rejected_reason??null;
        $withdraw->save();
        return redirect()->route('admin.withdraw.index')->with('success', 'Successfully status changed!');
    }
}
