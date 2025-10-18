<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        "make",
        "model",
        "year",
        "engine",
        "description",
        "availability",
        "drive",
        "mileage",
        "powertrain",
        "tranmission",
        "price",
        "location",
        "image",
        "company",
    ] ;
}
