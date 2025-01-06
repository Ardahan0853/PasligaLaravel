<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class haberler extends Model
{
    //
    protected $table = 'haberler';
    protected $guarded = ['id'];

    public function takim()
    {
        $this->belongsTo(takim::class, 'takim_id', 'id');
    }
}
