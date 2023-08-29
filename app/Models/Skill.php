<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;


    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('skill_img') && ($model->getOriginal('skill_img') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('skill_img'));
            }
        });
    }
}
