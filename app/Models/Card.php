<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'holder_name','user_id', 'card_id', 'last_four', 'brand', 'is_default'
    ];

    static function createOrUpdateCard($data,$card=null)
    {   
        if (!isset($card)) {
            $card = new Card;
        }
        $card->holder_name = $data['holder_name']??"";
        $card->user_id = $data['user_id'];
        $card->card_id = $data['card_id'];
        $card->last_four = $data['last_four'];
        $card->brand = $data['brand'];
        $card->is_default = isset($data['is_default'])?(int)$data['is_default']:1;
        $card->save();
        return $card;
    }
}
