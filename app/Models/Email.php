<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'emails'; // Specify the table name if different from the default
    protected $primaryKey = "email_id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'email_id',
        'email_name',
        'email_otp',
        'email_create_at'
    ];
}
