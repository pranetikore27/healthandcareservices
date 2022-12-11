<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'Category_id', 
        'Complaint_userid', 
        'Complaint_serviceid', 
        'Complaint_matter', 
        'Complaint_Resolveruserid', 
        'Complaint_status'
    ];
}
