<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'Category_id', 
        'Review_giveruserid', 
        'Review_serviceid', 
        'Review_matter', 
        'Review_viewmode', 
        'Review_status'
    ];

}
