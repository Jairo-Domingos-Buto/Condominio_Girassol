<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concierge extends Model
{
    use HasFactory;

    protected $table = 'concierges';
    protected $fillable = [
        'user_id',
        'department',
        'shift',
        'supervisor',
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
