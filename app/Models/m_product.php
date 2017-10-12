<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';

    public $timestamps = false;

    public function kecategory(){
        return $this->belongsTo(m_category::class,'category_id');
    }

    public function keoderdetail(){
        return $this->hasMany(m_order_detail::class,'product_id');
    }
}
