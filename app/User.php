<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'schoolname','schoolnumber','district','ward','headmaster','slp','halmashauri','owners','jinsi','ngazi','phone', 'email', 'password',
    ];

    public function wanafunzi()
    {
        return $this->hasMany('App\Wanafunzi','school_id');
    }

    public function waalimu()
    {
        return $this->hasMany('App\Waalimu','school_id');
    }

    public function vitabu()
    {
        return $this->hasMany('App\Vitabu','school_id');
    }

    public function kiongozi()
    {
        return $this->hasMany('App\Kiongozi','school_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
