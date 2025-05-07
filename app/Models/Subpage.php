<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subpage extends Model
{
    protected $fillable = [
        'title',
        'content',
        'conference_id',
    ];

    public function conference()
    {
        $this->belongsTo(Conference::class);
    }
}
