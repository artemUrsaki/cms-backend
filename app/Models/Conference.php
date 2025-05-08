<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = [
        'year',
        'title',
    ];

    public function subpages()
    {
        $this->hasMany(Subpage::class);
    }

    public function users()
    {
        $this->belongsToMany(User::class, 'user_conference');
    }
}
