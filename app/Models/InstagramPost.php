<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'instagram_id',
        'caption',
        'media_type',
        'media_url',
        'permalink',
        'timestamp',
        'likes_count',
        'comments_count',
        'is_active',
    ];

    protected $casts = [
        'timestamp' => 'datetime',
        'is_active' => 'boolean',
    ];
}
