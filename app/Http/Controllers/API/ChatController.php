<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as Controller;
use App\Models\Chat;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    /**
     * Return all chat user related to current auth user
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getUserList(Request $request)
    {
        $userId = $request->user()->id;
        $per_page = $request->query('per_page');
        $per_page = ($per_page && is_numeric($per_page)) ? (int)$per_page : null;
        $users = Chat::select(
            DB::raw('
        (CASE WHEN sender_id = ' . $userId . '
            THEN receiver_id
            ELSE sender_id
        END) as user ,MAX(id) as id,updated_at')
        )->distinct()->with('user:id,first_name,last_name,avatar')->where('sender_id', $userId)->orWhere('receiver_id', $userId)->groupBy('user')->orderBy('id', 'desc')->paginate($per_page);
        $users = json_decode(json_encode($users));
        $users->data = (array) $users->data;
        $temp = [];
        foreach ($users->data as $user) {
            $chat = Chat::orWhere(function ($q) use ($userId, $user) {
                return $q->where('sender_id', $userId)->where('receiver_id', $user->user->id);
            })->orWhere(function ($q) use ($userId, $user) {
                return $q->where('sender_id', $user->user->id)->where('receiver_id', $userId);
            })->orderBy('id', 'desc')->limit(1)->first();
            $user->message = $chat;
            $user->unread = Chat::where(['receiver_id' => $userId, 'sender_id' => $user->user->id, 'read' =>  null])->count();
            $temp[] = $user;
        }
        $users->data = $temp;
        return $this->sendResponse($users, "Successful.");
    }

    /**
     * Delete single message
     *
     * @param int $id chat id
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function deleteMessage(int $id, Request $request)
    {
        $user = $request->user();
        $chat = Chat::where(['id' => $id, 'sender_id' => $user->id])->delete();
        return $this->sendResponse($chat, __('messages.chat.delete_message'));
    }

    /**
     * Delete All chat of single user
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function deleteChat(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => "required|numeric",
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $user_id = $request->user_id;
        $user = $request->user();
        Chat::where(['sender_id' => $user->id, 'receiver_id' => $user_id])
            ->orWhere(['sender_id' => $user_id, 'receiver_id' => $user->id])->delete();
        return $this->sendResponse([],__('messages.chat.delete'));
    }


    /**
     * Upload document and images
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function uploadImageAndDocs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg,pdf,doc,docx,odt'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => '',
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $path = $request->file('file')->store('chat_storage', 'public');
        $data['url'] = asset("storage/$path");

        return $this->sendResponse($data, __('messages.chat.file_upload'));
    }
}
