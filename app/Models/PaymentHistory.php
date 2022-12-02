<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'name_pack',
        'turn',
        'price',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
