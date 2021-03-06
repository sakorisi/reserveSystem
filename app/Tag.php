<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'string|required',
    );
    
    public function shops()
    {
        return $this->belongsToMany('App\Shop', 'shop_tag');
    }
}
