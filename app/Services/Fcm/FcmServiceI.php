<?php

namespace App\Services\Fcm;


interface FcmServiceI{
    /**
     * implement in user model and return device type
     *
     * @return string|null
     */
    public function getDeviceType():?string;

     /**
     * implement in user model and return device fcm token
     *
     * @return string|null
     */
    public function getDeviceToken():?string;
}
