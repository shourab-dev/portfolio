<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroSection extends Model
{
    use HasFactory;
    protected $casts = [
        'featured_work' => 'array',


    ];

    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('featured_img') && ($model->getOriginal('featured_img') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('featured_img'));
            }
        });
    }
}
