<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kadro extends Model
{
    //
    protected $table = 'kadro';
    protected $guarded = ['id'];

    public function takim()
    {
       return $this->belongsTo(takim::class, 'takim_id', 'id');
    }

    public function oyuncu()
    {
       return $this->hasMany(kadroMember::class, 'kadro_id', 'id');
    }
}
