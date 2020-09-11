<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'lastname', 'lastname2', 'email', 'phone', 'food_image','api_token','email_confirmation','email_confirmed','phone_code_for_confirm', 'phone_confirmed','nip','nip_confirmed'
    ];

    protected $hidden = [
       'password'
    ];
    
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

}
