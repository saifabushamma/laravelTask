<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'country', 'image', 'itemID'
    ];

    protected $primaryKey="itemID";
    protected $table ="items";

    public function user(){
        return $this->belongsTo('App\Users');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
