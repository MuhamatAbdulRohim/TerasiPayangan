<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';

    public $timestamps = false;

    public function keproduct(){
        return $this->hasMany(m_product::class,'category_id');
    }
}
