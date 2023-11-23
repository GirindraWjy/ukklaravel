<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'offices';
    protected $fillable = ['id', 'group_id', 'name', 'is_admin'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
