<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'video_presentation',
        'image_1',
        'image_2',
        'description',
        'date_created',
        'live_link',
    ];
}
