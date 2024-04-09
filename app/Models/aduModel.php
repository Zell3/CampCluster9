<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aduModel extends Model
{
    use HasFactory;
    protected $table = "additional_data_users"; 
    protected $primaryKey = "adu_id";
    public $incrementing = true;
    public $timestamps = false;
}
