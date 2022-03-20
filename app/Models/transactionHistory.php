<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'transid',
        'transaction',
        'dateAndTimeofTheTransaction',
    ];
}
