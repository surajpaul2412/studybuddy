<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use Illuminate\Http\Request;
use Validator;
use Storage;
use File;
use Auth;
use App\Models\Backpack;
use App\Models\BackpackItem;

class BackpackController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=>"required|string|min:3|max:255",
            'files'=>"nullable",
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }

        $user = Auth::user();
        if($user){
            // create backpack
            $backpack = new Backpack();
            $backpack->user_id = $user->id;
            $backpack->name = $req->name;
            $backpack->save();
            
            // adding backpack items for user            
            if($req->hasfile('files')) {
                foreach ($req->file('files') as $file) {
                    $backpackItem = new BackpackItem();
                    $backpackItem->backpack_id = $backpack->id;
                    $backpackItem->file_url = Storage::disk('public')->put('studymaterial/'.$user->first_name.$user->id, $file);
                    $backpackItem->save();
                }
            }
        }
        return $this->sendResponse($backpack,"Successful.");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $validator = Validator::make($req->all(),[
            'name'=>"required|string|min:3|max:255",
            'files'=>"nullable",
        ]);
        if($validator->fails()){
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 403);
        }

        $user = Auth::user();
        if($user){
            $backpack = array(
                'name' => $req->name,
            );
            Backpack::whereUserId($user->id)->whereId($id)->update($backpack);

            // adding backpack items for user            
            if($req->hasfile('files')) {
                foreach ($req->file('files') as $file) {
                    $backpackItem = new BackpackItem();
                    $backpackItem->backpack_id = $id;
                    $backpackItem->file_url = Storage::disk('public')->put('studymaterial/'.$user->first_name.$user->id, $file);
                    $backpackItem->save();
                }
            }
        }
        return $this->sendResponse($backpack,"Successful.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        if($user){
            $item = BackpackItem::findOrFail($id);
            if($item->file_url){
                Storage::disk('public')->delete($item->file_url);
                $item->delete();
            }

            $result = "Deleted Successfully.";
            return $this->sendResponse($result,"Successful.");
        }
    }

    public function delete($id)
    {
        $user = Auth::user();
        if($user){
            $list = Backpack::whereUserId($user->id)->whereId($id)->first();
            if($list){
                foreach ($list->backpackItems as $key => $item) {
                    if($item->file_url){
                        Storage::disk('public')->delete($item->file_url);
                        $item = BackpackItem::findOrFail($item->id)->delete();
                    }
                }
                $list->delete();
            }else{
                $error = "Item Not Found.";
                return $this->sendError($error,"Failure.");
            }

            $result = "Deleted Successfully.";
            return $this->sendResponse($result,"Successful.");
        }
    }

    public function list()
    {
        $user = Auth::user();
        if($user){
            $backpacks = Backpack::whereUserId($user->id)->with('backpackItems')->withCount('backpackItems')->get();
            return $this->sendResponse($backpacks,"Successful.");
        }
    }

    public function items($id)
    {
        $user = Auth::user();
        if($user){
            $backpacks = Backpack::whereId($id)->whereUserId($user->id)->with('backpackItems')->withCount('backpackItems')->first();
            return $this->sendResponse($backpacks,"Successful.");
        }
    }
}
