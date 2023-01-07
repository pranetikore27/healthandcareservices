<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'Category_id', 
        'Category_name', 
        // 'Category_isparent', 
        // 'Category_parentid', 
        'Category_isactive'
    ]; 
}
