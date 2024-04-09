<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class additionalFormModel extends Model
{
    use HasFactory;
    protected $table = 'additional_data_users';
    protected $primaryKey = 'adu_id';
    public $incrementing = true ;
    public $timestamps = false ;
    // protected $casts = [
    //     'bdu_register_date' => 'date',
    // ];
}
