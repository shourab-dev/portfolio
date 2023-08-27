<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdditionService extends Model
{
    use HasFactory;

    function services()
    {
        return $this->belongsToMany(Service::class);
    }

    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('additional_img') && ($model->getOriginal('additional_img') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('additional_img'));
            }
        });
    }
}
