<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Training extends Model
{
    protected $table = 'trainings';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'price',
        'thumbnail',
        'module_file',
    ];

    // Auto generate slug jika kosong
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($training) {
            if (empty($training->slug)) {
                $training->slug = Str::slug($training->title);
            }
        });
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    // Relasi ke Category (many-to-one)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi ke Orders (one-to-many)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

        public function orderForUser($userId)
    {
        return $this->orders()->where('user_id', $userId)->first();
    }
}

