<?php


namespace App\Services\Fcm;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class FCMService
{

    const PRIORITY_NORMAL = 'normal';
    const PRIORITY_HIGH = 10;
    const FCM_URL = 'https://fcm.googleapis.com/fcm/send';

    private string $server_key;

    private array $ios_tokens = [];
    private array $android_token = [];
    private array $web_token = [];

    // Payload

    private string $title;
    private string $body;
    private array $extra_data;
    private string $message;

    public function __construct()
    {
        $this->server_key = config('services.fcm_server_key');
        $this->extra_data = [];
        $this->title = "";
        $this->message = "";
        $this->body = "";
    }

    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }

    public function setMessage(string $title) : self
    {
        $this->title = $title;
        return $this;
    }

    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }

    public function setExtraData(array $extra_data):self
    {
        $this->extra_data = $extra_data;
        return $this;
    }

    public function setAndroidToken(array $android_token): self
    {
        $this->android_token = $android_token;
        return $this;
    }

    public function setIosToken(array $ios_tokens): self
    {
        $this->ios_tokens = $ios_tokens;
        return $this;
    }

    public function setWebToken(array $web_token): self
    {
        $this->web_token = $web_token;
        return $this;
    }

    public function setUser(Model $user): self
    {
        if ($user->getDeviceType() == 'android') {
            $this->setAndroidToken([$user->getDeviceToken()]);
        } else if ($user->getDeviceType() == 'ios') {
            $this->setIosToken([$user->getDeviceToken()]);
        }else if ($user->getDeviceType() == 'web'){
            $this->setWebToken([$user->getDeviceToken()]);
        }
        return $this;
    }

    public function setUsers(Collection $users): self
    {
        $temp_ios_token = [];
        $temp_android_token = [];
        $web_token = [];
        foreach ($users as $user) {

            if ($user->getDeviceType() == 'android' && $user->getDeviceToken()) {
                $temp_android_token[] = $user->getDeviceToken();
            }
            if ($user->getDeviceType() == 'ios' && $user->getDeviceToken()) {
                $temp_ios_token[] = $user->getDeviceToken();
            }
            if ($user->getDeviceType() == 'web' && $user->getDeviceToken()) {
                $web_token[] = $user->getDeviceToken();
            }
        }
        $this->setAndroidToken($temp_android_token);
        $this->setIosToken($temp_ios_token);
        $this->setWebToken($web_token);
        return $this;
    }

    public function pushAndroid()
    {
        if(count($this->android_token)){
            $msg = array(
                'title'          =>  $this->title,
                'body'         =>  $this->body,
                'vibrate'       => 1,
                'sound'         => 1,
                'largeIcon'     => 'large_icon',
                'smallIcon'     => 'small_icon',
                'data' => $this->extra_data,
                'priority' => self::PRIORITY_HIGH
            );
            $arrayToSend = array(
                'registration_ids' => $this->android_token, //  for  multiple users
                'data'    => $msg
            );
            $this->curl_call($arrayToSend);
        }

    }

    public function pushWeb()
    {
        if(count($this->web_token)){
            $msg = array(
                'title'          =>  $this->title,
                'body'         =>  $this->body,
                'vibrate'       => 1,
                'sound'         => 1,
                'largeIcon'     => 'large_icon',
                'smallIcon'     => 'small_icon',
                'data' => $this->extra_data,
                'priority' => self::PRIORITY_HIGH
            );
            $arrayToSend = array(
                'registration_ids' => $this->web_token, //  for  multiple users
                'data'    => $msg,
                'priority'      =>    self::PRIORITY_HIGH,
            );
            $this->curl_call($arrayToSend);
        }
    }

    public function pushIos()
    {
        if(count($this->ios_tokens)){
            $title = $this->title;
            $body = $this->body;
            $notification = array('title' => $title, 'body' => $body, 'sound' => 'default', 'badge' => '1');

            $arrayToSend = array('registration_ids' => $this->ios_tokens, 'notification' => $notification, 'data' => $this->extra_data, 'priority' => self::PRIORITY_HIGH);
            $this->curl_call($arrayToSend);
        }

    }


    public function push()
    {
        $this->pushAndroid();
        $this->pushIos();
        $this->pushWeb();
    }


    private function curl_call($data)
    {
        $json = json_encode($data);

        $headers = array(
            'Authorization:key= ' . $this->server_key,
            'Content-Type:application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::FCM_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        // if ($result === FALSE) {
            // die('FCM Send Error: ' . curl_error($ch));
        // }
        Log::info($result);
        curl_close($ch);
        return $result;
    }
}
