<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\takim;

class puanDurumu extends Model
{
    //
    protected $table = 'puan_durumu';
    protected $guarded = ['id'];

    public function takim()
    {
        return $this->belongsTo(takim::class, 'takim_id', 'id');
    }
}

