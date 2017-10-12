<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_members extends Model
{
    protected $table ='members';
    protected $primaryKey = 'member_id';

    public $timestamps = false;

    public function keorder(){
        return $this->hasMany(m_orders::class,'member_id');
    }

    public function ketestimoni(){
        return $this->hasMany(m_testimoni::class,'member_id');
    }

    public function keuser(){
        return $this->belongsTo(m_user::class,'user_id');
    }
}
