<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected $fillable = [
        'user_id',
        'training_id',
        'laporan',
        'status'
    ];

    // User yang membuat laporan
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Training yang dilaporkan
    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
