<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        "title",
        "subtitle",
        "message",
        "priority"
    ] ;
}
