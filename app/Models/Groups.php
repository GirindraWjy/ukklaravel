<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table = 'groups';
    protected $primaryKey = 'id';
    protected $receive = ['id', 'group_name'];
    protected $fillable = ['id', 'group_name', 'period_start', 'period_end' ];

    public function user() {
        return $this->hasMany(User::class);

    }

    public function agenda() {
        return $this->hasMany(Agenda::class);
    }


}
