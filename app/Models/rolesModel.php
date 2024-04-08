<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rolesModel extends Model
{
    use HasFactory;
    
    protected $table = "roles";
    protected $primaryKey = "ro_id"; 
    public $incrementing = true; 
    public $timestamps = false;   
}
