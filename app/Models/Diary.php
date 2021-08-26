<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'start_time',
        'duration',
        'status',
        'payment_id',
    ];

    public function payment() {

        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
