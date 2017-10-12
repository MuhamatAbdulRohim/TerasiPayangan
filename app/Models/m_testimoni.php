<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_testimoni extends Model
{
    protected $table = 'testimoni';
    protected  $primaryKey = 'testimony_id';

    public $timestamps = false;

    public function kemember(){
        return $this->belongsTo(m_members::class,'member_id');
    }
}
