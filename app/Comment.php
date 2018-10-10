<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'commentID'
    ];

    protected $table = 'comment';
    protected $primaryKey = 'commentID';

    public function user(){
        return $this->belongsTo('App\User');
    }


    public function item(){
        return $this->belongsTo('App\Item');
    }
}
