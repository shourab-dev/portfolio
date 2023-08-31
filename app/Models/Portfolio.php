<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    protected $casts = [
        'gallery' => "array"
    ];

    function serviceType()
    {
        return $this->belongsTo(Service::class);
    }

    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('project_img') && ($model->getOriginal('project_img') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('project_img'));
            }
            // if ($model->isDirty('service_image') && ($model->getOriginal('service_image') !== null)) {
            //     Storage::disk('public')->delete($model->getOriginal('service_image'));
            // }
        });
    }
}
