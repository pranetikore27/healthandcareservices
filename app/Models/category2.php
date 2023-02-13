<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category2 extends Model
{
    use HasFactory;
    protected $primaryKey = 'Category_id';
    protected $fillable = [
        'Category_name', 
        'Category_status'
    ]; 
}
