<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_orders extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    public $timestamps = false;

    public function keorderdetail(){
        return $this->hasMany(m_order_detail::class,'order_id');
    }

    public function kemember(){
        return $this->belongsTo(m_members::class,'member_id');
    }
}
