<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $table = 'residents';
    protected $fillable = [
        'user_id',
        'apartment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
