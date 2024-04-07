<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FormsRoles extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'forms_roles'; // Specify the table name if different from the default
    protected $primaryKey = "fr_id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'fr_form_id',
        'fr_ro_id'
    ];
}
