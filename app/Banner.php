<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable =[
        'client_name',
        'client_email',
        'client_phone',
        'banner_name',
        'banner_image',
        'banner_imgage_width',
        'banner_image_heigth',
        'banner_alt',
        'banner_top_text',
        'banner_begin',
        'banner_end',
        'banner_price_model',
        'banner_price',
        'banner_impressions_limit',
        'banner_clicks_limit',
        'banner_clicks',
        'banners_impressions',
        'user_id',
        'active',
        'url'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
