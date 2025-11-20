<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'order_id',
        'certificate_file',
        'code',
        'claimed_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    protected static function booted()
    {
    static::creating(function ($certificate) {
        if (empty($certificate->code)) {
            $certificate->code = strtoupper(uniqid('CERT-'));
        }
    });
    }

}
