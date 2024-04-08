<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tableDataModel extends Model
{
    use HasFactory;
    protected $table = "basic_data_users"; 
    protected $primaryKey = "bdu_id";
    public $incrementing = true;
    public $timestamps = false;
    
    public function role()
    {
        return $this->belongsTo(rolesModel::class, 'bdu_ro_id', 'ro_id');
    }
}
