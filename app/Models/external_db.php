<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class external_db extends Model
{
    use HasFactory;
    protected $table ="external_db";
    public $timestamps = false;
}
