<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_number',
        'phone_number',
        'address',
        'consent',
        'tiktok_creative',
        'tiktok_jernih',
        'ig_creative',
        'ig_jernih',
        'google_review',
        'status',
    ];
}
