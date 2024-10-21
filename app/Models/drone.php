<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class drone extends Model
{
    use HasFactory;
    protected $fillable = [ 
        "id",
        "name",
        "model",
        "brand",
        "airworthiness",
        "operational",
        "internalSerial",
        "printedSerial",
        "remoteID",
        "registration",
        "purchased",
        "notes"
    ];
}
