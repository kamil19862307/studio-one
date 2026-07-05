<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Master extends Model
{
    /** @use HasFactory<\Database\Factories\MasterFactory> */
    use HasFactory;

    // чтобы Inertia автоматически видела полный путь к изображению
    protected $appends = ['photo_url'];

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'photo',
        'experience',
        'description',
        'instagram',
        'telegram',
    ];

    protected function photo(): Attribute
    {
        // Пока оставим в покое (пытался изменить для фронтенда)
        return Attribute::make(
            get: fn (?string $value) => $value,
            set: fn (?string $value) => $value
        );
    }

    // Виртуальное поле для фронтенда (Vue/Inertia)
    public function photoUrl(): Attribute
    {
        return Attribute::make(

            get: function () {

                if (!$this->photo) return null;

                return Storage::disk('public')->url($this->photo);
            }
        );
    }

    protected static function booted()
    {
        // Удаляем старое фото
        static::updating(function (Master $master) {

            if ($master->isDirty('photo')) {

                $oldPhoto = $master->getOriginal('photo');

                if ($oldPhoto && Storage::disk('public')->exists($oldPhoto)) {

                    Storage::disk('public')->delete($oldPhoto);
                }
            }
        });

        static::deleting(function (Master $master) {

            if ($master->photo && Storage::disk('public')->exists($master->photo)) {

                Storage::disk('public')->delete($master->photo);
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class);
    }
}
