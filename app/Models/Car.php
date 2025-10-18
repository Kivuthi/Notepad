<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

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
        "images" => 'array',
        "company",
    ] ;
}
