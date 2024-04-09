<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Forms extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'forms'; // Specify the table name if different from the default
    protected $primaryKey = "form_id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'form_token',
        'form_hr_id',
        'form_title',
        'form_location',
        'form_comment',
        'form_created_at',
        'form_updated_at',
        'form_expired_at',
        'form_is_employee',
        'form_is_cooperative',
        'form_ro_id'
    ];

    protected $casts = [
        'form_ro_id' => 'json'
    ];
}
