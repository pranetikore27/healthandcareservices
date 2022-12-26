<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        "Location_owneruserid", 
        "Location_ip", 

        "Location_countryName", 
        "Location_countryCode", 
        "Location_regionCode", 
        "Location_regionName", 
        
        "Location_cityName", 
        "Location_zipCode", 
        "Location_isoCode", 
        "Location_postalCode", 
        
        "Location_latitude", 
        "Location_longitude", 
        "Location_metroCode", 
        "Location_areaCode", 
        "Location_timezone", 
    ];
}
