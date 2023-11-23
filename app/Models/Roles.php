<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;

class Roles extends SpatieRole
{
    protected $table = 'roles';
    protected $receive = ['id', 'name'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function permission(){
        return $this->belongsToMany(Permission::class);
    }
}
