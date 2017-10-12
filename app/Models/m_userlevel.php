<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_userlevel extends Model
{
    protected $table = 'userlevel';
    protected $primaryKey = 'id_level';

    public $timestamps=false;

    public function keuser(){
        return $this->hasMany(m_user::class,'id_level');
    }
}
