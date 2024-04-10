<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentModel extends Model
{
    use HasFactory;
    protected $table = "forms";
    protected $primaryKey = "form_id";
    public $incrementing = true;
    public $timestamps = false;
    public function role()
    {
        return $this->belongsTo(tableDataModel::class, 'form_token' ,'bdu_form_token');
    }
}
