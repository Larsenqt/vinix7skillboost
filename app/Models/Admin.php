<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $table = 'admins';

    protected $guarded = [];

    public function canAccessPanel(Panel $panel): bool
    {
         return str_ends_with($this->email, '@admin.com'); 
    }
}

