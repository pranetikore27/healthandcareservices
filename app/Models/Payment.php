<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'Category_id', 
        'Payment_userid', 
        'Payment_amount', 
        'Payment_serviceid', 
        'Payment_transactionid', 
        'Payment_status'
    ];
}
