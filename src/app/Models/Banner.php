<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    /** @use HasFactory<\Database\Factories\PortfolioFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'link_url',
        'position',
        'active',
    ];

// Добавляем, чтобы это поле всегда цеплялось к JSON
    protected $appends = [
        'image_url',
    ];

    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->image_path ? Storage::url($this->image_path) : null,
        );
    }


    protected static function booted()
    {
        // Удаляем старое фото
        static::updating(function (Banner $banner) {

            if ($banner->isDirty('image_path')) {

                $oldPhoto = $banner->getOriginal('image_path');

                if ($oldPhoto && Storage::disk('public')->exists($oldPhoto)) {

                    Storage::disk('public')->delete($oldPhoto);
                }
            }
        });

        static::deleting(function (Banner $banner) {

            if ($banner->image_path && Storage::disk('public')->exists($banner->image_path)) {

                Storage::disk('public')->delete($banner->image_path);
            }
        });
    }
}
