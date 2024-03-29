<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* 
Vendor_businessaddress
- foreign key from Location table 

Vendor_isverified
0 - not verified
1 - under verification 
2 - verification completed 
3 - verification rejected

Vendor_isactive 
0 - Not active 
1 - Active 
2 - Demoted to user 
*/
class Vendors extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'Vendor_id', 
        'Vendor_userid', 
        'Vendor_category_id', 
        'Vendor_mobilenumber',
        'Vendor_Category_Id', 
        'Vendor_Category_Fields', 
        'Vendor_online_verification_status', 
        'Vendor_offline_verification_status', 

        'Vendor_remarks', 
        'Vendor_isactive', 
    ];

}
