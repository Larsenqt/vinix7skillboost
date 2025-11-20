<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders'; 

    protected $fillable = [
        'user_id',
        'training_id',
        'payment_proof',
        'status',
        'admin_note',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function certificate()
    {
    return $this->hasOne(Certificate::class);
    }

    // Relasi ke Training
    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function approve()
    {
        $this->update(['status' => 'approved']);

        // grant access to module (opsional)
    }
}
