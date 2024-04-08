<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Hr extends Authenticatable
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var string
     */
    protected $table = "hrs";


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hr_username',
        'hr_email',
        'hr_password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'hr_password',
        'remember_token',
    ];

}
