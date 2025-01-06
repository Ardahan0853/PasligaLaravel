<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kadroMember extends Model
{
    //
    protected $table = 'kadro_members';

    protected $guarded = ['id'];


    public function kadro()
    {
        return $this->belongsTo(kadro::class, 'kadro_id', 'id');
    }
}
