<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_en', 'categoryID',
        'name_ar'
    ];
    protected $primaryKey = 'categoryID';

    protected $table = 'category';

    public function items(){
        return $this->hasMany('App\Item');
    }
    public static function category(){
        return Category::select('name_' . App::getLocale() . "  " . "as name",
            "categoryID"
            );
    }
}
