<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    
    protected $fillable = [
        // 'Partner_id', 
        'Partner_userid',
        'Partner_description', 
        'Partner_isactive'
    ]; 
}
