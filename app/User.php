<?php

namespace App;

use App\Models\m_members;
use App\Models\m_userlevel;
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
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'user';
    protected $primaryKey = 'user_id';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    public function kemember(){
        return $this->hasOne(m_members::class,'user_id');
    }

    public function keuserlevel(){
        return $this->belongsTo(level::class,'id_level');
    }

    public function punyaRule($namaRule){

        if ($this->keuserlevel->jenis_level == $namaRule){
            return true;
        }

        return false;
    }
}
