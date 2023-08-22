<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;


    protected $casts = [
        'steps' => "array"
    ];

    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('service_icon') && ($model->getOriginal('service_icon') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('service_icon'));
            }
            if ($model->isDirty('service_image') && ($model->getOriginal('service_image') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('service_image'));
            }
        });
    }
}
