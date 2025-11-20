<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // CAST
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // RELATION: User → Orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // RELATION: User → Reports
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    // OPTIONAL: User → Trainings (via Orders)
    public function trainings()
    {
        return $this->hasManyThrough(Training::class, Order::class);
    }

    // FILAMENT ACCESS
    public function canAccessPanel(Panel $panel): bool
    {
        // Ubah sesuai keinginanmu
        return str_ends_with($this->email, '@gmail.com');
    }
}
