<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     protected $fillable = [
        'user_id', 'role_name',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
