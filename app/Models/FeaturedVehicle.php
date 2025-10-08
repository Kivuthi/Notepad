<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedVehicle extends Model
{
    protected $fillable = [
    "image",
    "arrival",
    "price",
    "make",
    "year",
    "mileage",
    "powertrain",
    "transmission",
    "location",
    "company",
    "rating"
    ];
}
