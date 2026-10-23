<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // This tells Laravel which fields can be safely filled out via forms
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
    ];
}
