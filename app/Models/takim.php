<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class takim extends Model
{
    //
    protected $table = 'takim';
    protected $guarded = ['id'];

    public function takimPuan()
    {
       return $this->hasOne(puanDurumu::class, 'takim_id', 'id');
    }
}
