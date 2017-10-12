<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_order_detail extends Model
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id';

    public $timestamps = false;

    public function keorder(){
        return $this->belongsTo(m_orders::class,'order_id');
    }

    public function keproduct(){
        return $this->belongsTo(m_product::class,'product_id');
    }
}
