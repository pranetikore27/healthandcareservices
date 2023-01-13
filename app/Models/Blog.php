<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        "Blog_owner_id", 
        "Blog_title", 
        "Blog_description", 
        "Blog_category", 
        "Blog_slug"
    ];
}
