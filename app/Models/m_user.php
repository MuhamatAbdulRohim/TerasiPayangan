<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_user extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';

    public $timestamps=false;

    public function keuserlevel(){
        return $this->belongsTo(m_userlevel::class,'id_level');
    }

    public function kemember(){
        return $this->hasOne(m_members::class,'user_id');
    }
}
