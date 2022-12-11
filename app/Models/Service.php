<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        "Service_providerid", 
        'Service_name', 
        'Service_description', 
        'Service_charge', 
        'Service_validity', 
        'Service_isactive'
    ];
}
