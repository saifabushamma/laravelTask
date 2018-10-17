<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    protected $table = 'roles';
    protected $fillable = ['name','display_name','description'];
    protected $primaryKey = 'id';


    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
