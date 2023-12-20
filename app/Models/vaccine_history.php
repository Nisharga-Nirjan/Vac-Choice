<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccine_history extends Model
{
    use HasFactory;
    protected $table ="vaccine_history";
    public $timestamps = false;
}
